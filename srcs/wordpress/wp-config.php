<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'test' );

/** MySQL database username */
define( 'DB_USER', 'wp' );

/** MySQL database password */
define( 'DB_PASSWORD', '123456' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '7HL+oFiHB2S$iHW8r`AF69W))@=6|NJo~M/G-K3k dGFGg[%mdKf8bN|ULRi>x7p' );
define( 'SECURE_AUTH_KEY',  '@J7zg}WM6?!*rNn:xSZR(&z*g4s`lh]qrVo6fXU?FDuLT&DkJ5* Bz)*(Id8d6gf' );
define( 'LOGGED_IN_KEY',    'Z<9}dJUmEXs{A)bxK2g2_(OFa}*cY`i=OauiI{PhT}5@}@k200AGpz@g7h5!AII{' );
define( 'NONCE_KEY',        '^04+wBGR<U_n5-D4P3PcJ=Jj(D7{GWnf;%pDM64~;_Hq+W)Z~D %]JE.Er,L3LoQ' );
define( 'AUTH_SALT',        'CW7{@(ck-twYtq5;{Mr[iWxVia0nDG*aL mx8sAT.0c#Mzr~Z51T($/M+D%d6#8B' );
define( 'SECURE_AUTH_SALT', 'D6Hw5i&nA:QdzI<Rizev@jXaJq-=uG0gpE+Hm)HmlB*=d*fxzxD_XMMevmY@MM70' );
define( 'LOGGED_IN_SALT',   '1#qleIdMkjerE}RL}51qv$Gjm{w8Brqh}b,S@~83Hguw@x</(x_>`p0*IzbPbDIy' );
define( 'NONCE_SALT',       'I6T7l99FO5zy.fzmK(IbinYYBfHeX6j^%uGG>yx$_RJ.{qA(mo+D%@@jI`{j]7fK' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
