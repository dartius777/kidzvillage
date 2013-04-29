<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'kidz');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '<.TEo0P}ci!iJpZhv)[:(@}!%F;>>c@%o$J;)f&Q6=(bu=h:JV|ZccoBT%r2VMxP');
define('SECURE_AUTH_KEY',  '/vvXUf(+++17k^#=s|1/`Rh0N)_c%!dubA`#BEzaRX|pZ]t3%:jy>rTp7a?#<p&M');
define('LOGGED_IN_KEY',    'v8Ey-XqP?[R}WXSAbyvf&pG}BW`Fg1JFL<S88+++usCWom{[QUPAVT3G7L-)Ziee');
define('NONCE_KEY',        'jk4D%0lu|eAB]NA[_|]F2{;Y@vP$nmrd*009%=[ff!5j[DbMK2[pOQ2?/?{L17Pl');
define('AUTH_SALT',        'U<;dD#HG93/4/-0:WcrHY:gP<u..K;;I@AtiGniUl-2m3^wsCJp9a|jZ2iv]QEA/');
define('SECURE_AUTH_SALT', 'Pcoiyra}cyL}Yy-MTV]M_?eo/.n~9y4GT/f3`:a].c=U}:3KBRzTb<^}kxvwVs)1');
define('LOGGED_IN_SALT',   '.q=g;W4aO7$DYtpQe;#A%H#Z-mG84j!~TN-/^$6q0O){RiznKxO]+i3FQ<lg[+2M');
define('NONCE_SALT',       'Y(qw#_:V#f_Haxj5#UzA=VX+Ry3nu_ExHfXGve]r|KkH1H9/4Onv`e-&?|j9D9d0');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
