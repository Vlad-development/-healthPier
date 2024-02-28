<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'mungoweb_healthpier' );

/** Database username */
define( 'DB_USER', 'mungoweb_healthpier' );

/** Database password */
define( 'DB_PASSWORD', 'tSG{fB7v~X;7' );

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
define( 'AUTH_KEY',         'xx6,VWZxo[[j$$zlnNqk$`-H@_<`>~CHd50~QdB#*h/Yv~F=^59tq)`eR:vT/q1>' );
define( 'SECURE_AUTH_KEY',  ': T(CWq={]=v`d7RzU/J##>hQ6F@%I.I{?)Ib,]h.0)LL);pL_c:m~GZ5{* J]#~' );
define( 'LOGGED_IN_KEY',    '7KXxIGeO<6L?P*X1236-sSQbX^2AjdBT^r6RXtw^IIoZ|0ColfG6FRVlVme3p@qC' );
define( 'NONCE_KEY',        'XC0E%)7iQ{AkYB/*V%D-$d0TYQTE~z+k3(aVg1P%{/Re!5&m<9[-XoIpi7H(oiU9' );
define( 'AUTH_SALT',        '4@V04yayIXvUchfw?`:Ss8 d %BMSYRyEKm#7*KcGWtNus_&=e`zrof0s~+)W{i3' );
define( 'SECURE_AUTH_SALT', '~P#Lvv~dBFIk7cMd2bqhD]Bz7l*smS->oQ;|INNPjEO9F<p:m5f_8*j482_yiY75' );
define( 'LOGGED_IN_SALT',   '9Vwou[`_{<!pOiu8B(.~>[,$9_96Z]_[3;Hy{g]@y-qt!97GFb]lOB$7Rbt((6qs' );
define( 'NONCE_SALT',       '!uq {Tq8TYYh3QL?d)nlD<5U(h8gc%gwaM{jjW{qG^,;wDYBh[<kpwZ.WV%zI`|k' );

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
