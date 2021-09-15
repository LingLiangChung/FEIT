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
define( 'DB_NAME', 'joomla_tutorial' );

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
define( 'AUTH_KEY',         '<YUjp0h0Q)J,<d,?osi#hcu?5^4%RZsZI.BA$z/R2k_SDjKv-SJR40M?X82eT L ' );
define( 'SECURE_AUTH_KEY',  'zHK1E{%cgHN.gVJ^+lt>wN54>{_8[gMtVIM.:a;tr0*F/3u>:tcYe9mm:>JCyj[9' );
define( 'LOGGED_IN_KEY',    'l/6G.?`TUuQKLrQrOc7m*V-@v`+ymknaQ9eD7=UC6w!~u*XTnhpy,:K8U;)o#$E!' );
define( 'NONCE_KEY',        'aS,|&;#OBV=5q/6@CGsVPr|j.+y?[e3,20`&e`;1)1.i+>|,YL$ =LNaXpY<vgIJ' );
define( 'AUTH_SALT',        '>UB89]p<4)jW>_}A{p(lj=T)]zO$p^sx,g_5vaZo}VD+LH^6i4c(g>(`w(%%RX/L' );
define( 'SECURE_AUTH_SALT', ')@ZSB+<3;@v@f0%PW!%E:.0/oO$@!GR-9zoGb/BgsLD3Ew~_O=PmM{;na zhUzI<' );
define( 'LOGGED_IN_SALT',   'f7A_4Z/7aOu0^fmMQdxf?=6ij;[}`NlH8=!y~EH/j#MKC3De3&y>pK!^*XAr2JR1' );
define( 'NONCE_SALT',       'qd!=,`qsMb!^Yl,,}VL1[*d?uDG?z-BlPA+:W%t_28ISK_-7wn%/:<{`^mK<V{%L' );

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
