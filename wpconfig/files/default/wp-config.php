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

define('WP_HOME','http://wptest.esdrasrios.me');
define('WP_SITEURL','http://wptest.esdrasrios.me');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'mywordpressdb');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'wordpress');

/** MySQL hostname */
define('DB_HOST', 'wordpress.c7zuvfmw1hc0.eu-west-2.rds.amazonaws.com');

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
define('AUTH_KEY',         'A0h-V+mlf4!5rkqzf2jZ}7Kq/SQ>4J@S<kjEkz-8k3P~<4Z6P{KMc?~E)nPE6+.B');
define('SECURE_AUTH_KEY',  'Z3JEqbjuifQHYnW2<*nw,F$cQ&pP*R)&5q*ShSU;}f(L%&;P-Ul(m5])$aR2*%~>');
define('LOGGED_IN_KEY',    ';nEY75^gY8.2sKlgC4W##h^.n1=9V(#Ie%*;(a9W`gbeX.*+yu}cBPKOTs$@YEVY');
define('NONCE_KEY',        'O<z#6-4I,ibIm3yN rs_L8ikevXKxmGh8XRenw85/k+*|YPDYuBE9M``e2rM`UE)');
define('AUTH_SALT',        'zgC:HMr6IzB;K@Ol#;6NXjsD7AQiqKn|yykI=+#RLs~(A]rUU1zgizXi*U*$ghQS');
define('SECURE_AUTH_SALT', 'bXptZEl!ut?`#7XJv<G6C}0y7&,LjkYHEj&C71IL>M}BlLr{,7):T0~R V5#f6)6');
define('LOGGED_IN_SALT',   'h/C%8R:{BK=>]xnYep42C}F^VjdMtzT7[ec -0D+3OCmy 8b*R)qHxFO?Wm0C0XO');
define('NONCE_SALT',       'y(<K[Y#W={r{x+jr*y|_*ERC!-m~`/TF,U$nF5ZA&]z*H|Th!-p^6K}:^&u Wz U');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp1_';

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
define('WP_DEBUG', false);
 
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
