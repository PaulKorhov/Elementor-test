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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'test3' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '_-`l+_$exM$.&f}bf*81!3<Hwz;u3fVtgy6)7)K:<j <)KQ*D]2[&EN~o>c{-OC ' );
define( 'SECURE_AUTH_KEY',  'AfL0~U6DsLtmPQQV2m?5<TF4r6Ex`]O~b/VJN_E/k`R/.mRTE+2=i@(9+D99n&P]' );
define( 'LOGGED_IN_KEY',    '.y|N3| 171z)Txt_#rb/_n;+$Z-{#%uh@][TX(ujEqu)wpey;}l2TGE1{5`[p;eE' );
define( 'NONCE_KEY',        ':rbSZ]lbg/M-N~!Zbfw+a~-)`d5_%)Y36p,*zssv _+?Yt[pm?hqLuX4T09t{~3:' );
define( 'AUTH_SALT',        'UeA.>6B|fCD,4DhlC}W>X}p>Fvm!af8nE.swS&N-A_Q.mVEv0%%1rl?d#Bmw$y0y' );
define( 'SECURE_AUTH_SALT', '%}/M8VEP8n=+[96J*AdaWD=EA&`_Qd*%hmy?cy|5x[B?;L= c>1qgM563M4K>/3x' );
define( 'LOGGED_IN_SALT',   'yx;]DNB%Zu26o>Qoh&kjll,U(3q;G3F(cE?t=*w)~4Ccy x:|d@*@qz{5~ZIPU[I' );
define( 'NONCE_SALT',       'Ngt2WoiY5;8#|uI$QZnX4d+D&EPQ{{H^ntNR(3Brb5Mk4K(lJqNnCQWkGPj`{I:G' );

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
