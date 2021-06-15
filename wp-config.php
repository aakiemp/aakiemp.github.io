<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp894' );

/** MySQL database username */
define( 'DB_USER', 'wp894' );

/** MySQL database password */
define( 'DB_PASSWORD', ']S5p8[p6U8' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '7vjuknwdsceefomdrzarit7l7wc2onueo2fgmsjgr2omy76mta6fkxuhewnjalzm' );
define( 'SECURE_AUTH_KEY',  'brx61vvp6f82zzivfjrzuucamllqnddtl26tk1cmuq8yi0xvcaguezluwoyexcgu' );
define( 'LOGGED_IN_KEY',    'thebai84kafkbk7s4ikypf9m74w0fsh3ukkah6poq5ckzczrewdkqpzbgogyluhn' );
define( 'NONCE_KEY',        'xzpb1sypgyemkbvjpnz8tokdosn1ccyqhtfkr2szotjyd3ujdcr3te8amcnkgoop' );
define( 'AUTH_SALT',        'spdotmy4bohwkuuzgs0rsdauhlzyzrhfya8isqqrdker8lzocgpferp82nekscdp' );
define( 'SECURE_AUTH_SALT', 'macrz1phdafe2glw5rcbhhdbui7j2bo47yxadbnnukvj206p0x6eyajkjlev8grr' );
define( 'LOGGED_IN_SALT',   'ezohfxf5kh0wr5fgdrvrwdybzl6vo2uilcwv79oqps2wjqiooez8m6aqihrjq4sg' );
define( 'NONCE_SALT',       'rttmf7uyxzwmhrb7osse81puq7qguygb9rswuf0bzwifkwvowoij2e0z5b9ssnjc' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp6a_';

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

/* Multisite */
define('WP_ALLOW_MULTISITE', true);

define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', '127.0.0.1');
define('PATH_CURRENT_SITE', '/wp/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
