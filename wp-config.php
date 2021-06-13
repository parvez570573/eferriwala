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
define( 'DB_NAME', 'eferriwala' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'kC[rwCgpg,kLt]{vHM8R<=4~D}jDB,UfX,/5Eu./gYofLg`RKts1{p+b*arveGwA' );
define( 'SECURE_AUTH_KEY',  'l_f?=bz7bXQx}mH.6@K{u ~BYZ.Baalkir;nS{Nu+wQq/M-W>yExc:#(G?g$R9&u' );
define( 'LOGGED_IN_KEY',    'ur])YhG#3![nJ|/1K/^=BUt1=bp2`g>l^%zz32,FUOd&Q)vzu~)eDU@HboBg0@ZI' );
define( 'NONCE_KEY',        'S7LtURdW4d]Wa%,-22~B!qJR{,P=Z^:HQNjMCBRy]EcRD`u2JsqV~dILt2WpB~|l' );
define( 'AUTH_SALT',        'cQvHhy}|^{iatPtqBS%5 24@]K6X)z)pU@~q~5T%&d}OR4f!Q~7Ft!F<Ti_l^:h<' );
define( 'SECURE_AUTH_SALT', 'Rk&`y]kXsPxARTT$F;,0*@Nb@EOd(c@Ru/Kwi*GZy?ZVVt{ImnyGRicOtW/9mt62' );
define( 'LOGGED_IN_SALT',   'R,T0c7y=i/p5ZxC{Xx/(*,VJbW5o*+~3H5m!)54ZR N?gaJHtMkH)@g02LURZJ(9' );
define( 'NONCE_SALT',       '@=/5F/t*$J4,W`OQ09QDYN`Gz.)~(P9DpFJzFGcU]xr27ChI(K dG72&ymO?9*aw' );

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
