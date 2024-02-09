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
define( 'DB_NAME', 'boutique' );

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
define( 'AUTH_KEY',         '5f@`?,Z5zlltr;,U)cRLqw7u3~Fa lLn| ]2h8,U<}ap~PsQ,XR>3/!Ut `0 +Kj' );
define( 'SECURE_AUTH_KEY',  'I-lJ&wvq#Mf`aD+73;9,U:L7Hq c-RVIvfQ;}/CHj]z<li8&o/)rvYV|:5|-hxd#' );
define( 'LOGGED_IN_KEY',    '#eJNV,xfXybHA,j=5$;2mok-==T,G%Y0pRICMC dQ>qU42)8:Nz>){CTt9f]qm4f' );
define( 'NONCE_KEY',        '~j:Nw2,zs,Yce1o/NV^B}T,iXA:x[}77IP~Iwn5QiUQu/:KD(Ga:M(D;pcOFGoZ;' );
define( 'AUTH_SALT',        '80j-,D9#(xB&2GLOE8@z-ajk&vi_gc`L+U:#hzVebXUm+84+2F!U$3 NQQO=$PKE' );
define( 'SECURE_AUTH_SALT', '[c jm.+Sa2~|gtuSJV>*)s@qTisYEOTxM?D91#4CPH1k=g2r5PIe+:+jE8=}z$=F' );
define( 'LOGGED_IN_SALT',   '4}. [@r(e*dQd%(YW^ou3gnG?-rhj1sfm5$_8xnD[V!!k12BS3;(PE-K;tE)!m!D' );
define( 'NONCE_SALT',       'tzz*4_j+RA0QFt-#FW{2SK=;k<o;YV(XhQU-z*>;v4/sPB[.KbRI;RrXd8jvf(/Z' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'boutique_';

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
