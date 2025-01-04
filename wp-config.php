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
define('DB_NAME', 'wordpress');

/** Database username */
define('DB_USER', 'root');

/** Database password */
define('DB_PASSWORD', '');

/** Database hostname */
define('DB_HOST', 'localhost:3307');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

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
define('AUTH_KEY',         'Z)LloAa3+Ls$`Phie4L]dhz|%;bu`C&<fC{iZ!4ElnTb  vHZlopC06gC@{u!OU>');
define('SECURE_AUTH_KEY',  'Di63jtsZA9$HT=O(socD-!Q3P6V:Q6Ebx@`DNz,%y1n-_8%bK$CV2<SW2y)Ye0>W');
define('LOGGED_IN_KEY',    'Yt:sDXOCm9Cr$E6 |NQz9Icj0j2Y)$l7mOa0/481BH+4!@@z<`=mBFQYFO?vj`nq');
define('NONCE_KEY',        '`>g]nCpHY%rg`&D/Vh!mGmU4u<s^b#U/LAlalAOYfUDJ3F$oD:(h}W^l^r.ctJ=L');
define('AUTH_SALT',        'U%?X{go]C.xq/[I]=,BBe6~%ecG1up<:|ipe`;7BAr#ETJpo,PWh9(EHeb)KP+HH');
define('SECURE_AUTH_SALT', '?*a~ Sz<?[nBSw8fem(bALvEc} YO;FL7ix0f:!5!6*VI.zga08O3 p2^N`h?bKN');
define('LOGGED_IN_SALT',   'mGGAC7Kh;gAR9js<zx@G3RmOrzHyLr0y+r/S/o>,NN.Od.Hcj3!:A;~Q*L+=Ow_d');
define('NONCE_SALT',       'Hl0)_$5%h_f?NOL^#f;6Nf$-$N@UTc6}`d?A(YJL6{PfZ)Kb|3DJG2UAF=<y:2XM');

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */

define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', true);


/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (! defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
