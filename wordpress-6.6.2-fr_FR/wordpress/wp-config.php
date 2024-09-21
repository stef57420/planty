<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'planty' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '9oxoVz:>Nr[Ea75A~BnyAjTf+A+#ArD*OjkNVgaF(pyf[!cEftb&I4hBbxgVx3pm' );
define( 'SECURE_AUTH_KEY',  'u]5=hp&R*D}r,3~$!>suWS+u4SG.~(IMI`my*yT~v2Q;wT2=r|8N]-&F9,@WNbaF' );
define( 'LOGGED_IN_KEY',    'o08eT&8Cd`Dj%4O7ATsQd{,Ze#Upw2G<3/U{`)ci!N{sofCd,3vUW7&U01e+edeH' );
define( 'NONCE_KEY',        'Rn~2]!f[ ;VKIN9x=Tx2j$d]7^PCJl%ftOFg0<xJ!g;zW,,s,j6m$W[@m*z^oTu{' );
define( 'AUTH_SALT',        'HY[k}]}D10Fr+t:v^Pq M%1Y<~s@7&EhGsU(rb#~sDz}&z;5!hA$M{t-G3+Y[z{3' );
define( 'SECURE_AUTH_SALT', ',Mg/cF^f~^p:M1t,*Z,CWA$iiN2-,Il`7rq4TzWC-Z7d9Al+^Z;47DOHPvBcsy;2' );
define( 'LOGGED_IN_SALT',   ',Vj=]|f1U`b4Jg^Tkc6tO*7q{996^hV4;bvT7b{|{nK(S6:5DLt$&FdG.,>|prx~' );
define( 'NONCE_SALT',       ' W~?o[mvjI?:*P)7O$`Uub~C;Anp5jZ^^I&NvC?Txxj1&V~sZKaPIWym=~LjbZ_A' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
