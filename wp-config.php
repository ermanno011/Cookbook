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
define( 'DB_NAME', 'cookbook' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '#S.<hNzXI~V8K-i+.-r+J!|8[+f(k_!b:yLp(6GSDnH&Vel|=5MgyYlCOc*[[=;x' );
define( 'SECURE_AUTH_KEY',  ')(?ct`Zo[N7,S1;A1d=^uWbAH.g@)eOXR8t-6b69a^!8jNp01X][{jR>p#h/n_2s' );
define( 'LOGGED_IN_KEY',    'y@,.7Is)0^G!_]G=RR QdZ}d0,&fNW{Pfv]4+HO<rzM+W+Qw0.m#M`$.S9?]$~$r' );
define( 'NONCE_KEY',        'INMqo23V,*gfSjK#r|!o8ro/l+tct;.9W%6}O[~0uY3jn^h sbEsi=Gjn@O9WFge' );
define( 'AUTH_SALT',        '1b4;EYsR.mT?tiRIgX6odA/tZe+*=U3msP|:w6xEC_<$IEisP^Vj.%WIX;GcbgXA' );
define( 'SECURE_AUTH_SALT', ',q:W8YB8;sOletJ8&Q[{}d:TD> w[4&fLMGB55l`;<;6)Kg5^_n!/Z&F[2!o&qNq' );
define( 'LOGGED_IN_SALT',   'PO=pY/W&1~@%iRTMdk}&X`JU,DtJRMk%X4;4c$3-W]SX)<Pg_0{vZr+5tElW*wzZ' );
define( 'NONCE_SALT',       'IAeNMdW7?WPBH8k1S=}&!VL|z.Jo[0H!yNGc]t!o!3N7F^>q?m2e>NEeWE9htqVQ' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
