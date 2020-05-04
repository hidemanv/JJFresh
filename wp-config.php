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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'JJFresh' );

/** MySQL database username */
define( 'DB_USER', 'ace' );

/** MySQL database password */
define( 'DB_PASSWORD', 'ace' );

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
define( 'AUTH_KEY',         '%,F4d}qx<GDkYKjRU&])v4G4XdXXTtuz!MfP@Mi7wF.2<eB KxcBR$GOeKM&To-N' );
define( 'SECURE_AUTH_KEY',  'z6ea.RNz|0@E.0<Rxc67O45=HzV1msH_ssXuJai|=<#x}G&s8ZfcE^cu,0{gj/wi' );
define( 'LOGGED_IN_KEY',    'o*Y1b5O6bkxdA?G(#IlB?3Qy5|KU6$Alz!An7!^aa*2>~Z~5UDxxLcjD;FRW~Ga@' );
define( 'NONCE_KEY',        ' 95]&yD.GY.<KCU[H@z!+r If#OIc~rjDQIB-Hs2z6s#mm|T%MtR-tb%*gHori)Y' );
define( 'AUTH_SALT',        '+<t=:zG?(X@<m!;OQ*M/9<p=mrF*SXk%v0rUhDo:$]S:o~o5S:la 9Qpv_CGTBL3' );
define( 'SECURE_AUTH_SALT', 'HZF[p)Km} 8~4pdQDQ@SG~@-e|5}.8Q=G@F*G=Bvxc+yisn&An3T))Oda!Z}^G,%' );
define( 'LOGGED_IN_SALT',   'Ok)9/+^~a=O8brSmr}el5fy4*<GYS Cc^wmNt51YP]Ys%OP@a)s[]Y}@7tf]q;$^' );
define( 'NONCE_SALT',       '}SS:%^EOIl:5 :*_^#2V[]HC=SlkZ`e-?&,Zt-r+^I{]pZ#e- -z&]Y~M=x?z5jQ' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'jjfresh_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
