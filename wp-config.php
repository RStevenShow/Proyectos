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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'PortafolioRamon' );

/** Database username */
define( 'DB_USER', 'Admin' );

/** Database password */
define( 'DB_PASSWORD', 'Admin123' );

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
define( 'AUTH_KEY',         '4q]`oRj+m_T;s{(<2=u8O+&EqCOYD-}`h7^RwLNw:1)g+X_@5c?11;SKn!yop1QN' );
define( 'SECURE_AUTH_KEY',  'J5ZVcrG`w)qcQ>KiB4( 2G*tuQ/bG!Qd!wny``Y$NmQEXpU/?XwW`tB!Dr8~t6.%' );
define( 'LOGGED_IN_KEY',    '|mlL0SH~<w[3+Ol!U}4ALn}{e8#,#3.O?XdO7WltV!hB_$?DF~or2W;?5[nenp0>' );
define( 'NONCE_KEY',        '9lAEch}R`lV5_d~}>Z>+bUcuskWqs@<yq~N/Fu(WQ3r:X$@/&d(KFBaQEV}PB`#S' );
define( 'AUTH_SALT',        'f6jiKmB7?7]ab sW({Pva|;!J-q11XC~01.4EIm3|U&bs,@sWJ(fy:rxtK+#7ZI3' );
define( 'SECURE_AUTH_SALT', 'Q#WoO1>[.*}ncG_g7i$BygD4m[38EP43*5X~<Q~D0#, J?H9_>[TIDDbGr0o?d;`' );
define( 'LOGGED_IN_SALT',   'a-W3PXbRH{|CRECh+^2yoO7aFq!YfnNq~x/En<wugrsoK:*lm3>[0:er4hCBS>I&' );
define( 'NONCE_SALT',       '-Md5/o!ws|cPZ|sv@kaWv8QX7:JQ_9eUpFTq!fYV0i5D[f.KI*;KZHq${!=rjqMo' );

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
