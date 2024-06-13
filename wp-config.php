<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'shammid_teck_vista_db' );

/** Database username */
define( 'DB_USER', 'shammid_admin_shammi' );

/** Database password */
define( 'DB_PASSWORD', 'aEvFh*=4O)hQ' );

/** Database hostname */
define( 'DB_HOST', 'maybrayhosting' );

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
define( 'AUTH_KEY',         'DR1!9?oH)dNInxtY)@mz@uQrHl Oe<E(NdSN#@v976lMn6=!rj#nhbxxi%T+BX~A' );
define( 'SECURE_AUTH_KEY',  'VA}$tUb%caM6~Ub3+;v6-xUi5e9%E3a@a8p;VCQir]WPrO3M7h@@Ql$6J=%M8gP,' );
define( 'LOGGED_IN_KEY',    'I=$[DQnU7K}vi+amQgX >.isacV[s|pe7+#F8@}oqe M]/z@>A*4;:-e0x+SxO!{' );
define( 'NONCE_KEY',        '7qLr)c^j$=TvnUGh{cge&Ns~IDb}3J]Mws7!zQHdH~?ZsmEF;M;*L?f)u7K2#GoE' );
define( 'AUTH_SALT',        '1r/EP_Z[Vi)-!:l#W4<.AvQb0f  CjN<.yzy_it5<[3b:c,-}}67.Sf!h GrHr,,' );
define( 'SECURE_AUTH_SALT', '>L%X6,&(sENtZ<V|Jw<9=y8&q4tqoE =|ghNXh%eKMu_h?GrVEg~plu|Q}jiyxHj' );
define( 'LOGGED_IN_SALT',   '[5DAWOp{3;.C6bp{C2?FmzM}$Eywbawajscw^%Ru:C^68wvg4yy_$&q9~a-JTvO;' );
define( 'NONCE_SALT',       '|lfUhM^JOHz%]hs.ys$a2jrdV=jM+A]/G2Qy+i<w,:BFA.vmkE; Gm$ioM}3, (o' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_ytf_';

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
