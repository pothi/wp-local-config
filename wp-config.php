<?php

if ( file_exists( dirname( __FILE__ ) . '/local-config.php' ) ) {
    # define( 'WP_LOCAL_DEV', true );
    define( 'WPLT_SERVER', 'dev' );
    include( dirname( __FILE__ ) . '/local-config.php' );
} else {
    define('DB_NAME', 'prod_db_name');
    define('DB_USER', 'prod_db_user');
    define('DB_PASSWORD', 'prod_db_password');
    define('DB_HOST', 'prod_db_host');
}
