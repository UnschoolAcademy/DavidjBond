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
define( 'DB_NAME', 'davidjbond_db' );

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
define( 'AUTH_KEY',         '0H@N-(?Lq!J^1Z,@u7j~c]S`]:Gxz]N;Pjw>~],*~c#5Dqc{ h+p5, EyI>2Oli1' );
define( 'SECURE_AUTH_KEY',  'y]nj@gSD,2LIAch[H#V09>lRehhFa#a{i!e<:#1Qv5/P&Nka85Z#Ovv|[|`yoHK<' );
define( 'LOGGED_IN_KEY',    'eT)#%O4c#I>%jPFrWPO&VXnd(Tx>E{IaeVbEgq&G>TFoi<Xf0{M(`NAYJBFzRvM)' );
define( 'NONCE_KEY',        '!!o,$E=L7|E]SZy[cCg:q/`oj}&IT~P,1 [;/@esDKT;ge`J2zCsT7<TUs$-f{0X' );
define( 'AUTH_SALT',        'hW~@WiqI+6D@-)7=cl9|<@D{k?@-bGH<AU.2zQxKOw5ryX>/r!`teue*Hs}SN-F(' );
define( 'SECURE_AUTH_SALT', 'kgB{r>+B5!X@qa.6Bz&4P)t))OJ2L[=:6b*v_0zc6%UBL@7xu*m1oefm[yNQ,$I&' );
define( 'LOGGED_IN_SALT',   'Kltk]f&k1e+Q8$0Xl&!S&]=b+wrjUSQ8jc1M)>WLu:-5Bt=j?u?Uyg^Q{Xs=TB8<' );
define( 'NONCE_SALT',       ':vTrMIZ:[1lj`l*7Y2n$%)@(IFH|3)g<(NX6N3]30fm&JZ&~Ihc71[tR0i]Q~@e]' );

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
