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
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'D:\OSPanel\domains\site.loc\wp-content\plugins\wp-super-cache/' );
define( 'DB_NAME', 'wp_01' );

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
define( 'AUTH_KEY',         '`.OJw^U%Rb,KkG>1=#eQ?<M?6Kad4?sCPKf`5k5f[ >]RjIC]x}E<!A5a+g/K&|1' );
define( 'SECURE_AUTH_KEY',  '5{v9&l_;P;!uDY<#>($)fy!!2I[]ct2q(Tc9X tu,]BM12~Z_7#B|M.=0l{/jx3i' );
define( 'LOGGED_IN_KEY',    'o%E!B_|TGo:l/8@2K;UJ 1|3aVSYAc1[:*_VUEH;eRap>>~52m2T>L$(hA!! r3q' );
define( 'NONCE_KEY',        ',R}bJDXWpjJ6DZb[oXPkIMM3y<33$rt%G#0cljIAggkn]MV15|.w=)9X/YMr1WnF' );
define( 'AUTH_SALT',        '{lFl(Fbh9>25e~4oCFggs{G;&hsOf?D6t6qjEv+P[PY{LjlE77cW0c%bgq%w#]cd' );
define( 'SECURE_AUTH_SALT', 'M;G3<;;Ec*,ZD#[R$xPJe ]XeM`WE[qCAt059Y~JiII(R;BRAwrrE$o`{LLY%`ka' );
define( 'LOGGED_IN_SALT',   '[idK*w1q7J.2V?8M,-U^}J%?w|EH|S1~iB{e BCibNtam{NU!!N~9kZ 1Tw`de;c' );
define( 'NONCE_SALT',       'O|Jz:C(Q[ZSSzlP~@eWDQ|Z3ol7=(dhF@t=aC;oyL#5ff7++BRAU?O>sLE`1i`Pp' );

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
