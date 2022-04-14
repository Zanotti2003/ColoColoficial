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
define( 'DB_NAME', 'huesi' );

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
define( 'AUTH_KEY',         'Lr5E/?ZH5Js>[DugwQY5);;2)?vI$%1]iC[4[/(aKAoG#D^eQAa_NH(U^Xfo}T~O' );
define( 'SECURE_AUTH_KEY',  ',hd&b:9C:D]u_f+</VMyC9gr7E5N0K/+EKI,gyK*[id/Bp#dUmJ#(yEK5s~Any+e' );
define( 'LOGGED_IN_KEY',    'Nmnu`@xBQQL+a%Y!9mPHVFiDsKGKl3F0 _?AK>._6XIu6CT?C<;LqDri%#f8(o]q' );
define( 'NONCE_KEY',        'b~{u3>,_.Lj;DO*Z+cWG{88$K./lmY.0-D@F,?3Mfo~KlqlS$-@6@)jHmN3V!,Lx' );
define( 'AUTH_SALT',        ',Ak%NBD]5SVw)m:Y$}R<lxr`e|dz/DOZl)gB`;wI&~VK3J<^sNtcIBf^MCHF]u$.' );
define( 'SECURE_AUTH_SALT', 'C=U-CS&.>KC+ZirL)-!i~8o&9j3`JY6EESeu=j-eAjbvS#p)$e@7fgeP/fR>4N+-' );
define( 'LOGGED_IN_SALT',   '+c))e;W{WH^nyhE8!ZkTMdw;;2ac2Y,Qxlm5Xc~Zb`eZ,_PshHIOt:63Jce`mkXL' );
define( 'NONCE_SALT',       'jdb3p#&xWk>.BHxjvXN@Yr%mn_>9C=Q;CB=8pl7)YHk~8Zmf4ymGA0H7<#yDR3Hv' );

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
