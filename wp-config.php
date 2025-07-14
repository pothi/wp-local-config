<?php

$table_prefix  = 'wp_';

/* local-config.php SHOULD contain at least the following information...
 * DB_NAME, DB_USER, DB_PASSWORD, DB_HOST
 */
if ( file_exists( dirname( __FILE__ ) . '/local-config.php' ) ) {
    include( dirname( __FILE__ ) . '/local-config.php' );
} else {
    if ( !defined('DB_CHARSET') ) define('DB_CHARSET', 'utf8');
    if ( !defined('DB_COLLATE') ) define('DB_COLLATE', '');
    if ( !defined('WPLANG') ) define('WPLANG', '');
    if ( !defined('WP_DEBUG') ) define('WP_DEBUG', false);
}

if (WP_DEBUG) {
    define('WP_DEBUG_LOG', true);
    define('WP_DEBUG_DISPLAY', false);
    @ini_set('display_errors',0);
}

/**#@+
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can generate these using the command `curl -L tinywp.in/salt | pbcopy`
 */
define('AUTH_KEY',         'put your unique phrase here');
define('SECURE_AUTH_KEY',  'put your unique phrase here');
define('LOGGED_IN_KEY',    'put your unique phrase here');
define('NONCE_KEY',        'put your unique phrase here');
define('AUTH_SALT',        'put your unique phrase here');
define('SECURE_AUTH_SALT', 'put your unique phrase here');
define('LOGGED_IN_SALT',   'put your unique phrase here');
define('NONCE_SALT',       'put your unique phrase here');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
