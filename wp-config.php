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
define( 'DB_NAME', 'vps_wholesale' );

/** MySQL database username */
define( 'DB_USER', 'vps_wsuser' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Telenor88!' );

/** MySQL hostname */
define( 'DB_HOST', '169.254.0.2' );

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
define( 'AUTH_KEY',         '/3qTg~@32uH;%@C8S>:HzoS!~DJQ??gQya{l0cjOq7<TzGMY)^h@G h#I>J?_hS8' );
define( 'SECURE_AUTH_KEY',  'Z} 5AA$,v~Yeif34Kjo7ks1(P(I{GedaUf+e;G@[USD(PK{(O^3ij@-@wO3uz[*R' );
define( 'LOGGED_IN_KEY',    ',lX8_,V@]!:*wwInfxB/`G.$x7B<>hc|z A(K,qE(M,i8z|VTfp Au}~;*c> R>2' );
define( 'NONCE_KEY',        '`ZhnZ]1Q@6w3p>k Cnz:QVK&6B{|?ix;GE~Y`_uG,fOc:p>+N#o9!lSjw|w-Pcu4' );
define( 'AUTH_SALT',        ';C?sg-]?ff}K-V4|IhO<qmnm$pOD4@8u~(mmZG=skAX[wrrR>kNRiY(>W?/Jucf[' );
define( 'SECURE_AUTH_SALT', 'H1vz)ePTb|Fw*39fX5m0q6AMV.A/]cT>|k1,4--LovLlkJDJHPITp]?J+]$%MXg?' );
define( 'LOGGED_IN_SALT',   'p(y9?7Jn)6g77jA}})zaU4Qj=u .7WU,|_= dm9sUOj8xo}nBAO}~~qlRbRcV6DK' );
define( 'NONCE_SALT',       '0V~k#zZEnhPl]vrjL-`b`}>sCr<#goyPzjdH8L>M#XJ}J<j58v/qR[*@ WcJV e|' );

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
