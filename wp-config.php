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
define( 'DB_NAME', 'wp5' );

/** Database username */
define( 'DB_USER', 'Prerana' );

/** Database password */
define( 'DB_PASSWORD', 'Prerana05$' );

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
define( 'AUTH_KEY',         '#i`cAkAb;#9FmtKCTy.T1FYXOZ0uf[tYEvZshveAWqt<_]`mz#[Pe^LB/tnQA6q`' );
define( 'SECURE_AUTH_KEY',  ' D Pc@.#[q9tmTLbeIp/BQA$$C%-Dr6#>-qk#?!&n^%hZCpm+bMrah3+O8#iH4x)' );
define( 'LOGGED_IN_KEY',    'lJhhEKPw~5oKmR|vwlNJAXS!![@Y3hqw5`W|=^x<2Q3IG-|GhvVLJ|]SYFYlb.[/' );
define( 'NONCE_KEY',        '{LK2D0doUEtj$ 8nnHP|RxduawLkpHm%/]MjF[osCCpO)^.-~HGO6UV:>u9N,otU' );
define( 'AUTH_SALT',        '^VOxJ*lLa99j$.4r?gm}ntF.8>;^;b47s+VVo/s/$A:etn5(7M,>/E|}RMM6`F4|' );
define( 'SECURE_AUTH_SALT', 'j%3g=z+Id!|Q=cwpDQ;5g)GO&A3V4!>5/&2IiC90tAvujY4+wtS(E>mlgeSRU.--' );
define( 'LOGGED_IN_SALT',   '>B.KtT=Tvj#lY[s4_tHks*.?V:@t9#%UEJm>.ANL^S{2tks1f;k2xl9uwI*-=}gA' );
define( 'NONCE_SALT',       '1K(H5RVW{4^24LbBe}s9*r<|p38}n+KwRss_3e@21DZ4NA>oBzj^ c|h 6Hl62EG' );

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
