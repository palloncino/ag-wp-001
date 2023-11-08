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
define( 'DB_NAME', 'ag-wp-001-database' );

/** Database username */
define( 'DB_USER', 'ag-wp-001-database-username' );

/** Database password */
define( 'DB_PASSWORD', 'oVa6Emw@@rX' );

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
define( 'AUTH_KEY',         'oBixsM$jyyK^:-+g9RMZFW0G1.s--rw+.j7mSt6^/fXKU#(&AG=cc IgHRyA:M]>' );
define( 'SECURE_AUTH_KEY',  '2e?4M$Z9?(8mDGy6S^tq:nM7Ic.S=Gz~G@-u>5!)gk]PO2)^76$a6:5>rU:i7(ej' );
define( 'LOGGED_IN_KEY',    '<P5_1kg1(xWPvo ldwM~D}/4EC9~/:8{>ANo#ZFY}?IfyH+ynht$S*fXT/D@gO@)' );
define( 'NONCE_KEY',        '[=1XTKY:_#8r~ESa}58R.9&kcL[zW[<<ymZ=/RXG*:tc(gb:/[_11?H{&_z0 ;Y=' );
define( 'AUTH_SALT',        '^Gb6mK^eX(nLus$_1KixENY9H$As>[kLdl?gKdo>.evy.)_s{OiIDJ }0e*@rwW1' );
define( 'SECURE_AUTH_SALT', 'A3/1*4-T._k0q=~=~iBl.uZCTMU${@&mkLj`Kr&ELH^{yEI0g.4Qg!+LAM`f1a{|' );
define( 'LOGGED_IN_SALT',   '3a6@P&m{7~Q=po0I9SpF,joYKX(;%z<JQ7~OsAy|toSjbU<Nir4#[Zf(7@EN=S[?' );
define( 'NONCE_SALT',       '&yq8#r9>(XspW{Pv[vb};9D/m476+|OTtQMdNt5[YSf-x@MFYE.p>Yq6vF6=Q,QU' );

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
