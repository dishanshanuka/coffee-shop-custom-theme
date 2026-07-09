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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '3Ujw0^=F/619L#Kw=zfBVm2E,o-|;}~kgxqyin8j3,/h^H&7h${@;8iww&ug7#<g' );
define( 'SECURE_AUTH_KEY',   'mD;;+^B<p_1v,Tcsgl(<EsFIhxb7W)xpg}_[aQz.f!CwZ;kY8[V.9O zzqT>B#NP' );
define( 'LOGGED_IN_KEY',     '#qRXOXuen#O;N9w_*eOQY:~csSU=>#C$|(Z;5[}0b(AH,}TO:/)WOZmDf#f2I#Z6' );
define( 'NONCE_KEY',         'LtR:mlFM!LV=.=0AunboAIbVexFn{j>^m{pw`-e~K.czNW>MuI$XQNW{y~^{KycB' );
define( 'AUTH_SALT',         'oymBf=&!18D|1Pk>F0awBbN[DTinuM;,Ot*QFwz}DJ)wdmy=siw%1~b$-2v]7>M8' );
define( 'SECURE_AUTH_SALT',  '3G^1HQw4_x0](GM1>S)#/8AH 8lOV[RVF83t542|H-G0>!ijIjGQtlC3H5J52YD[' );
define( 'LOGGED_IN_SALT',    'cCyg+DtjV1q2Sj0+.<OWuov.d+oI[a6_#};&~axD`G0@[>>S=;>.%|JsF95q#0q=' );
define( 'NONCE_SALT',        'dj2=W}JE_#>Q({?e*1G[+4CGUx,LsF&e1AUKX0Zo8n|c {<{qh^eA8Gx9O^wM|iN' );
define( 'WP_CACHE_KEY_SALT', '~5J}_yaqml&2VrqZ);z;-V*c`5Ra!a8,fK(J?<UU V4!*ae@ub8kp=s{)MahS_)&' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
