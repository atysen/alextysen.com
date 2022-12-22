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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'alextysen' );

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
define( 'AUTH_KEY',         'j1kBYm+)767V&8KSiJ:$?9N{[qtzc#f)woCj+DRgA!9}6*s*eWlbY; +!nRox+98' );
define( 'SECURE_AUTH_KEY',  'I&];/GI{P!~-7wAbUT#sMNMn-fx3Qm>${{XK^P}<$B)0WEy*mNLbo>$sl4E?%=|}' );
define( 'LOGGED_IN_KEY',    ',<x,ucpq5q[1foMC{}U1~PIUp}{(7rZs-?h-*X&ZTUn[9pK+tto-dT*Ix3VWh.8F' );
define( 'NONCE_KEY',        'NTe/-dODEGwXlGCvmZf=dvviWceL6R6IRZJB?f*X#zAiJAeoFh3(Ir`<?1u=@jkE' );
define( 'AUTH_SALT',        'y5lIzih.>o7Zj8){b?n@eW7*t$JEpc^7bMZ$]LP3p3o@_>&,Od~~@x_p3Vi>gZ.v' );
define( 'SECURE_AUTH_SALT', 'c5GI15Jr~?V~eI=g$^;]lt>({qd*^$&+5[E`ru*&t$u)5f6hbpekDlyuEH$<|s~8' );
define( 'LOGGED_IN_SALT',   '03A_vq$<96PYuvWT:d61wa=+Ls):z,18F]r^ZXZS/3A$PO(}C&}QgV|Br?,D:93V' );
define( 'NONCE_SALT',       'n`uc&BI4zTMSZt@:A7D~,@#-mh&6KxUK:P$?DWCdxIJ&,EC@-3?5E_Q#~ed{1b6_' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
