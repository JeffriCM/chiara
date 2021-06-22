<?php
define( 'WP_MEMORY_LIMIT', '3000M' );
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
define( 'DB_NAME', 'chiara_bd' );

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
define( 'AUTH_KEY',         ',0gJwlhAk2,gY}<27VWlG_)&77@1L~ )phfR]+cK(b|2zkp,S@$*)se|c#Q`>5|h' );
define( 'SECURE_AUTH_KEY',  'K1okOER q2[@Z;Q$=$JXGt(<PU_O{<^$^g-t2F|5*n] 7LS};Xfo8X3Na5/w)u}*' );
define( 'LOGGED_IN_KEY',    'j3^hzpL^~HQ-#HY<EhN.H3(V7cw?~fH[b;uI-UxTxC%A$}{%yLXHcgJqV$}n&Zc4' );
define( 'NONCE_KEY',        '!nCfO< !oLn2X5o@5.(i[]B5m4$%$6;>X$f8+n@aw<z]yH>gu<fuJIX)`nJ^n<Ig' );
define( 'AUTH_SALT',        'n`~#`s0skqa@l!.5mKUpsEnF1kXOgI%aqW(e4~35,@Rk g{EJj_my=hvXQ zr0C*' );
define( 'SECURE_AUTH_SALT', ']:}Q7~G40<ld4M)4HN;%v8i$njofiBWU=|iek/6YjgWNJ>W[l3+FE,r]uEPKTmzj' );
define( 'LOGGED_IN_SALT',   'a_}j7]=zM6EGNrF&;aRWlGBa:Mlk$S3|RKmw e2(ptj,Ac4*)(3um>{`:!9W@N`M' );
define( 'NONCE_SALT',       'qmT~c?.XUd1Vza-cH^fH90qDzA$cRMSq].<eN,$4)WzG==d3av)9mE}__`V!1G<!' );

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
define( 'WP_MEMORY_LIMIT', '3000M' );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
