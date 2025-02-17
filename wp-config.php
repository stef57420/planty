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
define( 'AUTH_KEY',          '!tsP6?InQCTl/~w2%v_Vp>_^ui$B~H!~t*bxX?Pp<}c3MY:4w[f]V= @7,d$<BF4' );
define( 'SECURE_AUTH_KEY',   'n5^mVcpSOmlH~x8>h,N|N&KF?X{yS]nI=0F{lP8%APD=)fm%bHFc/OxHNi7[qKGX' );
define( 'LOGGED_IN_KEY',     'pmOZA[6}=I>-uc+hn0WB~m_JA+WIIL}V^a9=Fi}MkFW16=_U09JKu)VwaT|{A11y' );
define( 'NONCE_KEY',         '{~+Y+!_q, ]:,rGOGQ4r:.+-EdW/a11b{IQit.7ZO!u-csOG&~>+U1yIH!?7/#]r' );
define( 'AUTH_SALT',         'X mp)b-fBwCyI}7!7o%g1ID6p cf@QW5cC|.~Q1OV^2G3rmA,zPphNBXzRjt^:^)' );
define( 'SECURE_AUTH_SALT',  '5H|_V8C5c->Is}^*Pc &~>|a`Z~yLf1j*z/1;*kRys!NUoh`0cTf?:7<x<e[KLwL' );
define( 'LOGGED_IN_SALT',    'Y2GGW+n1{Y0}3:B/=n,*z$s~%3.TmE-hLTbT_uKdn|a7qzGdFB^ik^*Hpf,xmySG' );
define( 'NONCE_SALT',        '^F=%+@^tpB]TrNYEHWz+#cWm1:ep=Y*37j19@L0]j986t%3~0fL*g*@LL+czDeJ0' );
define( 'WP_CACHE_KEY_SALT', '#rQ,%2>-Nr00$D/@B3_@`/pzGt+A6C[EdU~*~QIX~,o5TiW[t`oHc-Y]2SS#~xU0' );


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
