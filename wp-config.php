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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3307' );

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
define( 'AUTH_KEY',         '7Kh*0| (/39%[yk]!c&?Tdj  zzL.O]d=_sx~PBegN y41*D+krPcfY9ZmP7m>Ah' );
define( 'SECURE_AUTH_KEY',  'Ig7=WzTjfE,G{T,dVl|* jEN9){nR*B3!LMz<I+B]r~5CQ{T]=;,A>n*(Q_Odg-z' );
define( 'LOGGED_IN_KEY',    'olc0zd>N%KF11=3)}@3aJbD/e3r&mk5+qOR@KFK !j820A(`M]~X2-`eaUo0L5![' );
define( 'NONCE_KEY',        'OrK4e7tH_&Y6?U(qg:FMP[(gNL0;l4<JS<-6y;Cux(O=J7V23ZZp>-pv(1>H-ye5' );
define( 'AUTH_SALT',        'Zv84]=UJlccUmbz9<l9-9<Gkq1-!9dO{kF&0$v5d v!=-4bVF[)>)Cz04`:SK<#,' );
define( 'SECURE_AUTH_SALT', 'y(t:c_4*Xm>KR(R3jMgcJjSYJ_PKq%_ g+qruBy<5[cEB.Nnq]gcGY=6$aYnl8g9' );
define( 'LOGGED_IN_SALT',   'pIL!<Y7(g&8COk7!UejWPw~0I/P_*Qz=zsyY+Uxst)Zj[moGA~Gz~,@^`]ju:/$2' );
define( 'NONCE_SALT',       ' &<b0z,9&?^t66E{).Vy44RxUxpT`hjhd<DUd DTLOJywd.GD2>|eEi-.1fTaR)D' );

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
