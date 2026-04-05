<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'wordpress' );

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
define( 'AUTH_KEY',         'p$k2~/T1~KXK1(9L{h*DUMkS1JYb5;w$_PNXg%N[e4sHgSe)=e>FQlXItvhJ43&t' );
define( 'SECURE_AUTH_KEY',  'g*vF SRpXAQ&^EZNCxIOVBj1(T3nR!*;x3.mKHg|<,^`cMi^Bg4UIY;0R^q-TP4z' );
define( 'LOGGED_IN_KEY',    'sM|fMf;*n3@r2?Z-Rdi].wNhF`W5(/YGH{/;=C76(fm/p%:MMU]C<pUz/dr<rEmK' );
define( 'NONCE_KEY',        '?Qh4L knuA*EkFcNh+Qw6[Y2/ft Pdu34csaTGU+Iz?9GN,CKvW^632wZ7x*Wl-)' );
define( 'AUTH_SALT',        'mv6-nJMKdmC-;2ZP(jLwWW94?Y|6a60fG1rg[=0sAm<&bn2hc<yyO!-h=Rgy>ZE(' );
define( 'SECURE_AUTH_SALT', '[V5O(E2%!57zM,EGH!{g#dMwLn/d,1Cm.a~*#HrgwcZ  (/?}TgCP*C-39DD,Kp)' );
define( 'LOGGED_IN_SALT',   '64-%NFezp#T[,l;|1PrMz^]o9TvmU:H;IG@Z:cSBZn6}U(M6/w(n<>QO|Kxze8rH' );
define( 'NONCE_SALT',       'sKl/%4+faC<U,v*.3K;y(A.BAbib-6l-v<HcriR1gU18.PwF%O#QN}O=5A31Irv7' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
