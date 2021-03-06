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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '4stp45iB2gsT+b24Mv5nodVzvKjIQN3JJeGLJnQ8RIqJIZtN07aope1h887slNbwQax3/qJ0dQliLiZMaZsBwQ==');
define('SECURE_AUTH_KEY',  '+fcy5k0Ic8uyjkvy3QJ9uK/+BonsLiHgVKlu1QXAn6Xox0q5WUxrox5tQeNY7OMGb0RieEqU14LVq1fcQL89Hg==');
define('LOGGED_IN_KEY',    'W+Nuqky2cU/8MuvBXDtQlDQmBhfRSLnYqSiLkgTLs8apXG3FHDHDkbUoQkgJudSn/yyOG2Aw4X4UL8GUvr78CQ==');
define('NONCE_KEY',        'Mp+jFdKNpFfbkPufHq2qAR2Llp0SATMvSPDw7Bc+Af6i4B3T0IrI2lpxBTNskZ9aE2wr6Pv2qlcaLwCEsZO8Dw==');
define('AUTH_SALT',        'UGTCuibOEEseiTthdbAFDFNa0x8yacIKJ+LU/JFR1K02myd9jhLtjZJ4CSM2dSJpNx/xOqfWnAcaI0AEQesYJA==');
define('SECURE_AUTH_SALT', 'D2HYDlXjBh1IRhsVnN+fZS3WUKn0ZLvLvbes+wWbMCppcr0edOmL9y00XN4/wY7nrxr2yqPk64qJkgPOJZbgSQ==');
define('LOGGED_IN_SALT',   'XjND6IK0KI6/zMBIJBp6N3Y9E9zRFXAus2fMifo+GWWJ2LvRs6U0D8X43orRowokEx71ZHIvgHBXBXrX4wsdOQ==');
define('NONCE_SALT',       'i1aLNfktO5gmkRdji6dNfo764pae97GWICjQ843/SFukBzYdcvPWshdbI9uVBcEMGjvPDglhMEjQ0MdPOmKE7g==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
