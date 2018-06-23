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
define('DB_NAME', 'bastet_desafio');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'whZw#2xCEEOxehccwHOq};zo9NDT7!O|0+ijhd#ar?$]G;{IZDtNBpxmCDvETXZV');
define('SECURE_AUTH_KEY',  ']Bo)~w[{qtwMG5[s&lKrOAh]BD~x.,JUJIrr&<^O00`aeKKha_14px!Ne>~Fo*.7');
define('LOGGED_IN_KEY',    'kht](){3 U~i R vrDV*s 48kB0%+GRoCM$rG_>83>y&Gmz>7GhO<FKW-}GD[01,');
define('NONCE_KEY',        'VWvl$p_xEA4`|P}6Q0KX1I&G>C%|Z|9L!?H~kI#w_.IDB2fd9R#Cd%IBH}?p&!{k');
define('AUTH_SALT',        'OkP<(:inxD8&j].;m4&Q_Kr_=.ZTPKi]j0>cNao=I%7Pm<Do{R:B*oT:1f6m Hs,');
define('SECURE_AUTH_SALT', 'yUZb]&& y!Q?55.6:nTbnPuRzf?qeDliR{){f2<5O0f6n#{/j5!LIVI<:bF_J~e_');
define('LOGGED_IN_SALT',   'LE-eqn[b]VP8DhZXXC%(rvZ4y1H^k+$~kU@|s>z;jG;jI[Aeh8Y/9^cCA|F2`<3B');
define('NONCE_SALT',       'eRFZm&Jmnzk<rj*5QD9Ech}>J]MU]4!HCUi1f7wX!@c(MR5i?&rV;Lv40gkMAc(f');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'dl_';

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
define('WP_DEBUG', true);
define('WP_DEBUG_DISPLAY', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
