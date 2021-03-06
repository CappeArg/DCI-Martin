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
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'C:\xampp\htdocs\DCI\wp-content\plugins\wp-super-cache/' );
define( 'DB_NAME', 'dci' );

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
define( 'AUTH_KEY',         '`Cy@R$`|ZSP5i !;&y*d<=.~X09j_&1)^W(1eW[s2hdQu;_64Phi]C?177|D6trO' );
define( 'SECURE_AUTH_KEY',  'xP|*q07jAy1P[d;?|g3}o=%rr$IQeY-wQsD@gIjdjg3l&ekT|~fu7w8>V|Pj=--^' );
define( 'LOGGED_IN_KEY',    'IiPSSi{?,AQQ|4S-?TTG`Qlhnx<3Eo%@l].#1#dJ(4VsOADbE>|7F`]uE8F343.)' );
define( 'NONCE_KEY',        'k8Svdcp{K!kDV$SS:Cio7|xrK8UNlS:F!ei;1vSr~xq1QJq,6N?nInibRbrkq]I-' );
define( 'AUTH_SALT',        '/L<.W+ix3P`s*s3y@*!V1J(l%!|t]lldrc5Z:zt%vH*3]an=3HQg(3=,Ib+YmwX{' );
define( 'SECURE_AUTH_SALT', 'RFY^18%fks2l7<)[~aNAaA>p|:M]aJL|gck=3?n8({v=wBSCH-CR9?[J6 qN7#_.' );
define( 'LOGGED_IN_SALT',   '>DuO.Om!U&g#T}~W.g@q79EwQ_#i>-3HF|r;Dbx$.byAraM<$+wNgD9gec}l5<nu' );
define( 'NONCE_SALT',       '9@9UxjPe,9zHK$6$NpcpKNA.@J#mrO(aoE^_=&f Y+<}f_RjROqj,R,ZQPJ!//)i' );

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
