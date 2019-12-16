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

if (file_exists(dirname(__FILE__) . '/local.php')) {
	// Local Database settings
	define( 'DB_NAME', 'local' );
	define( 'DB_USER', 'root' );
	define( 'DB_PASSWORD', 'root' );
	define( 'DB_HOST', 'localhost' );
} else {
	// Live database settings
	define( 'DB_NAME', 'khabarbook' );
	define( 'DB_USER', 'root' );
	define( 'DB_PASSWORD', 'Khabarb00k' );
	define( 'DB_HOST', 'localhost' );

}



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
define('AUTH_KEY',         'bGfT54jCL4ksnMN8wzqi/H48lZ2P24aWV5vAd4VeWNgVYFA6G4qATCCJGpEiFYt0MpmcIRiczUYAl6WX7QrwXw==');
define('SECURE_AUTH_KEY',  'MsII4/eGt4Xoedrglnrwf2ElC6wPYMhTyBBETmMCr+/NMliFU3HiS/ssNHzaglk38VkAXPHrZb39mDz44Aj7ZQ==');
define('LOGGED_IN_KEY',    'kFYYI1xiNbkar5RvAClDpZ8SZbfeUKyL8cIADd7Uwx+9mgLfAY+E1TRr7HKZUzQzlD2yiWaOT3Lppcvg8nhH2g==');
define('NONCE_KEY',        'VfplSDz6C4l3moZbTeNls/XsmwzaDTA7TUMxfj8gbMrZQsiXpVEJR7JipFnkt2zaJggdZ2UaaHlbd+Zjet121w==');
define('AUTH_SALT',        'vRWQLofd7fQ6+ojwtWoGy5xJ5oJ1x6Wd/ffRCh7hhXHkn9xoRgGpf3nia2VAGWvDZuyZGVcUq4SCOd0037QuJQ==');
define('SECURE_AUTH_SALT', 'y88S3/Pz4UxrEWcM9oUwkmoJ1X2i7FvGaeCngjZ2/os8pSVbUr1Hd1YKy37AsoAzfJc7ZWhKsJfpH1g/7rcCLw==');
define('LOGGED_IN_SALT',   'tV9p2UlDP+fea+EZ6j2rssIr9hXbSF80T5TzSsU7OPu73c6jS7+BzrlnopEUNMV4gLv0igAKJThSSa/Bei2KBg==');
define('NONCE_SALT',       '1LuVa00AHmdBR8YpNP5JyGBSH4oNoRw9my5HuAG1SpQANkwSPU7OlgU42TBH/pbYOlkV+kta4z3QeA+g3xk7Og==');

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

