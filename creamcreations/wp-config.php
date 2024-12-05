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
define( 'DB_NAME', 'creamcreation' );

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
define( 'AUTH_KEY',         'n<NkL+&u*1!x6Lum*uMJp>8cat5XB)n{=^h>YAf[?Wwa6Rz`QvF(GIy>4~wK$g{V' );
define( 'SECURE_AUTH_KEY',  'xTA`@?G7OkWb6@)UZJN?ARUww+kqy*&%e%:eZa4J*qXooOH#+^j];Dt)Dc,i@ZR$' );
define( 'LOGGED_IN_KEY',    'O]hZfzwS.[~4uQvVM,U}SKR:<tORstUm4UXZ?}V1:-?<mVewSG_=?t|8(`,qR:A[' );
define( 'NONCE_KEY',        'Jnx}}S ZG71mBLr#c5cE(h!rgF8`]#cG@/2$P0s{kW]qec(@1W >e^idE%i%w:I3' );
define( 'AUTH_SALT',        '8)=p}+JOi&g>gmOg7*!y7Nal!Zg[xX~][lF|RBU]CZ3B7n{!,{!SpGS)_QU72^MC' );
define( 'SECURE_AUTH_SALT', 'TjitI6).*z,pn>*oo]`K+W9-/(@8X~2c^IHckV6O6TdU0&9aj>KNM+k;KCk<Rn#Y' );
define( 'LOGGED_IN_SALT',   'I_[DWGMk*i6gMHfK=$}Q?.RBWE:~@x=z]*@ybMm%h34HFX79$3&Fn2]JNa0P) `k' );
define( 'NONCE_SALT',       'pab_$Eg.wSMbX+182`h.|`.2R%E_,>F%1z~<Y9d>tr-iz+^68x=|_0@(s%6R1JuW' );

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
