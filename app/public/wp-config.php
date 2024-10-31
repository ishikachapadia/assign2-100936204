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
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          '2AW9zZfv3@14$]o3aWd|ylExL*:}!tu`glB=nca/j6V/S1{*<?r9~8J?E_p4FGM1' );
define( 'SECURE_AUTH_KEY',   '[dvb}Kh^DX.l)S!!7Mm{HZaFd7Kj:dHQu<$`x^+ac&0n${v9mBD|-eo<xJqDV-^0' );
define( 'LOGGED_IN_KEY',     'Q4!:BB)|-a@y`jG#ax8$&S,b[WLA?$YKIp @X:etlM:7Y*X,/.*C}(`95s]&Aq,=' );
define( 'NONCE_KEY',         '_FDhs-+:P;4-`Km?3F=`D2zw#(gG^4N_g70Kv2V#.B8K?$vs?uI$a<V)+?VztmuW' );
define( 'AUTH_SALT',         '8ae4Zz4JW1bRA$IL|,FWZR+[m`2D>]dtQEyV)w|T1Ye?8PjSw| U0{{$44+6$b&<' );
define( 'SECURE_AUTH_SALT',  'RKHt(>,cT-P?4)q^~}M=gcR{ `L-Vt)(ww)Gv(Rmk(#{Dzzrb5i@HI$?pAmC1u2`' );
define( 'LOGGED_IN_SALT',    '{?xf<39gW/vsj9?b)mz:;8k~hQV0(eM60u;ZBpl3J+<T-kKBH$0>tW<Ko?8o84_F' );
define( 'NONCE_SALT',        '~:XDq%j*18]y7Wv33.Xs6,F%T->Kvf`rZhnMui& G`7W2.3NX4Rh:NQE=~;TZ+h;' );
define( 'WP_CACHE_KEY_SALT', '5_^}KUeq4/;$dbIcKk7+|H^d!ERtg@Mw?`;_[=lkQ[R_-&h YQUOYmumGK-f%^}t' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
define('DISALLOW_FILE_EDIT', true);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
