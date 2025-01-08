<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '*MC`Kc%op6$|0j @^)#~{>w=D8I{OMBg^aYf%TpXC@Xc@j]6:4<BQ}.=egrggB(~' );
define( 'SECURE_AUTH_KEY',   'z1U}y/T-6vO0itxoSc}^*0TO[MP%K|2ar[}iG$5.}u/nS1~UaB&<+wEwp>mpYS/l' );
define( 'LOGGED_IN_KEY',     '%RK|(xNlmcmRG+CgsW`pA&Z.&.=Q!}-a~2jyg`L!BL]hH<E TAMsD-q+,)EFL.J=' );
define( 'NONCE_KEY',         'f;Tq1i7k$S@~zP`/&L@^YORL##`5ZIH}R+Py6R]ZAs32y?=w7?43et<SAZ_tla+#' );
define( 'AUTH_SALT',         '<@:=<ndIn$/8nLS/*dpC/|h1.g%0@K;$`szGT~I:g/S=^1K-X<74zwW~MtGHs60j' );
define( 'SECURE_AUTH_SALT',  'nQpp~0th}tF-q-:0]7`kjR(aIo1>+^+/np9Jq&^*Z;2~ .dmEeZ4ZmY~s5MunMh4' );
define( 'LOGGED_IN_SALT',    '/OMmP9[:Pw:V5VY.l]+.WM&_ep(y5~bcTeLSJei(zh#f!0BG?HyTH*lQ1UK7HlA$' );
define( 'NONCE_SALT',        '<w+,zLQ(@b1x(bY.iNTs.9.j*0T}4h]GT#u/`Ge1hfm]!jAkZIKS77,mdbtEZ6jP' );
define( 'WP_CACHE_KEY_SALT', 'D0=8<8(^mP{LEAtoq+_$O=gR;IPT),$KkQX;H_ /tiGOs549G[/0GmR`Bm;AZTR}' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
