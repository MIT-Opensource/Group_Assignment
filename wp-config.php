<?php
define('WP_CACHE', true);

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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'phpmyadmin' );

/** Database password */
define( 'DB_PASSWORD', 'glkmymnk' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         'Il/TFLymt}Z?^o]e*V(`Kr66oDSn~A(9k#+=7a|0dU RHl|L7hlN/gP v!1 e$,;' );
define( 'SECURE_AUTH_KEY',  '[mhu]/Q!HJhh!PDZ>B_m,);=eEn2,=[=VF0=~Q-}*mI9tv2)V~/ZcO</D?&MQBrh' );
define( 'LOGGED_IN_KEY',    '^5[Y{F(5Z$>3F U>PJ1%[<&/*cz&gVb<QUI-=Z%nPgh</0WsR<r|5RtGZ7`^-2[o' );
define( 'NONCE_KEY',        'q^CpnUDzLDD/yeZdp6N]I*;p/izEFy#}*qJBL`%TVx7 k~CXed*Zh[`<t]82if%7' );
define( 'AUTH_SALT',        '1maz#`b^Gb)c3*$qG}20UJdP~oqhyglax|<!~V:#a{?)|1BTupr9 J.!6Z4pC^Ss' );
define( 'SECURE_AUTH_SALT', 'Vv<@Hv@HqwgOp,YMGgih*1N(RX3amoHMXX.JUm`Gnx>,CJDk$6C_jss%{Q7z%Iu[' );
define( 'LOGGED_IN_SALT',   'CCGa.{~qaCkZN`}aTHmED;M}/` XX@Q* Vwt)2wHJA= *rS}uOcSoL@JL`CD4|*t' );
define( 'NONCE_SALT',       'S8.>AuLa.Dz2iEetS[K|DXD^I#2=Zvz=i&f8z2<=P4zq9Hd7knd[NpJtVT3%#[7D' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
