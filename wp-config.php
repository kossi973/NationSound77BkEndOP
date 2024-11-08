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
define( 'DB_NAME', 'if0_37575111_wp_bdd' );

/** Database username */
define( 'DB_USER', 'if0_37575111' );

/** Database password */
define( 'DB_PASSWORD', 'aqszIFNTolmp00' );

/** Database hostname */
define( 'DB_HOST', 'sql312.infinityfree.com' );

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
define( 'AUTH_KEY',          'mnWwR_s6#?boEd_)[gH/et.%#iZwmO%1Nf]1T$,IS0<[H:MKO(c]=wtpJ5?,pki4' );
define( 'SECURE_AUTH_KEY',   'yIl& ={@k&xdT;rin-=mdZwRW&Ki^z%ltFlUiTc q6E$%(BR|6dG%YD(f>Gj `Ci' );
define( 'LOGGED_IN_KEY',     '%Tpx?{6dOc*]IocJ,E9`}q/W5>0/by&biltbYWD!F7vFBCehkhBz#f.5<$m8a2&L' );
define( 'NONCE_KEY',         'cKq)RQ`5,lcQdt;2O7?+M&H5jg0mvV-+NPPDXi[4Jy;s.Jg9PE]C~jwWn%I:`VdW' );
define( 'AUTH_SALT',         'D%>Amh@oV7Kf~(`UbD>5]_-=XGNjc-b.Ic*+ )ND8Pg}V]G``zHufl+0BC,.6d/K' );
define( 'SECURE_AUTH_SALT',  'J9^bcEXUijz0:}C[+,VT=H3{(Y[rG0f>dll6{ET3I1S~|/R==LEz7#-PFQN_]~mA' );
define( 'LOGGED_IN_SALT',    'R/L0T[SGP1}k?|y>TkY@6.?M2Fc>T`?/6R0awJ[K .,;BBo;SzR8PO9N%R/if*<D' );
define( 'NONCE_SALT',        'w:]D=0Han*YqSz+KkOegeL?:isYP?<n-:RD4qeK6p76zDUb&EYG=XCbtUGvn!|ti' );
define( 'WP_CACHE_KEY_SALT', '/QTZRc*ObM0!4ZzJ&L^d{MJ?*CWHVoSQ!l}f@gLX@v7~8t$r;6tu!5O}tf:7)1%{' );


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
