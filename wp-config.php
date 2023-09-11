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
define( 'DB_NAME', 'vmnewsco_wp330' );

/** Database username */
define( 'DB_USER', 'vmnewsco_wp330' );

/** Database password */
define( 'DB_PASSWORD', '(9!94p35vS' );

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
define( 'AUTH_KEY',         'kfv4t8ais7rmtuvv0fdscu790cognhy8qp2izjjfmmw8mfmyl3pjwuy6kzniel53' );
define( 'SECURE_AUTH_KEY',  'qi1n5ly6wubuq93qpdg3euojywieurdqcwe972etmo9knhnbfjrakea9lgrox66u' );
define( 'LOGGED_IN_KEY',    'tijqkf7fhzbjmsiiaah22b4wyiifikx26fmayrrs0uy4il2nvhk7pbayvtmzct5b' );
define( 'NONCE_KEY',        'yj7jhheo1opws1ujiaxohvsa2bjmxjltdqvhele15zmmmwjuze1dv3zvkydcqtu8' );
define( 'AUTH_SALT',        'kbzxofjudgamhrvseni9hlcfjj0jrbpctjds9zy6gvvz1bt2uk78cpjegrgbiiuj' );
define( 'SECURE_AUTH_SALT', 'gfjxxsrggsivjorfm2ls1xf74zssybqqdteqe1fdsz29aabokxsjgtvz5uxyxbtw' );
define( 'LOGGED_IN_SALT',   'n3hgncjjaja0exjn47eygz1jgvg7qcckrgcho4bmbtt6gmuzcyfddws0waqsxrms' );
define( 'NONCE_SALT',       'fbahoq0efdcrmx9q7ypcr1iziuu0jqmzz8swndzzb6whtfieolsju5fawojbkm3f' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp68_';

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
