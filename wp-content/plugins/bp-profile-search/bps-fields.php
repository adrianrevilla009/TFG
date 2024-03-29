<?php

function bps_get_fields ()
{
	static $groups = array ();
	static $fields = array ();

	if (!empty ($groups))  return array ($groups, $fields);

	$field_list = apply_filters ('bps_add_fields', array ());
	foreach ($field_list as $f)
	{
		do_action ('bps_edit_field', $f);
		if (!bps_Fields::set_filters ($f))  continue;

		$groups[$f->group][] = array ('id' => $f->code, 'name' => $f->name);
		$fields[$f->code] = $f;
	}

	return array ($groups, $fields);
}

function bps_parsed_fields ()
{
	static $fields;

	if (isset ($fields))  return $fields;

	$k = 1000;
	$fields = bps_parse_request (bps_get_request ('filters'));
	foreach ($fields as $f)  if (!isset ($f->order))  $f->order = $k++;
	uasort ($fields, function($a, $b) {return ($a->order <= $b->order)? -1: 1;});

	return $fields;
}

function bps_parsed_field ($code)
{
	$fields = bps_parsed_fields ();

	return isset ($fields[$code])? $fields[$code]: false;
}

class bps_Fields
{
	private static $display = array
	(
		'text'			=> array ('contains' => 'textbox', '' => 'textbox', 'like' => 'textbox'),
		'integer'		=> array ('' => 'integer', 'range' => 'integer-range'),
		'decimal'		=> array ('' => 'textbox', 'range' => 'range'),
		'date'			=> array ('' => 'date', 'range' => 'date-range', 'age_range' => 'range'),
		'location'		=> array ('distance' => 'distance', 'contains' => 'textbox', '' => 'textbox', 'like' => 'textbox'),

		'text/e'		=> array ('' => array ('selectbox', 'radio'), 'one_of' => array ('checkbox', 'multiselectbox')),
		'decimal/e'		=> array ('' => array ('selectbox', 'radio'), 'range' => 'range'),
		'set/e'			=> array ('match_any' => array ('checkbox', 'multiselectbox'), 'match_all'	=> array ('checkbox', 'multiselectbox')),
	);

	// to generate the Search Mode selector in the admin page
	public static function get_filters ($f)
	{
		$labels = array
		(
			'contains'		=> __('contains', 'bp-profile-search'),
			''				=> __('is', 'bp-profile-search'),
			'like'			=> __('is like', 'bp-profile-search'),
			'range'			=> __('range', 'bp-profile-search'),
			'age_range'		=> __('age range', 'bp-profile-search'),
			'distance'		=> __('distance', 'bp-profile-search'),
			'one_of'		=> __('is one of', 'bp-profile-search'),
			'match_any'		=> __('match any', 'bp-profile-search'),
			'match_all'		=> __('match all', 'bp-profile-search'),
		);
		
		$labels = apply_filters ('bps_filter_selector', $labels);
		$filters = array ();
		foreach ($f->filters as $filter)
			$filters[$filter] = $labels[$filter];
		return $filters;
	}

	// to append the search mode to the field label in the form template
	public static function get_filter_label ($filter)
	{
		$labels = array
		(
			'contains'		=> __('contains', 'bp-profile-search'),
			''				=> '',
			'like'			=> __('is like', 'bp-profile-search'),
			'range'			=> '',
			'age_range'		=> '',
			'distance'		=> __('is within', 'bp-profile-search'),
			'one_of'		=>  '',
			'match_any'		=> __('match any', 'bp-profile-search'),
			'match_all'		=> __('match all', 'bp-profile-search'),
		);

		$labels = apply_filters ('bps_filter_labels', $labels);
		return $labels[$filter];
	}

	// whether the value of this field is the same for all the search results
	public static function same_value ($f)
	{
		if (!isset ($f->filter))  return true;

		switch ($f->filter)
		{
		case '':
			return !bps_is_expression ($f->value);

		case 'range':
		case 'age_range':
			return (!empty ($f->value['min']) && !empty ($f->value['max']) && $f->value['min'] == $f->value['max']);

		case 'one_of':
			return (count ($f->value) == 1);

		default:
			return false;
		}
	}

	public static function set_filters ($f)
	{
		$format = isset ($f->format)? $f->format: 'none';
		$enum = (isset ($f->options) && is_array ($f->options))? count ($f->options): 0;
		$selector = $format. ($enum? '/e': '');
		$display = apply_filters ('bps_field_config', self::$display, $f);
		if (!isset ($display[$selector]))  return false;

		$f->filters = array_keys ($display[$selector]);
		return true;
	}

	public static function is_filter ($f, $filter)
	{
		return in_array ($filter, $f->filters);
	}

	public static function valid_filter ($f, $filter)
	{
		return in_array ($filter, $f->filters)? $filter: $f->filters[0];
	}

	public static function set_display ($f, $filter)
	{
		$format = isset ($f->format)? $f->format: 'none';
		$enum = (isset ($f->options) && is_array ($f->options))? count ($f->options): 0;
		$selector = $format. ($enum? '/e': '');
		$display = apply_filters ('bps_field_config', self::$display, $f);
		if (!isset ($display[$selector][$filter]))  return false;

		$display = $display[$selector][$filter];

		if (is_string ($display))
		{
			$f->display = $display;
		}
		else
		{
			$default = (isset ($f->type) && in_array ($f->type, $display))? $f->type: $display[0];
			$choice = apply_filters ('bps_field_display', $default, $f);	// deprecated filter -- to be removed -- use 'bps_field_before_search_form' instead	
			$f->display = in_array ($choice, $display)? $choice: $default;
		}
		return true;
	}
}

function bps_parse_request ($request)
{
	$j = 1;

	$parsed = array ();
	list (, $fields) = bps_get_fields ();
	foreach ($fields as $key => $value)
		$parsed[$key] = clone $fields[$key];

	foreach ($request as $key => $value)
	{
		if ($value === '')  continue;

		$code = bps_match_key ($key, $parsed);
		if ($code === false)  continue;

		$f = $parsed[$code];
		$filter = ($key == $code)? '': substr ($key, strlen ($code) + 1);
		if (!bps_is_filter ($filter, $f))  continue;

		switch ($filter)
		{
		default:
			$f->filter = $filter;
			$f->value = $value;
			break;
		case 'contains':
		case '':
		case 'like':
			$exp = bps_is_expression ($value);
			if ($exp == 'mixed')
				$f->error_message = __('mixed expression not allowed, use only AND or only OR', 'bp-profile-search');
			else if ($filter == '' && $exp == 'and')
				$f->error_message = __('AND expression not allowed here, use only OR', 'bp-profile-search');
			else
				$f->filter = $filter;
			$f->value = $value;
			break;
		case 'distance':
			if (!empty ($value['location']) && !empty ($value['lat']) && !empty ($value['lng']))
			{
				if (empty ($value['distance']))  $value['distance'] = 1;
				$f->filter = $filter;
				$f->value = $value;
			}
			break;
		case 'range':
			if ($value['min'] !== '')
				$f->value['min'] = $value['min'];
			if ($value['max'] !== '')
				$f->value['max'] = $value['max'];
			if (isset ($f->value))
				$f->filter = $filter;
			break;
		case 'age_range':
			if (is_numeric ($value['min']))
				$f->value['min'] = (int)$value['min'];
			if (is_numeric ($value['max']))
				$f->value['max'] = (int)$value['max'];
			if (isset ($f->value))
				$f->filter = $filter;
			break;
		case 'range_min':
		case 'age_range_min':
			if (!is_numeric ($value))  break;
			$f->filter = rtrim ($filter, '_min');
			$f->value['min'] = $value;
			if ($filter == 'age_range_min')  $f->value['min'] = (int)$f->value['min'];
			break;
		case 'range_max':
		case 'age_range_max':
			if (!is_numeric ($value))  break;
			$f->filter = rtrim ($filter, '_max');
			$f->value['max'] = $value;
			if ($filter == 'age_range_max')  $f->value['max'] = (int)$f->value['max'];
			break;
		case 'label':
			$f->label = stripslashes ($value);
			break;
		}

		if (!isset ($f->order))  $f->order = $j++;
	}

	return $parsed;
}

function bps_match_key ($key, $fields)
{
	foreach ($fields as $code => $f)
		if ($key == $code || strpos ($key, $code. '_') === 0)  return $code;

	return false;
}

function bps_is_filter ($filter, $f)
{
	if ($filter == 'range_min' || $filter == 'range_max')  $filter = 'range';
	if ($filter == 'age_range_min' || $filter == 'age_range_max')  $filter = 'age_range';
	if ($filter == 'label')  return true;

	return bps_Fields::is_filter ($f, $filter);
}
