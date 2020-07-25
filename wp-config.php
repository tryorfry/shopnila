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
define( 'DB_NAME', 'shopnila' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'Q7p,R$,{YVN6H,%5jOG>k%[|nKL<${`Ppbs8g}9WX/?&r$hxbJ:I;v!*G;df&.)f' );
define( 'SECURE_AUTH_KEY',  'vWKhvciWwzD?6sM8_t<pJ9fFmKE<}iv1~<Sg#c5--}j9~(=.T>:q]3OpzU[S`Yze' );
define( 'LOGGED_IN_KEY',    '@+~CUYtow5`WVy4e&&]I3,6AyX$Gld=KtsFIlTcLO k.&*eCrkir|[8nIL#[Dm%]' );
define( 'NONCE_KEY',        '.;+xMK?wpSgrREs{0cJv6}7kW>C#EO:AAyxq~r^HsT ]LoH:]^&Ar4BWJTv|. -0' );
define( 'AUTH_SALT',        'G>aN[RAu{Wnj$+ntWwT-OYa6 Z#CyNuKX,L7h^-CrAnP+qf7eE`Z Uo$DB<Vs(o]' );
define( 'SECURE_AUTH_SALT', '[5Bh<e@4#upZCqbZ/9w;|ROTpIQ_nuqKWwtS?!E0?0uQ4H6~9Vyweq4qrm;HVmBt' );
define( 'LOGGED_IN_SALT',   '!K1oM,8%jO`<TQ>R#3.)-o! lFhYp6v2,{kBi:G1Y P8oTR,_QtHp Xr!VqK:9ci' );
define( 'NONCE_SALT',       '73G7.meE,BfCH]*&@W{(-a<t(P]m8uafodBoJLiy_:p]-4{Am.w@Bz/:RZVG;Iq7' );

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
