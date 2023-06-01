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
define( 'DB_NAME', 'portfolio' );

/** Database username */
define( 'DB_USER', 'portfolio' );

/** Database password */
define( 'DB_PASSWORD', 'portfolio' );

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
define( 'AUTH_KEY',         'r4hNDdtnf87OuVE%XU#6/lVsZ*bwU.qp=y-6AB(l0;:/H0g(%%5~VxL>ix2/Wi,{' );
define( 'SECURE_AUTH_KEY',  'bB_L>#O|OFkT?OXG<fBV_[i(pktT_y3H>Ku;mN$:]?AH?(x FvXlo47;W@tqB}[g' );
define( 'LOGGED_IN_KEY',    '6B/s&sAsrbL,Mb+As@ 9:$urhU5p28hdn%,<1wODWEQCjHf&Q<nLQ8aj GTi2XN[' );
define( 'NONCE_KEY',        '/2AL0z:,/45I3B#7BS)suOWb%}vkV7gL<:_?FH,k@h;/^FI3,=^iBMF+uO}u?.t(' );
define( 'AUTH_SALT',        'zh7}FQr2Ajk_qFnxehx0GHF_6h(^RHn}BzHZ6L>)+47$RY`Y:9/mk>NUB(%sp`g_' );
define( 'SECURE_AUTH_SALT', '6d%GdAP;x-@Oi9$RBmb:MreIuqDGzrbmZ$qI|S(]+.?pBhc~`-%kKtWEsZH=rmn|' );
define( 'LOGGED_IN_SALT',   'R;sq2[B$ZBn?o`3eLu)+5%Fc1/e}Q.cY]eiR{1IN`-e)?h%;Q[Yyqj Vk^J{7E(6' );
define( 'NONCE_SALT',       ';`o|*(Lp=9mm97YRp)I*wyq$1$nvyX&bi$(NT9]sV>!RE.nP5n1<1X]<E.>Hq[4C' );

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
