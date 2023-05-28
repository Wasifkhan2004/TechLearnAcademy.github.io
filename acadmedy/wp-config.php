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
define( 'DB_NAME', 'acadmedy' );

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
define( 'AUTH_KEY',         'GhE#Vq|CsC=./-x}N2yK!xvdZ4+=1~zDP[-zBsAGFwUz,Tf8(5vWY9y)?t@Ct/1f' );
define( 'SECURE_AUTH_KEY',  '5@Odhyj2U8PP;+*x.uK cLJki+Eup`<a=J2}8&$ly>YjpITF7bVshys;W-4auH|}' );
define( 'LOGGED_IN_KEY',    'W6se{`;)CE7dToIQg^RP/jdBo4SWO@m9?Ns1lK$3~2}V^Z(I:S!TGhcDNd>Wrpc.' );
define( 'NONCE_KEY',        '<VSB!uG]k@`e~]qSvIqPku(VTj<Jw+=uZt +`{Z4[eFq&d2c+fPccc}:?ePYO.Et' );
define( 'AUTH_SALT',        '&`-zcBbNbz,*;F>Q!as@k)j_[1H;gjxihGouW$0SSm)AKod_:<dTZG4+;{om91W$' );
define( 'SECURE_AUTH_SALT', 've}*N}12p+Ka04lJ2maCe>7f0K#m;E]hyTh3r6}Gt*]}eJ/Jw(_lz(rOAB6=-X%=' );
define( 'LOGGED_IN_SALT',   'U[:P>i&V7F,MehMa!xsC2JX!3AZ3%gTK_0J~K5U^TUxu<:_5/dV.D4Bg8*^(>brM' );
define( 'NONCE_SALT',       'e-|1ndG-CR;:!iJ wz}an6mGm<1b{Q(Nv{9FH|=_EjrH@K-d~6oL&z~2 rWK&feM' );

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
