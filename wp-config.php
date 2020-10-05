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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'blog-cms' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'gBA:Zru:R}n~e<KX,obJr!01ZKk7Zi|r)|a^!RuUnB/]+*At>gIHQm}Wz[QiZ-~/' );
define( 'SECURE_AUTH_KEY',  'w/?Y9d]e+EibZ69.^{^~qZV#N%V&B[[JAbY}^Nhj XP8WuWB-H.;$X4]C}s*,+I6' );
define( 'LOGGED_IN_KEY',    'O/@hIEK^3pCHc-WRP;0KUTzO)J%U?`c(H+q5I[h{&V)5[)rbq5m,aK5Q{jP$t2y#' );
define( 'NONCE_KEY',        '>e|(L*2ZL+=oGb;*4,~Z9M2@,x`!qSH8nJa$kc=.H&+%w^R}2XvZO4GgR@.<fY:a' );
define( 'AUTH_SALT',        '*= [%<r$F9hmHb$>6f6D@?#%E@@4~Bi, Rs8RO]urXSn+Gu$hF$DoxZ71yPyMI|)' );
define( 'SECURE_AUTH_SALT', 'm?uoY]|p=OwzhB>b-CTmu_+D5.%;m1@7CR?X;owX8X?$>AJ^?7Bsh^?d(9ywqYgM' );
define( 'LOGGED_IN_SALT',   '8Iry7](M|Z=W2w94<jVf?4+.=&=GIAMIGci?J/kfh4cte2[>yi_e@R^<I:Jz!KqZ' );
define( 'NONCE_SALT',       'Y])+$af]kujO$:%fJGHyu?ZYMO<w4GX]wJ0lZq=E6-EwE{H(I2(>d^x&N,+LYzc6' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
