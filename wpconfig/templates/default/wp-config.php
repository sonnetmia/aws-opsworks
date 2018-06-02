<?php
define('DB_NAME', 'mywordpressdb');
define('DB_USER', 'wordpress');
define('DB_PASSWORD', 'wordpress');
define('DB_HOST', 'wordpress.c7zuvfmw1hc0.eu-west-2.rds.amazonaws.com');
define('DB_CHARSET', 'utf8mb4');
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
$table_prefix  = 'wp_';
define('WP_DEBUG', false);
 
/* That's all, stop editing! Happy blogging. */
/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
