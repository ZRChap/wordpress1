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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '.d;OeinK@AO,wy9HAGRg^[PKU5/[r$R%L;<0X0ZBjP:2s)m#UTM3}C_S?1j-90#/' );
define( 'SECURE_AUTH_KEY',  '5zio>z?<wS-kd~L2*_?QA;C|G71{@W(_|B0EQZI=k+qi`LPA$iQ<qP_{h5HO!JLQ' );
define( 'LOGGED_IN_KEY',    'cq8,faM.2a9`7{iV-$hwJBa/99I|{n:Ns.,y3eHSVJP&25T{/g+VQ0q z*Htsjn<' );
define( 'NONCE_KEY',        'QO?.vR=T4,L+P]6HL6=pE;tY(-vGYpg~%X}d ILI_liwm,u}[eEi(/^9:cE^gyfI' );
define( 'AUTH_SALT',        'H9ksf,`Al3RY6KeZ9;coQ*p|#3r?Ji3M29O$S<MuuVfH9X1+a!ap*fo//VIHo$(J' );
define( 'SECURE_AUTH_SALT', ' ` 0$Oo!d~ah[anl~E=rxxABQh[K]>D0E+pb+U!QnO2eIPZtruiE[1`C&U[yro|b' );
define( 'LOGGED_IN_SALT',   'plp*;l1NNm@1$F%15bV] RESc@9I(p$vvHKEz/}oFRJxp_){`XaA!Uro&2ajud<_' );
define( 'NONCE_SALT',       'hI^j6~KihbTtmpY/Cf,*M|)7hT,,z!-=%:_EizZS!^[X2rhi%|`s}NmI`6eMpR.]' );

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
