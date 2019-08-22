<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package customify
 */

get_header(); ?>

<div class="content-inner">
	<?php
	if ( ! customify_is_e_theme_location( 'single' ) ) {
		?>
		<section class="error-404 not-found">
			<?php if ( customify_is_post_title_display() ) { ?>
				<header class="page-header">
					<h1 class="page-title" id="error_pagina_no_encontrada" align="center"><?php esc_html_e( 'Vaya! My Home Network no ha podido encontrar esta página.', 'customify' ); ?></h1>
				</header><!-- .page-header -->
			<?php } ?>
			<div class="page-content widget-area">
				<!--
				<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'customify' ); ?></p>
				<div class="widget">
					<?php get_search_form(); ?>
				</div>
			-->
			<p id="texto_pagina_no_encontrada">Parece que no se ha podido localizar la página que estás buscando. Si tienes algún problema no dudes en contactar con nosotros mediante el siguiente <a href="http://myhomenetwork.es/contacto/">formulario</a></p>
			</div><!-- .page-content -->
		</section><!-- .error-404 -->
		<?php
	}
	?>
</div><!-- #.content-inner -->
<?php
get_footer();
