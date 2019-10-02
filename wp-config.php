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
define( 'DB_NAME', 'courtsurface' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '$V#FrJ;Tk}+B*=>U.+1g.b9-&WI{Dyh0!./RB/4wuopumDskR-|TyfPvYhG47)xE' );
define( 'SECURE_AUTH_KEY',  '%:_kuFZ-59K-lR,:8Ci#cT^jnCd:]bZ?{^zon,:==xo+UUBhWIZGpl+C>2uvhd:C' );
define( 'LOGGED_IN_KEY',    ':_rrKL; l9)=3Y#%qD)]Wfn7) OxRD_)WAN=;UDeV4pI63[%dTu}Vh=!ArBl@:l]' );
define( 'NONCE_KEY',        'uj;Amj,x,&mBm2opECqVMtEI1p]A.p]:k7iSKcnhc=oq3(U:*>xox~_-bIxj*v45' );
define( 'AUTH_SALT',        'w6]OE>cyR+1mM=eL?m6?paPKEZS0Rr{B#RXjC,1Q{kTXZqF$([Q*U7r$ 4?_BRc&' );
define( 'SECURE_AUTH_SALT', '@_%u(eYjO3T/#SqRPht--#VeE)/YIh$<U>ZsPMk?-PNd.<<KB}nnc(-x1M,Vu:xk' );
define( 'LOGGED_IN_SALT',   '!_#g8Z|>~0Dvba$HT.<XFIOdD<A&3xk8ZifN@?Q:%?q4|N>PE/{C0L7Ja~z$fPG/' );
define( 'NONCE_SALT',       '?q PO_|=e/z<L1i^]Sk&ejVgK<=VKHCMhJfO`aJv[,@kOwfGeFFg>Mu2^3@D6E8q' );

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
