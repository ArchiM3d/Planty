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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'planty' );

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
define( 'AUTH_KEY',         'MZH).U{LU9.YoTG/C<E;8AYmT**hF~~XqtK/YC`i`ps*{irVb9%MIFbFLk{(F9tt' );
define( 'SECURE_AUTH_KEY',  'KsleNi2`UZ*z.3p<h5f6do_%dA?c`q^0.td2<FYUMd=A-QU+H~R4`Yp_b/4^C2@d' );
define( 'LOGGED_IN_KEY',    '}bvbZV{dsTQOk^z|B|8$SfH`A$8_IgC(>XynN,(Q^3wP{i s(dj](fmz4[r`TkmC' );
define( 'NONCE_KEY',        '#[_g fZvPOAMC0$aE.;QsG[[vK.M>&P!yhwKGa1Dv&/nQh_.zqEc#sAc%qZMXK1k' );
define( 'AUTH_SALT',        '$1Tuu1AT@30-c~}I<qr3_9[dAR9tWl Km/Qrw,4srG);xuHwW;StFM1a3H-Dw(hp' );
define( 'SECURE_AUTH_SALT', '4BUh:,BMP6Q,E@x^{Zwg_H?&/pVloP>y^_b1eTU[ l9yA=(uvG)e}3IQ^}9:dyP4' );
define( 'LOGGED_IN_SALT',   '[{Cc,hP6m{M[v{W(++vQDJAXbjh{I{F^0?Hi*3+imJB<|]?{M2$h-iuxRDa%7##R' );
define( 'NONCE_SALT',       'hrJ*|o%H/c&:9e.7PXiBpO!b+#n#3,+0x+!I1jA969?5XE1P4/4FQ{;6t00er][;' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
