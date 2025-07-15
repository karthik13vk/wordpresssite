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
define( 'DB_NAME', 'wp_demo' );

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
define( 'AUTH_KEY',         '7`IDD~D{znxIa2f(*s9P%gV?Z,{0DvjsKB9,D]wBsIQ-R h#Ak}!vX!uagnR&l o' );
define( 'SECURE_AUTH_KEY',  'WX/hRElu%:jw(EVf87sN}7U+G[h{!Z6I:d0=*Kds(Ny;[RO2ly-9]++OOF4.3>3~' );
define( 'LOGGED_IN_KEY',    '8c[t0z5H]*_0h%P|mz!/#YAU;nap}DBT3Wa]?Pr|kf[9fZ^+e;krl:)-K4Nwd!DD' );
define( 'NONCE_KEY',        '~KO*ef_[`u%3tLLSA 43?skol|`f<C^ ;6Y%t6ekdwZ;n>BBJg%l00/I(>gtY/@|' );
define( 'AUTH_SALT',        '|L8!.3sM0_:Y8m_qZ%9r0^uZ$>Wc)3&=qk[a$cbyh0DNYI7 DSPu5 slurW4%/E:' );
define( 'SECURE_AUTH_SALT', 'ZhPd5T.__[JEmXTWXzfZ($N(~?;FsScCl ><#jf]4YjV_!kpDJT-hd@QwXy4}Hb_' );
define( 'LOGGED_IN_SALT',   'T<X^y|%/l89stYYoKTL*kf<fDuV*P]ElJ+maiRKUKUkp728|qls<h<T${>pVhES+' );
define( 'NONCE_SALT',       'c:t6lM]:6Qywwlb[Pf0[kM$xLr)=HGG|5qo6*8HG=G~BPbRyeR.eHYmdt&$98}Il' );

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
