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
define( 'DB_NAME', 'mkstecfw_lederle-pharma' );

/** Database username */
define( 'DB_USER', 'mkstecfw_lederle-pharma' );

/** Database password */
define( 'DB_PASSWORD', 'VI1&[i!$?9dU' );

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
define( 'AUTH_KEY',         'KR;,?fAVI>D?;U+/T}qoAIM`D=_b62wi* fC`3oEq*$jy[WX<G{jPm}_]Ev$x*B6' );
define( 'SECURE_AUTH_KEY',  'S1U{E9H{gdOSby}]x|L>56*jsNnZG[2]G=RH_(D|Zq!Y>%w)uSmpID/KTS2d}j_o' );
define( 'LOGGED_IN_KEY',    '.pfHs;.sy}!07XxP,J%ncF`T8EKdB&NIid{K@:r9;2B6U[,7+9>]gfa;:QZMX=Q@' );
define( 'NONCE_KEY',        'Giwf<`Pm*!Jgild:Gtk^zRRpw^YSes4hb)!4@7!6`gc+czFM:m3E1{( 20uqhF~B' );
define( 'AUTH_SALT',        'bO~t6Bk2z7_@ZTo4b=1zAz I*Uvy*E.!X0r$^g5dod9za=OKkppNe(ci7;^vZts1' );
define( 'SECURE_AUTH_SALT', 'IhIyeS)Unlt0wmy&ssP>TtZWH44YEeA4ix8:JQn>.S]2HJB=|7]$vmtAb3AvH+dZ' );
define( 'LOGGED_IN_SALT',   '*xZJC|}x^unAgOyH t7IoK}fS#F}$~Y{tG5m8sd`r2Jlj0)7-b4YZh+O}{+rO,E1' );
define( 'NONCE_SALT',       '~?zi-ux/.->E>g.r|^1gzv)(sV3`QU6ftYD%O5EK*J$s!*J|W<W.$8^q#,Nke%mR' );

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
$table_prefix = 'ld_';

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
