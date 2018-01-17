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
define('DB_NAME', 'nevaehjo_nevaehjolie');

/** MySQL database username */
define('DB_USER', 'nevaehjo_root');

/** MySQL database password */
define('DB_PASSWORD', 'SiteGround123');

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
define('AUTH_KEY',         'db#aNH9aSG.<62?.~^6?Nq/-}dnKP|( Nlui*b3x.lB&)$(XT6GDn^RI(p^@$s*L');
define('SECURE_AUTH_KEY',  '4N:<duG]#:uRGn`nKd>JM!7Wfzu&]cM[}R::w,/*f9vP.-9.PHC_tWyf.n).r Iw');
define('LOGGED_IN_KEY',    't4J|,lc,[)RzdW}u]L__GtI;g;k97lHOj<)=[wt}q24=F9:*(n*)mUBR,)ZfSA2g');
define('NONCE_KEY',        'tHn`_`b4[jg d5<4H#ry,}`)@SXM$=H?K.Y-_oEEkqurKgrLn7@H+oC+1hC=)TA!');
define('AUTH_SALT',        '/>:3S(@w1e,%3%#klVQlEtvGa1ZU1PHJzo;!v2yWj {gZ,}YS4jMjc[+&/Eh,<0k');
define('SECURE_AUTH_SALT', '<62Nf)_(}xg[lz.kyYZ@5qHFSXN@LP]xQ k4=7$q7SfV~H?o6C@Gj_uxi?2;M.]_');
define('LOGGED_IN_SALT',   '_rF*1*9>C ya,G8ur9KD>n0r4V/Ar$NRz_U)27> 41O)3&.zfIMCoi5sZV49F9V0');
define('NONCE_SALT',       '6nN@UUo&k<m@z/L~2>`**]iO8).oHR8#?:d#bI1|Zh&w;Rr&QCKlKI7CRlB&k6Fu');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
