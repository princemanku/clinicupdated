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
define( 'DB_NAME', 'india' );

/** MySQL database username */
define( 'DB_USER', 'harjeet' );

/** MySQL database password */
define( 'DB_PASSWORD', 'manku@123' );

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
define( 'AUTH_KEY',         '%g1NT.};3Dy YqeSOjfb0EC+R}Ha%@_udO+:48ZSki_>FnOc!Q@U~i`lH`Fy:CDw' );
define( 'SECURE_AUTH_KEY',  '+eJCP-(OfUy~aol/`Ln*9N=-^fT0d(6>gt[o>ibRJz.=/HT=vy{)Y01[NWPdTrNT' );
define( 'LOGGED_IN_KEY',    'jOyk>)/XVm8cLiUDC_*M~j{#^<vS BJs|v-ROW#YV3j:9h/:tOL59B:MWbVX;BOj' );
define( 'NONCE_KEY',        'M{KL.+wJ/:#ZT1R1&Y_8c.vW|9&:C}rd{>%2J)w-Hqso?+G6FG61kV4 -G)@HQ6L' );
define( 'AUTH_SALT',        'C5SVE4=3HJ1jD84=z6HNd}Tjlom?6WW;ui+C;:#=$2-+>zPW$P6K3cxC2ig5,~><' );
define( 'SECURE_AUTH_SALT', ',yS9US3N3aFBNh<`Ec>ZrPT9=[-VDzHcMeI9H`lcKI5lYpsEBN`$8K#6)aLaNX>C' );
define( 'LOGGED_IN_SALT',   'r5ap*xE2CGa>H*UNL)9+<~Bm{O-Ym1:-|nE!V9-9?>to@6EPw$NAlL$jNWhTfmKQ' );
define( 'NONCE_SALT',       '74yXkC#`O*;DTJI/X2U.t< -7P}UrjQM46%,D@R-<x`V*,&*Gx(b13jQvOX<@~Zg' );

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

define('WP_CACHE', true); // Added by WP Hummingbird
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
