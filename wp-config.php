<?php

//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL cookie settings
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
define( 'DB_NAME', 'wpdb' );

/** Database username */
define( 'DB_USER', 'dbuser' );

/** Database password */
define( 'DB_PASSWORD', '123' );

/** Database hostname */
define( 'DB_HOST', 'db' );

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
define( 'AUTH_KEY',         'boqyx7gqzkdth0ucs6j7orl1yquamavu9eukuqaruu2ecnzhrgooeytcysn518ga' );
define( 'SECURE_AUTH_KEY',  'sa0g5nlwnnx9hw9b56wriipsceosak13isxjn37proqk6ozh5sgrlwwr1ecpthg3' );
define( 'LOGGED_IN_KEY',    'itb7pltfaf6buokyn8wzuaukqfmg4dmykp52cxw9zkkk01gtsw3g1jssmuz6n4sd' );
define( 'NONCE_KEY',        'qatre5q5n0vruz18nxjhyuldilexfwjdhzcfrmcwusy4j3aznpyy37qr4kobvy28' );
define( 'AUTH_SALT',        'nxrdfgqfrs2anb0webrlpnqexxadhnqgq3tgmumujmlnzynu7eylmackvrebmlkf' );
define( 'SECURE_AUTH_SALT', 'wfabwnw82bqvwpcen0zp4uoxfjhctgochot3khhithdz5yuu6oo82uwuvgo3df4b' );
define( 'LOGGED_IN_SALT',   'jdcvcnr1fudebkvspoab3ktgtf2gvqzefgkpdpqfya1svvtkfdsxrndego6onwvk' );
define( 'NONCE_SALT',       'bryxzxnlmouidpzfpdk84ak1wpdrtoa2pgnkea4lcdhotgi2xvnuiigapnkssrvd' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpqn_';

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
