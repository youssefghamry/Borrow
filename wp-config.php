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
define( 'DB_NAME', 'Borrow' );

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
define( 'AUTH_KEY',         'n;G[-AaD3qHZ`6}EphNvT%4!ciWf=jt}&r@Ax/2c|h2K3Q961r;FHiS)ZCT)=Du;' );
define( 'SECURE_AUTH_KEY',  '<I+n/_ _`s[Z.)Br@%qmlv,~LHdl0IfUZ=hMuMoof)`P<Pqr[sRsymifE3mPH} *' );
define( 'LOGGED_IN_KEY',    'N?YyBa@a1&Y@GjsI$@QD J3Jh~e;0I+{/?x93 :o{,v5uVGh3p+^RmsI?J~*g+yj' );
define( 'NONCE_KEY',        'g?E5&SSn)mgMuOZ+/}Q|ehky-4Y:C$E@6}vRIW RV#S,?Wb&%$-WY;7cBP9TD3[O' );
define( 'AUTH_SALT',        '| -PM3.2^%.FCe-c&HIs_kA4O`[h[_MhMw ~SIri.`CP<M!N-i_p.MJ#j>VX>Z~@' );
define( 'SECURE_AUTH_SALT', 'e%pr:*i3=EP#_#^^&(g5O1_<OTEyNG&IBl~+Y;#gCWX8$zSiP*(i,wiSg86Eo|Zl' );
define( 'LOGGED_IN_SALT',   'TjAMj&,FEInA2CCh3OX0S.:}[[KJ~Fu7blQuegy@XS~DvO ,x/x=+m#te:rPx]j7' );
define( 'NONCE_SALT',       'gun1w}]5dilEi(akab)J;n49zESd3dNHV%5Ua~qJeEN-m.xD/0ADl:DU3!;eq>L=' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_Borrow';

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
