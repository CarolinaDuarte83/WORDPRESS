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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'primera_basedatos' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'mysql' );

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
define( 'AUTH_KEY',         '^>G+= $Sh0Ingq$S|6Z.9f.qC6{dWQH+HsryGCsd0;1?mooM&#}y2D&SW~MwHT;w' );
define( 'SECURE_AUTH_KEY',  '#4LlJy,.Sr~+3R8a9Q8ih-;sI1d]f:S(jIAD=Op@awthA&>w_X&+-c+P3R5twzof' );
define( 'LOGGED_IN_KEY',    'j@d+Y9Z`I}bRy@CWg(K%u]g.s.ZC&ZTLw&`Y%m5@6`bvZgh8cuBltFjxe(#8|P-4' );
define( 'NONCE_KEY',        '8G(+h>5]F,o?^m@q84fU`w(MY~B!F1TNXHn@]~K$^vjh:IMU+C>mAA+#pG{)qFN3' );
define( 'AUTH_SALT',        '0&r3|gbjov7Mb)-eR$YNx^CI=5Dg,bogK>,Ts#UmS=p>i_42*Q%| uefjLqwvebE' );
define( 'SECURE_AUTH_SALT', '_%hO?(_2F}t}($m7m@ws]jKyVAsTtWNF~i$!A%uA{i.!Kj>`2uNvINjpQ.C_T*X`' );
define( 'LOGGED_IN_SALT',   'yY6&O%Ad$BWnKp}IGKISeB+&pdRS%_?]#wR9}_a?.} b1zhkT}% !?$k|r`H|$Ct' );
define( 'NONCE_SALT',       '1E}{XmrpVHXe,q76,Zi:^Bw]Oi_wH)>(cD0H&L6RsZHV,u]BJ}Ow4>m?U|2ekDBZ' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
