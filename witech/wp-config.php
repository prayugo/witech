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
define( 'DB_NAME', 'witech' );

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
define( 'AUTH_KEY',         'LA=hqHP_xAY&q0UC=%-eVq5#c7{WwwX@[aFT]vKJ`![o{vw:w%uE*-<WqH[f*d&^' );
define( 'SECURE_AUTH_KEY',  'Zcaw6+HAB|Ffr+0q?{kG#ZT~=q{-9gTa|p`kyHPn9hO8xi(!z0Xjf43*dUEi_@Mj' );
define( 'LOGGED_IN_KEY',    'R x~.t9P$HGj<o<G6b f$z`A=}XKe!$JYs`J@VM+:Sv5pg6#9=Lcp`dr<U}E-pQ{' );
define( 'NONCE_KEY',        '5KF([mvHNVyXm5>rKX3+a^u~a>l;A]9--`ozO!J)%uf5XNgxe/fPuEu=DRuEpEY2' );
define( 'AUTH_SALT',        'qd/j_2HJoit^XLSB_>E3cLWaUm`kn4TXF%J50y:XHqH>U[T4ADND]vD&Ya^Fh:S+' );
define( 'SECURE_AUTH_SALT', '(]-|gEtfCXytT-AS#rbF]3UnNI1j1hxqInw_QwYwhf}i9YW]SOQ>nDId5m[,fRem' );
define( 'LOGGED_IN_SALT',   '>)*/=,>7RDuaiBhjfW{J_K^R}O$-T{@sCvsu8K+bz^OP4)Vel{EZf#!;CbL@+B#M' );
define( 'NONCE_SALT',       '.Aw&EGU.b<Gb/^fFE .#-K|]_MvuxwEQrd4!0y{}UDltD/]l}O:1]|O-zhT}rlz@' );

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
