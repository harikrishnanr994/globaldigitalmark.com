<?php

// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define( 'FORCE_SSL_ADMIN', true ); // Redirect All HTTP Page Requests to HTTPS - Security > Settings > Secure Socket Layers (SSL) > SSL for Dashboard
// END iThemes Security - Do not modify or remove this line

/**
 * The base configuration for WordPress
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
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', '963823042c1ed9e75755ee9606230677b948c1f6e1b398cf');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'o>mkr,fqU48!~!?pa$wjXkJ,$D<k`(mG:&|aGqpwWcF:)Ohnt$XP7t7^sfgx.;{L');
define('SECURE_AUTH_KEY',  'q,+{ig~R&D_l`x/n#F;P^]oOUVJP>RaJ{#]0Y&_M4(Mj`]z>y#kzC&NBE.`*=D@6');
define('LOGGED_IN_KEY',    'R>OB)4Vx5B40i~4s6NeBhJ>6_8{bZvN%{yMb0]=<:TtG1~LgoxV!q#TVn@:w-Yt|');
define('NONCE_KEY',        'Ncko<z0S;70])R+8[+hU`=?ZiCg@0oz86mJRbiD2!9TD8}<= <Z1%)u.Mn$@wp=c');
define('AUTH_SALT',        'oo.s}Bj^.sM3l{6^Ngc$--7Qm9`~oV-#bUd#r>3OM(1hxxljE$YP+_vU%#!1Dhc*');
define('SECURE_AUTH_SALT', 'Cle;q#|/^,pMI wqH84OoyrB{#]sr_KK+S|9^a7mnh7w4-P&8QV6{/X3p!3C^!U ');
define('LOGGED_IN_SALT',   'Vov]G$N1#l*Ib@(^WV:6fR_/30OQdHlc@RQv>N{xXGK9w_#;#Wuu/Z8T.;K.Ehe)');
define('NONCE_SALT',       '8Wg=d)`:FC^Vn<k~Rd[F|3#(`E%]4S}8d~$zN(8_q;Lq|-z6,|r3u=w:-Y/J>I#E');
define('WP_CACHE_KEY_SALT', 'globaldigitalmark.com');
define('WP_CACHE', true);
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
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

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
