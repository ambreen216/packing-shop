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
define( 'DB_NAME', 'packingshop' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '8,Mhx)b}4(VD/0A{q7mwC||`Qf)J?*9#<^lj>1bkn](ciyUXfavdCaGUv:^RD59o' );
define( 'SECURE_AUTH_KEY',  'Qsfbg-j^$IE$|)37+EXvOQ-w@k0_k.=M=H`cSZz.-cQaKo! GGc=ZD2~8J|)i+*0' );
define( 'LOGGED_IN_KEY',    'I[6>tJ4T%wR&XvSn;}H k}n]Tn@Zzzq?dJz`L<z#Ek1=K,5j$l`K7[&&f5,A/e@A' );
define( 'NONCE_KEY',        '6PTX~7CS*L=E@{N$;-z<fH(9rNuK 9y-hmd~ v$2aFb3eGd,;*9rO3{l-wPvabQ)' );
define( 'AUTH_SALT',        'CZ-.n)K8tW}0(9g?xE2pfEYmJucaP>J1]}1c?lFGnPQY*0GQ(~](w)I6#]6y)!=H' );
define( 'SECURE_AUTH_SALT', 'Nwd:UsN.CZ@=[b]jz> ERx1pzC&pWHn$gVVET]~QNq3ab[74FvQ}#(8?={hb#,nU' );
define( 'LOGGED_IN_SALT',   '$c/D,__8A,uiUVRklrfy7E|WD_Pj^J&pZRWPZM!)^IqYH%z3weq+H2RV5N.p(Ef_' );
define( 'NONCE_SALT',       ')MT3hOr2u$=,<hcQ #lDf~>tXgOh_,_q5sP`k;0j!Ki$Yk3VJg<@]FThA%y<SlQ2' );

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
