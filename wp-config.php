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
define( 'AUTH_KEY',         'u[D[r;Ek;0%poc!acQlkvav,psON W39~v&XoJz^c_Un<UJ&Rb_}<V/|6vP*Gb.B' );
define( 'SECURE_AUTH_KEY',  '[X5okGtet;:Uh(=iqPC>GrgsKdnNuA*Ma>Yf[v,%T,M7Q=Xp]1d4)sHGr{O#0TL!' );
define( 'LOGGED_IN_KEY',    'zrkVNx?$nW#owpq<5:Gh`^duy2J/&C8UU#sqoaFQ$ENjh5TYk]T!sYV7{[.7Bs=s' );
define( 'NONCE_KEY',        '*p1[K?e[F&k,t5?_!}BL)PQc?T=VBm0SiO1Qi]u=g*p->fF.qPzu~=ptsm(o}%<N' );
define( 'AUTH_SALT',        'don.Q1Jymyc#u+l=SrR#fc(p>S??qO7q`s<u.2{rJ.r6ns[,cTy7C$jVPQ^7nBX4' );
define( 'SECURE_AUTH_SALT', 'V{!,=^b]D&:nWZRO1eggJ;L ?nK9-JfDzt1Y4Q}9}.VGb3T5C&=@Pn+Ltitp9 P5' );
define( 'LOGGED_IN_SALT',   '#LBiGo9~er-kbt1bxtRT.w8!) X`P$h bx XRB8d&g050:s|GNR+M;A%]Cj;X=t ' );
define( 'NONCE_SALT',       'y(@@]Ub:|J A7mx3{QV%[]rq2c5&!Nto|#8uuCGRVOLC.ma_o@Lar`P:m~@(knOW' );

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
