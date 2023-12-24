<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          ')F%NxlmXTO|^@*,LbC$[&sawUM[0Q_CcM|T)mP;CL&=st7*U},-dLdh(g=wERxV0' );
define( 'SECURE_AUTH_KEY',   '!edz]<=NcQ[`h`B1HQydbg|?YYA^tZz5 r]`HcKT=%)t4!Iz-#Wh5Z 0f]>3,jSY' );
define( 'LOGGED_IN_KEY',     '>,eU_gBH=6/Uv{/#AD]U|)OGy;]!8@8hzT=5[t:OHv`N:-hf<8O[>TCGUOYae;f/' );
define( 'NONCE_KEY',         'Iq-!mQwQmI|Sp=3PM`kOfBSOzdf +qCpH9?t|J5Ohhm?c|=O$X#)oTrS:T.SZFX@' );
define( 'AUTH_SALT',         '2SDP;&(Jvhp}pjN {lQ;KJCms9(cTI>-]e^A*_C{!+h/xCpP+v8XbgcPT0vX.3#F' );
define( 'SECURE_AUTH_SALT',  'nneEl:z>x3P,umRnU@^/9X;DG<wC:&y~_a~O=R|H3,MRZvw.Kl 73$f$![f!Q&R&' );
define( 'LOGGED_IN_SALT',    '4p992Vk;7J(_C<3(/;akX#Ftr*PtVubwo7+7$Pxn#=bCc8W|Qf[JbCy}c%Q*~<n.' );
define( 'NONCE_SALT',        'vyO$ow,/ZW!bj[NmVOcS*znYgJSaDQX^,Vc<r<oy#5cg^#}?HXAs24Bj#>Q^1U1H' );
define( 'WP_CACHE_KEY_SALT', 'Xz:e>/I_#4?M=pl%;B^+$yzM*P(>]Lk-?#%Yz,.Gn!.BH/ULG.8mK-;-8&&Ft9;5' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
