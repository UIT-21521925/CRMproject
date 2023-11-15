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
define( 'DB_NAME', '4\'scosmetics' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'bichdao2723' );

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
define( 'AUTH_KEY',         'K[Ww|g|W&Diq j1LPz<Al_n=NP&Vc5nv8!@-Nsg<d}X/~IN`n@8A-edpO+yp^KQ;' );
define( 'SECURE_AUTH_KEY',  'xfg{oo7&BTXDze/Aa7<W2Tk~kjh_ %,t N^+oF%Ub=miB}>`.R#9Mocw^RO&LRVL' );
define( 'LOGGED_IN_KEY',    'rc._h[4{|C-tq5(-}0 IxtjS}toJ}b7GT_DG()8]oy_WdK?:28,{R36<*);vCt!P' );
define( 'NONCE_KEY',        'o;<n!do]XDMmwn`h 6v(sj#!zH3Yb#[f><=O7L2 =B))2`HZ8>A!ae_-MC{AZB{F' );
define( 'AUTH_SALT',        '5]Xn!rt0{+zQjSLu2;:pUy~SX.`>d0+[Iv*2`)<H[2FGR{:H;l%3_N=-]8udl1*!' );
define( 'SECURE_AUTH_SALT', '^znTIzOKV:@4sI+58b;@`DT}/lu4m9+2j-B@|IZFy1R5FK9,y|Ta/q,<;qMuU~F^' );
define( 'LOGGED_IN_SALT',   '98Qy+cz} )qZr@}&@*dLE4DDkjF!wP)o9X%A:9pKIOUvHU5$ueTWKPY2mE^hU$4q' );
define( 'NONCE_SALT',       ':]xn@0, >cmh4^&tG#6m#/Fu[c-54o:4<2+8B~b}@g9c^x&p`H)Y:UuH@b;W`7GD' );

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
