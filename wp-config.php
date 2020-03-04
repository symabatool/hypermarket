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
define( 'DB_NAME', 'hypermarket' );

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
define( 'AUTH_KEY',         'rPa( `?=OH8F4u1]0/+)$n7AW9F5$_<6_C3]ObFJbgaAo=_{#p`M~f^YV2>q&yC@' );
define( 'SECURE_AUTH_KEY',  'f|jKf(Z2t8d_xp Ez7rD+Y;A9F<;Tc&=stHQ44S6r.50/EW:*]3`PF1FKq`1%rGA' );
define( 'LOGGED_IN_KEY',    'L`hJFv%=]n<NqAIGN ~=Q7Fm#YJoaRNM}e(SXB~b1A2g7Xr+rv=F83]xl{NkO?]]' );
define( 'NONCE_KEY',        'I3g!%yCvdnJ~22Zv.rXN)qt*qP!Pm5gN8u;h4G+{reu8nCpF9#;jdl~WJm.#ke]:' );
define( 'AUTH_SALT',        's?Bz(<(?@/L!i`HTsE#Y70,z#19<^yx,Yj5(wdq-X:#9C9m`k_^}, )+VPUrT0!z' );
define( 'SECURE_AUTH_SALT', '[rE@:iynWsw?$F>3zuoGm6=2|5amkpwW=aT*qn_EnTe,8G_quf}wWKC__f&DAife' );
define( 'LOGGED_IN_SALT',   'T]eZuv:_}W3+7J(_;*8^:w:w:tbpurnr#]_mlQgWnw=f, Yf>+TLxL062e&JH6*O' );
define( 'NONCE_SALT',       'de[`<s*&:A0Dzg-Qa,Wl`LqfYK4R_a80q;lCBd|.Q9/aHpp,YfO=A,c&{Blup[|$' );

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
