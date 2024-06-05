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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u746845997_MsConsultant' );

/** Database username */
define( 'DB_USER', 'u746845997_MsConsultant' );

/** Database password */
define( 'DB_PASSWORD', '^Lbcb7E^CNz9' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'j*,p~4VFiN(txux-gzo3(Y;-%H6?kkWTRl=7,?L+ocj3A@RDU61y2k24em~3$MY=' );
define( 'SECURE_AUTH_KEY',   'k_omn5L=|En&:y8S5,d6+-)/ob_lS}e:<%VPc`BMY6}Ghk& hNIRR .V:ERo4{ri' );
define( 'LOGGED_IN_KEY',     'm`@y|s75qebFH+;q<;l%kk)!0n, p)N_7+`.K~d{v!Nkk.U>,-=5EyJ)e^5fZ4<y' );
define( 'NONCE_KEY',         'Xwa+#.&p:SGbs:0~[~o[x@33)ZX0lxzo7K{m0)AS|Mn{[|j<srkFE<g2ck4-fI.l' );
define( 'AUTH_SALT',         '4,Xk#ogig:#-T{vGum:S,D4d9pgEJ`T,tB&WEh0EQ7}fkv9vBa6;i!`Z^%^<5mD2' );
define( 'SECURE_AUTH_SALT',  ' UQROQ+o`(GaJZ#M:#!84QGUnF7/Pda-5Qls(OO_=L2<3jdo53NE+dM-qD[=?{vn' );
define( 'LOGGED_IN_SALT',    ']@u!h@Z3@t-~mf16q/PX(PT3.sA<0&MCwa%q$*zQ-6}w,4cvxSFuR=u,rv{9A(ZP' );
define( 'NONCE_SALT',        '91.aP.^7O_0dfXaWlyUzuS_CV 2<W*2j>T$.,]qji~(XE;nCV?-NH90jKGHvbXlD' );
define( 'WP_CACHE_KEY_SALT', '1j3WLA,bTkFw#@@h:1U7xHecI7KQOTEYC^_3V^4KM&kDf74zcdgBNYLGALqQ.)HV' );


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
define( 'WP_DEBUG', true );


/* Add any custom values between this line and the "stop editing" line. */



define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
