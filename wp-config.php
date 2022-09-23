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
define( 'DB_NAME', 'hocwp' );

/** Database username */
define( 'DB_USER', 'hocwp' );

/** Database password */
define( 'DB_PASSWORD', '123456' );

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
define( 'AUTH_KEY',         ' C=zaFA>Z~xr.8o[j7atln:Fi!9V9> QxN^oBrO9~wR@K@)/kSWlxZ1^U$tzqG+g' );
define( 'SECURE_AUTH_KEY',  'l9x(uah%<)~5,<9@3p]pg{33FL2EPN*rH(_V#g$.2AvZKzY& !>eTX7DGn@yM}d3' );
define( 'LOGGED_IN_KEY',    '/[f7K(p5Y0<y^8e:~*AE!-}-S>sO-6q<mcH)UJHi#uQI$Bb^|;lkMc%8C|Y)=;9 ' );
define( 'NONCE_KEY',        'eha9#^N{TVV-fdlBu:jkny$Kd*,S@DZ5~5cq(I+{@jk<3V>|Tl?Yk82>c=Jo%6]e' );
define( 'AUTH_SALT',        '&.A8/~!J|A36GrJxR^^6B1VxwLN<4!a%#tn?j845J=L[FnIX]`GE[io{>sIz1?b7' );
define( 'SECURE_AUTH_SALT', ']S5D6`K7{&N9/{D8#8L`=hOo=bh0.yg=*e2tkvl+u%S?i9e,bp1/Y4.ZPbu#OsMT' );
define( 'LOGGED_IN_SALT',   'HGEVS8/P&(xb~&B5a$b1w:T6}|}y[2Pm?eUD@l]h%s)[d83[NiCWpdDe`BBdN@a@' );
define( 'NONCE_SALT',       '%i-k^CBP0&b-ox#)2,qjAybt>i0SC+h<h6v_}XVX7L1z_LM4g2%S%R.F93]4{pw9' );

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
