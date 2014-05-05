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
define('DB_NAME', 'wp0114');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '|1sF%P-giTTQPrb&|]S`wLI]Kjv^nt|}JY#Qt:10EUl_,g,-a8]sV|0Hfb0}v{TA');
define('SECURE_AUTH_KEY',  'o|OGw.Hg)&KGL8Tg5e*-jynf9(H+0c%<d-#)u@G|G1r6~&,L&(sFtE^Q^;[{-+3l');
define('LOGGED_IN_KEY',    'Y!mI(oH1Qn=M8D{j8>^L-U(-0}u?4HWq]Fp`a@nwsav9*,;zT-ESG>lXQ-vBqtqg');
define('NONCE_KEY',        '(.~{B^)dxQRR-+gLp/Dv=a:(7rCR1-M&oC4+dueGV&ti3o.b)n&|OUsj$}f89HXR');
define('AUTH_SALT',        '836w^C3ecN*AH|/RtWKNfSjaT0h.Cb 3{MR<pI*Y$56.C18qR^V&9=(|;hmKn5Mb');
define('SECURE_AUTH_SALT', 'M=-N5 c2|*gWFZQ3GM(}||U_]tomvYrHK$27]t7Fo8=&8la7fs1e|HpU?v;4E:4B');
define('LOGGED_IN_SALT',   '$}V;DB6 y2(sA_zTnT|tay_e~rY/K|;=2*kazB#LBgzr8si3~DqcT7gM%lh*(l6:');
define('NONCE_SALT',       'v6.dT{GxW?EYv4CK>)aY{J3p  CLKx9|KR;[Lp%_)Z:]^+b5B) =ub@15N(kG$b@');

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
