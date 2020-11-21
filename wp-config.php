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
define( 'DB_NAME', 'hackathonchiesi' );

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
define( 'AUTH_KEY',         'C5Myg:T@GZN@{<A3xk_]#M>6M 2PRDGje#U(!@$;uImbTFf!zjOf/At8Z? |Vi+T' );
define( 'SECURE_AUTH_KEY',  'ix^}slA5U-pCJ%5i1zbMdG(~#QL.YV?mF>>H7cHG=Lc(7/o,<x~FIB2kS/{Jz|^y' );
define( 'LOGGED_IN_KEY',    '[@&RSO=XqR`$Rck*YC7,Xa}2pFrtap>k_@R(gS88?x&;Z%cnn@t/%V6%sB()~qx-' );
define( 'NONCE_KEY',        'p[LFk]IlIHe>a(]t -Mem:6#:T^Uxrl<*,.^t<>dL#.J%,COLWeeQsuZuxA/qq,6' );
define( 'AUTH_SALT',        'PR)Btj|Y^@}cNwH]:u16FVhcPW8e-Bny>AqwGh~(~tmy|)earC)l~Q9/0(s7Fd&c' );
define( 'SECURE_AUTH_SALT', ' Pl}K_xqha3x9?H8=X].Jl+2h,{%ci+CXk.~o4s-Y,wLFG(-o||LI:=R_jtTYkf8' );
define( 'LOGGED_IN_SALT',   '>agnz)|,h2(505*DUpG|WrPx<^B;$]-8X@>{Z]:Ie&BPqsye;fv/PKkp#0bOFi:F' );
define( 'NONCE_SALT',       '9T!Gi7~2EA0{fI4H{%[;!)rQl`/7]Ycpt*/).>!Y5:nM;>3_810JKUn>Tit(,(wq' );

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
