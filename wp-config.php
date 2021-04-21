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
define( 'DB_NAME', 'beauty-healthshop_db' );

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
define( 'AUTH_KEY',         'c].}OFcCQdOr]qf[T6y{y,Y:Y(bUe6#`viRtK*mfGNx><5S.;-%)BP5d]nmYg0_i' );
define( 'SECURE_AUTH_KEY',  '<6[m8$#oEFJI!0M(j:%#BLVv~m#utWy,=E?k3JP6qUOb{u+%~ncu$+5!j|+?S#kO' );
define( 'LOGGED_IN_KEY',    '@5oRE9c:NTbX&nxA8N*N/il0z~G%~A!AtYLSIY!i;^#IvrsA]veo6y9Ym YdM?%|' );
define( 'NONCE_KEY',        '>/H+;f[]yCt7N{#8FJR@%uN3%,cn#TnGBX~fl[$BLw9h:[|e[}J$7;_*SAIm0Gu4' );
define( 'AUTH_SALT',        'Bd&D5F;:O=<~%.T5L5v$D&Dj0YSkPo.4[?=QW>;w!vNB]RV!#x=*dw@v(GxTG$N{' );
define( 'SECURE_AUTH_SALT', 'cCktJ/sFvoM&d}exGdiH(5]=zH#|Ecx[jH>+,MUaU/rC5X~?+~@u1M8Q{J9oM`RA' );
define( 'LOGGED_IN_SALT',   '5/FN7?|ef5/l!Mzu@KS}[}H+< ENN2 %YSf{Q}Bf*D[%a;Q34jN+W0#Np75rXpY$' );
define( 'NONCE_SALT',       '<cI{8DSm9(,CcU<I*?D!6X{E**!3D$hw=*{0Zatx8u$`S?}$k 5>M0Yhf WHjpRm' );

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
