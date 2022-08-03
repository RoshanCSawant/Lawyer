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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'Ou8NyKjqw0kffdu[TuM=/k,M?;:M5w)37&AO6hk^aB92VZ~VA_%zlhL-v/sc$1}b' );
define( 'SECURE_AUTH_KEY',  'AuHvzG*a3,(JEHNjxj]da7_Mi2Si:??8;/+VloU@oP}*J;v:$}U.p_ Dz*9|]R5p' );
define( 'LOGGED_IN_KEY',    'kth/BI8(B9h]>,SFXF0>>MY=7f~le8riD]lMo2T[i>/]7RW*pX17dWR6(.C=d)xB' );
define( 'NONCE_KEY',        'DIIV*v]9d0iK6im$Cih}^a]Z}!%C<oIDt3W;Ul0T)=`%p3Sr6ZLa_=MP@j-T9uAI' );
define( 'AUTH_SALT',        '!Qw581xSU;7=YQM/=Zy@g#L*&lPlzD`)VJGd &fPCEDT}]amUEEMUj}B<ifM]s/4' );
define( 'SECURE_AUTH_SALT', 'n&u|cIYxdFc4FPQ#QHhcWV/@XTUq=zixu3i/2$shHub<VQ>S=jtlYkue:^Wa>R83' );
define( 'LOGGED_IN_SALT',   'y6Bcwf9>S,OG^VjS/C9mDeVbkR759]EX6:gS4bbD(-d(d,*wMHqO{V%uhG>K1,{{' );
define( 'NONCE_SALT',       'u63T:NkBwlXksnSjK<(Jq!{*Ngw!o>4BOqL=`@M,|^#B@sjkm]*YTkaLksG<[[DD' );

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
