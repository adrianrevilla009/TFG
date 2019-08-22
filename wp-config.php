<?php

// BEGIN iThemes Security - No modifiques ni borres esta línea
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Desactivar editor de archivos - Seguridad > Ajustes > Ajustes WordPress > Editor de archivos
// END iThemes Security - No modifiques ni borres esta línea

/**
 * The base configuration for ClassicPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package ClassicPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for ClassicPress */
define('DB_NAME', 'bdyjbgjq_myhomenetwork');

/** MySQL database username */
define('DB_USER', 'bdyjbgjq');

/** MySQL database password */
define('DB_PASSWORD', 'gkseM3cfNCx3');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.classicpress.net/secret-key/1.0/salt/ ClassicPress.net secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since WP-2.6.0
 */
define('AUTH_KEY',         'a/]l)d+WzZ[6bJ43$$Vb|)g~0RJRN&)lpu<Hpn9D3%Cd#3}TY+.h#f;@pr37,ZW9');
define('SECURE_AUTH_KEY',  'qGbMy< EiPNAC42}n[Asvrpro0*L:UDu_XF~zzp9IXsvItpik4U&?*uat koRgI[');
define('LOGGED_IN_KEY',    '2Ih.bX}>P|-/GHt6<R2X=)n<d-#w {}C<(*L5a)E:)Ad`?zI=J# D;rT.7L:7C}i');
define('NONCE_KEY',        '0`jN40m#v?w+U:n*2<FL:`ku2,7/D4ia|p`_`Wg7YvyLyV4(W|BGFRnT})/f`/Uh');
define('AUTH_SALT',        '/QJ_J/Em+3&)P7q?S&e?@4D%6(7nJ1J5RXP}>yB>{D0JFFTE?q{<3EMA0?5]W^PB');
define('SECURE_AUTH_SALT', '!-Q!*yc=ZSCSt)<8,)M4`v2cWV!%oi(R4a]}YNpra?g=G_)O(Ns@YDRDWy(;uidn');
define('LOGGED_IN_SALT',   'ePR{rwz/q$oyqZ[]lQmWbASXmE{t59<):b|jUCFT0d*!=$]x6}*fzf`MhaqF%itT');
define('NONCE_SALT',       '~Id5t@iO,Ro1zU;>rXto(Fy&G;H^yy?>bd7&T/N>3jdY-q%R~8U#a]d$m5QGZgGH');

/**#@-*/

/**
 * ClassicPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'cp_';

/**
 * For developers: ClassicPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

define( 'WPMS_ON', true );
define( 'WPMS_SMTP_PASS', 'Mellamoadri96' );
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the ClassicPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up ClassicPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
