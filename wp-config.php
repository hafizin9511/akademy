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
define( 'DB_NAME', 'akademy' );

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
define( 'AUTH_KEY',         ':kB[%]1Zaqqk_2G^.c(8rL.=0gDNvU=g^:GKzuq>+9ZsVzQRID6J/LT*v.zyS*$G' );
define( 'SECURE_AUTH_KEY',  ':3 DyIe}{n4;edh1}l?h5d|kf+l[:rC3w6Ip&r]Fv`4V}vy^cPqnB~nTcsNq1_PX' );
define( 'LOGGED_IN_KEY',    'I,c7<=$r(xl>EF&~20;)kHBGAszlje&Yj/J%~g==OOv@T<^sP[ALBg==mhSow[C]' );
define( 'NONCE_KEY',        'GHaKz1mQ9]8^:<V_lDKA-Z{ptGxXgu|Ni!k,d`#=GDdesJkrOHUUSA`OwI2TDN-8' );
define( 'AUTH_SALT',        '/Fh/5of25N&VeY5RMX (D>3oPa>FXQ*I/:iF.%Acxe=3a#i{K~bX#)I]&>Y@Vy$?' );
define( 'SECURE_AUTH_SALT', 'ED+k`V^c;22:8F)QCT3)!{1C6DkS9M3g8VguqgFdM,/p$^EoeB>OS@ &Pi(v xzu' );
define( 'LOGGED_IN_SALT',   'w&Lh{_o#0OW)8p3e<|Im_eZ,FDl7{_u:`e_IleRqRLetFgT[5$onw)la`CaXEvX@' );
define( 'NONCE_SALT',       'H2G!=?bz87[0iD;#Qcd{8hRgYX{yuOA~[f;_$2}s.]b$4,b1V]OT](Uv6.-m#8AI' );

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
