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
define( 'DB_NAME', 'wordpress_1' );

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
define( 'AUTH_KEY',         'nC #Ax%kB_@/)tK)D-keRt1n`U,snC0K[Og$(uHyVUzQhB|Y@l;A,>Nk((?|soLY' );
define( 'SECURE_AUTH_KEY',  ' i?8cr}lb_9e>3Q!IVM;^m4Dh=!Ix=<ff?>6)]fUQzZ8WD680Abj(Ciphmv4DI}>' );
define( 'LOGGED_IN_KEY',    'utc;:Ry#@@NOa@Hvpd4[Ax=P]~sfy7F14=H0bIaxBgCI}?0ygq_bf,vI7AK@^Q|?' );
define( 'NONCE_KEY',        '%/O_oISVyZ%.V ;nPs-`x|]tx7qd>l,v>p6P{Env`?oF2J8|H/F/k2S cP*x&`VD' );
define( 'AUTH_SALT',        'r_`g%nsM+@yrNJK9D-uk;HDKL)Z@Ike+JC{B(1.(g-ErcGwHE/;EMwM[j/ng39Y&' );
define( 'SECURE_AUTH_SALT', 'p=*PeAYC/+FnDs4U>uNDgfF[PW[2/,(robI~|OUplwVTjfy7c7})YE~H7QH eGLT' );
define( 'LOGGED_IN_SALT',   'jb](3:#YB.q_9>OQN%>%~|sb.QO!^v9tFDM_`aMudg$U`5v43m/uMMLi[Ve;EMU_' );
define( 'NONCE_SALT',       'za1e?}YOm>S)KnaXsrrzslIZ=T>V{a9zW(ca.9zRv:%7G</FnUX#Y~W(z_8<On34' );

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
