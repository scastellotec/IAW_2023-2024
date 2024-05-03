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
define( 'DB_NAME', 'wordpress1_demo' );

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
define( 'AUTH_KEY',         '4bEngp%qH7Th5c;{,nz*=EMJ*;u,Bccr{rYg/14i~CFleNL{TuOh E1!Yc,}]S_I' );
define( 'SECURE_AUTH_KEY',  '-xT`uX5d)sBz?_IRbk @7yv.F}G!~_gLEQ|ri`Ofds2 ctb|Yr]BQ6IeHD-LWE]S' );
define( 'LOGGED_IN_KEY',    '.F1*{;,J|coTFl:=hw9;:_sjwfUw`pu(#[Fw.r8Ekp*Mg`m;K{47ETx9wDb@vZc>' );
define( 'NONCE_KEY',        'L1[GIb49*AqC!(K,VI6L`Z+n58qZ e9<7Qt8jPFlaBy-OS# 4M)*-}(8Cqf)h`Yf' );
define( 'AUTH_SALT',        ',>b=c*s2,V3q6`OQXVZnivy7[9N;8|Yb@GYJW7kBF=Q2?tNjZ5spBwbvT&p,X%h7' );
define( 'SECURE_AUTH_SALT', 'e7LzL=b_sM[]W`_y=fwhwWF%d#_Ma5=LI4QSM5M RkDCrb@}:/>FYS//p7h/U:%p' );
define( 'LOGGED_IN_SALT',   '_#iu+yf`B0N(w~<@R*~]_FmMFI+j%8E.>N][M;-Vk8#)/hf.(3_+5*mwdZoos~,n' );
define( 'NONCE_SALT',       '5]it2(:oo!9Sd7*`Hb@l|]`NW^=S!rp@U{&YQ|<Vxtg3X-e4l`,br;86Fs22ExD!' );

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
