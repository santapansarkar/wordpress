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
define('AUTH_KEY',         '9BvHrdebV/tsRVCZLVDZuln0/dXIbbCu9X9xuDI9LLas/uzTnZvcS+U94126kN1sMjM4I9Q0tojswtTwWr9dzw==');
define('SECURE_AUTH_KEY',  'bmSY/BrD6b1kqjEGRkqOBLw/Gvazy32ikZp4vp6xj8QUNnaTmHVg6NP/HzobnaXY/bIA7fzDH9/+dc79WLGZBA==');
define('LOGGED_IN_KEY',    'GQepzuhhJborvsEwZJYGZn0DGTZIMgNGSWOru1Uj7GRp4gWyFLm8+ZU0Up5hU4r5ZpXc6WKJfd319AE9OgJyZA==');
define('NONCE_KEY',        'YoRhIlXilSvJs6OX6TiLfl4aySdYoc/WKzvMUJJHzpvn9ZXsf/Uk29wzikjmH/h6IIbTjnnXlWbpFtdnpUv9cg==');
define('AUTH_SALT',        'j4R12wFrmy2YWYsPrfD1kOrW/8kFTmSBOJV1F8oEBPX7eq160S0vG6YjkSJwh3cZREWnjbFS98m5o3dj7AOyzw==');
define('SECURE_AUTH_SALT', 'bCpYWNTRLCb7L+FV+qpY2EKoUr8f+hcSN4VN0nOBdcg4FGXmZ8UMZFzQM5BY0GG/hglZcedFnXbV63qv94AugA==');
define('LOGGED_IN_SALT',   '7GeKwRr8QTBP8A3vM2yt0xBHOpK+Q81R6AatipFVwbBK/eck8DtM8pDia2uuEUw7WkNPddgmGGAcbJqow5Z+CQ==');
define('NONCE_SALT',       'jLOUQXHcKCsVdMoVC0vqa+FZqklguaYTMR27rdcSp8tiLaZhGjdCvQQRhstV65uuwVkqSqfZiPqfpGl4Mw3XWw==');

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
