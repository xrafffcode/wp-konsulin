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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'konsulin' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



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
define( 'AUTH_KEY',         'I01eWzEWGkTNmGR5mcr20gp4Bv6DaLVj2xzuh9aGRVe6Efik0e1dwcpVMvJaJlV7' );
define( 'SECURE_AUTH_KEY',  'cO2YSndYfyEQiNlsi5WlL5RlFtNy6XcIad9n1WOSKGRaabZbk8m6eUqBBKunYXl4' );
define( 'LOGGED_IN_KEY',    'YW6mo2oShGWg0SWrhBp1HKBlfFxG7ZuE2gwUhbcaFGcorZy9VDye0SEtCTOHn4fF' );
define( 'NONCE_KEY',        'Ez9wJI2aaQ4THiPzUVeycOAMksV6KpLpEQiSnC16zBXTsvuHICOXjLOhUKgEJ1Zn' );
define( 'AUTH_SALT',        'LPYFDtsoMbFR2MZqQVMhK7ObJ0fAKFoj4eV61dvHww1pjJHXEu9kgJC4EEpFH40U' );
define( 'SECURE_AUTH_SALT', 'bndwxHkJW7dN4ruxi1SHL9U0OdnSgWGtAtBrAbWwu1hCkBFpWQXskkimPSKAwlaH' );
define( 'LOGGED_IN_SALT',   'X4d0P4tnHe5hzwyuHy4bnMvxJM7xMskBE5vuwvvFuqg8VTgbyyUNpUyyHQTcTAqp' );
define( 'NONCE_SALT',       'PdfZik0FBk8xngjkrkTMr3Qu0L0WFAYVY725DDDbuVPlMtvjYONzezSPk9Tbk1R1' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
