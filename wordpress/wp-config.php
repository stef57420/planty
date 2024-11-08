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
define( 'AUTH_KEY',         'g@4U|d.QOw{grG=Hl<P05s~{=+LlXZ]6#DgAE}[*CblIP$Ye)k@*=?E@cWYbQ,pr' );
define( 'SECURE_AUTH_KEY',  '!|RP`Zzm^(-t$RSCFBE_jI~J])1i(,ER5.7;:Vy3m*GRoK6?Gv[[lE*k>2,x{m<d' );
define( 'LOGGED_IN_KEY',    'hIt_HD)V5KLlk4nvWM:1*d:k=FEDZ4I)5luJ?#}_Nhx3`E <Pj^m#jMzz/:vx(>D' );
define( 'NONCE_KEY',        '*@5H?<s8.I.N)NU.g3 CB`5V#_@)M:*^q0Hdn2WoS.[lJehHxg}%m$@CN!Id+6dx' );
define( 'AUTH_SALT',        'yt{rNF*f2($?S2;v15B.5^p_y1K]_)05=S~u/.8ROiWB31NzFiuS_xEcor?U6pNC' );
define( 'SECURE_AUTH_SALT', 'L j6h]GZ`<o.~PBI!V~@qD{;b<KV<j@ie{S(f*G4~`Z@AXcK]MT3)C*]6wEIvY`{' );
define( 'LOGGED_IN_SALT',   '~#L?fTd(`I}c@r>K9;VZXdQ|0P5gQyzaU5YT3kyA_z57AYen_:N?QPrPJauNTqKh' );
define( 'NONCE_SALT',       'q:X8^_$wxPD?25W`jNu)1{1^-G)TWm3+Ag491L*ymTc:t$}(ji</XRJSR@A9uU1*' );

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
