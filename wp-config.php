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
define( 'DB_NAME', 'excortdb' );

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
define( 'AUTH_KEY',         'mW#1M/$;zQScPL^7IhVX;86!&&!b%Sp7aM34Kjcz(?Y}?#Fce&b<7+h:rodmOE>h' );
define( 'SECURE_AUTH_KEY',  '!72u45HTn:>@ZLwx+d;Aqu1P.U>Yd&5F.$[6Ap>/QNa{Dp_%=Fwh$Tg83(,bL9J/' );
define( 'LOGGED_IN_KEY',    ':E(PJ@[x!CcIFel5 K3~^5PoeSSjg3)a&=R6VI~-sLE0B>WP/(;+}=]K+#95kZ.7' );
define( 'NONCE_KEY',        '+]_L.viIi_vBA7Kx|GH[T~.6Fmbk<Y2lsA wS&={Yv@sR5wj-[G?Cz7zfUoOf6vb' );
define( 'AUTH_SALT',        ')KC>X>fUfI2BXTJ_-H!+vOko9kg%Et/Hh~aj*w`iLq$k;l]+v0X,N/O|S^[>u#Y[' );
define( 'SECURE_AUTH_SALT', 'Ce8FL{n~.?JaIQ2l.JI]wHgMK+>yzV5YrzlzKo/SK#K0ATb`#]3A&$eRc`qzoc(J' );
define( 'LOGGED_IN_SALT',   'RX=,pjU8his?r//h{>ZrIl%{OUFP3CJ_>fWmtQw0bj6e!wry}G,0Jn;TsO% *~{F' );
define( 'NONCE_SALT',       '^q8MD(/Vi_@oAzi~^G{Ly;uRG0B Ig5fMw=e4a+c3{Y)b<7[+JX:g%^gXE+g>HGc' );

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
