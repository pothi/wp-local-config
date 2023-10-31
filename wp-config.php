<?php

$table_prefix  = 'wp_';

/* local-config.php SHOULD contain at least the following information...
 * DB_NAME, DB_USER, DB_PASSWORD, DB_HOST and Authentication Unique Keys and Salts
 */
if ( file_exists( dirname( __FILE__ ) . '/local-config.php' ) ) {
    include( dirname( __FILE__ ) . '/local-config.php' );
}

if ( !defined('DB_CHARSET') ) define('DB_CHARSET', 'utf8');
if ( !defined('DB_COLLATE') ) define('DB_COLLATE', '');
if ( !defined('WPLANG') ) define('WPLANG', '');
if ( !defined('WP_DEBUG') ) define('WP_DEBUG', false);

if (WP_DEBUG) {
    define('WP_DEBUG_LOG', true);
    define('WP_DEBUG_DISPLAY', false);
    @ini_set('display_errors',0);
}

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
