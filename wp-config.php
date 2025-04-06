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
define( 'DB_NAME', 'wordpresstest1' );

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
define( 'AUTH_KEY',         'hs(h=rr%QU+]gE(XXyb$oPaLq{4c|)4#B1w9EHGABeAc7v5ask`Fp}we|dfO=wrp' );
define( 'SECURE_AUTH_KEY',  'y~c6XCCO:)YUx=C>435o]X_`K&-Clf,pf@b-Jb$|q{-uvXTUqg]`W5AI`6TMy^[[' );
define( 'LOGGED_IN_KEY',    '-PQDl5lQF0_+^/oIBH|CUC(4gdrw,.7OuVzPs7rY4b{C|f;#e2%~^3XA80Yv?hZ4' );
define( 'NONCE_KEY',        '$i@KOjEQ9(en+l?LApemgt}]s;[ZuPMF;<XEW[11,eq;AneuF5m$#doO-HwE2aXO' );
define( 'AUTH_SALT',        'p>{168FA?3?}w]BqGO%m84d`&&WD}4QD?~$zx#cYf5*bgehTOXiNe!nA]nAY|tw%' );
define( 'SECURE_AUTH_SALT', 'GrbI+AF jG5aaP{|&**RybPVU?EIK_|4O0nD8G9*];wQd44YGk.o =SZi3<enLmH' );
define( 'LOGGED_IN_SALT',   'Z`3NkowTs,+qajb%M/33GfjG7fE$zL#T-eizXAQ_TfCFQ>`+H@b-.i` OWtHQ`MF' );
define( 'NONCE_SALT',       'pYPx&%EKxvGbN1n0)7yU=W2ZA`T7d9|z9r#)69QWUd]8te1fGww9J:iaBangM!/6' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
