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
define( 'DB_NAME', 'wordpress_day01' );

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
define( 'AUTH_KEY',         ',jRx,CE!1IuCU{zcCr.#-sU:{5@8c2}S,gE6H4Ch[NL[$;l)g`ssQedzJ^:Kl):.' );
define( 'SECURE_AUTH_KEY',  '/`)u!Zm6IZ*[k3RC^M]%~:,ox nn^J:}2P1|5neudl9R7]*>pONMQ21UK8*$i$J7' );
define( 'LOGGED_IN_KEY',    '`l1v`y:+4m^ CotT.@*)~A&ldge=z#/V}f&MT *3u[)}_UZ@pn1&]Nn^>FM4F$r7' );
define( 'NONCE_KEY',        '*eVT3JIF?o4j+z#G =PGVwP/&m:qzz?N,.:pl2!-5 (2m}*0,]vS)eoY-g&cjmU>' );
define( 'AUTH_SALT',        'V8;a7Eh`vR!YJ822,@Rb.Cz|s&#HYB]K_8cCK6%3ozs_u=W33]xe3h:-iQeOtfsC' );
define( 'SECURE_AUTH_SALT', 'Z6HhrlZ{$X-VG@4TD|vB)7ug#d37#e1ah2e_SuGLWBg-s2<V~5~+qtsorG+Gmbm^' );
define( 'LOGGED_IN_SALT',   'a)jekQ.L.DrmA.;2;wj:6qp|pHd,+^7$f_27!I^n*R<GA#+/+5S,Rr#ZKKf,5+I}' );
define( 'NONCE_SALT',       '&2/6X3G|/nYIC:ExKPw{X*D-:[<18I!x68o+>B>~Sq(|v9fCIOypS8c_x[|Hj7}R' );

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


define('ALLOW_UNFILTERED_UPLOADS', true);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
