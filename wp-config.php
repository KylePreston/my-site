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
define('DB_NAME', 'antisoun_kylep');

/** MySQL database username */
define('DB_USER', 'antisoun_Kdiddy');

/** MySQL database password */
define('DB_PASSWORD', 'Sugar_Daddy_1984');

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
define('AUTH_KEY',         'CsGlW%e)eTurZSh5x%_5td_HCw~0+d0qApd}Yeiw8y1!;4COj6B3-+Yxoa@`/P9(');
define('SECURE_AUTH_KEY',  'TRC^RS(3+n60WOOotkvxjD*9`F.DIr;j??B$!Aw<)H yXX3!Y+CvKASL4/s)A15x');
define('LOGGED_IN_KEY',    '<e%_+W#xQV%-T<2!|Z5P;K9TsKa,Pm~XaSuGHonq,SIzj<2|y.S}Y/U.zo*{w-^a');
define('NONCE_KEY',        '+015dUk;a/IRXh%-0F7+h~xg~mT}y2/nNj<&ll.qWpw8!C<G./>iIHhK)R|L[|Dq');
define('AUTH_SALT',        '{x06$?3C@p=50hdb$mkka3]<bcwd}2Vx95aq1yv%%0:KX_9%Pu^ph|~$c-gO$)+R');
define('SECURE_AUTH_SALT', '=u+u~5[I:`G`tM79?}M>v$Gc<x%f*_`K7nU=LyRbDbtUY-^}VW+lS !m+gx=W}V8');
define('LOGGED_IN_SALT',   'CrO./ObhG|O@JRmbN@a>i^&KYv(X^uC(G+v_YQb|E43%{u !RS8{n+sJo.!vDlaw');
define('NONCE_SALT',       '87DC2M(`xK.p0PY(+UX%:H4-lH#U+_9C=gwwmb4>U4DC;v.&-GY`=}IgOyAaN,4F');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'xprt_';

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
