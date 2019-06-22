<?php

/*** Variables ***/

// please update the following to fit the actual requirement
define('DB_NAME', 'db_name');
define('DB_USER', 'db_user');
define('DB_PASSWORD', 'db_password');
define('DB_HOST', 'localhost');

// MEDIA URL (required) to fetch wp-content/uploads file on-the-fly
define('WPLT_MEDIA_FROM_PROD_URL', 'https://example.com/');

// define( 'WP_LOCAL_DEV', true );

// choose anyone of the following
// define( 'WPLT_SERVER', 'local' );
define( 'WPLT_SERVER', 'staging' );

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

/* End of Variables */

/*
 * You needn't edit any of the following lines.
 * Still good to know / understand what's going on
 */

define('WPLT_ROBOTS', 'noindex');

$wplt_protocol = 'http://';
$wplt_domain = '';

if( isset($_SERVER['HTTP_HOST']) ) $wplt_domain = $_SERVER['HTTP_HOST'];

if (
    (isset($_SERVER['HTTPS']) && ($_SERVER['HTTPS'] == 'on' || $_SERVER['HTTPS'] == 1)) ||
    (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https')
    ) {
  $wplt_protocol = 'https://';
}

define('WP_HOME', $wplt_protocol . $wplt_domain);
define('WP_SITEURL', $wplt_protocol . $wplt_domain);

/* deactivate a set of plugins => https://github.com/joeguilmette/wp-local-toolbox#disable-plugins
 * - caching plugins
 * - SEO related plugins
 * - backup plugins
 * - analytics plugins
 * - security plugins
 * - any other specific plugins
 */

define('WPLT_DISABLED_PLUGINS', serialize(
    array(
        'batcache/batcache.php',
        'wp-rocket/wp-rocket.php',
        'wp-super-cache/wp-cache.php',
        'w3-total-cache/w3-total-cache.php',
        'varnish-http-purge/varnish-http-purge.php',
        'wp-fastest-cache/wpFastestCache.php',

        'google-sitemap-generator/sitemap.php',
        'bwp-google-xml-sitemaps/bwp-simple-gxs.php',
        'html-sitemap/html-sitemap.php',

        'wordpress-seo/wp-seo.php',
        'autodescription/autodescription.php',

        'vaultpress/vaultpress.php',
        'backup/backup.php',
        'backupwordpress/backupwordpress.php',
        'updraftplus/updraftplus.php',

        'wp-piwik/wp-piwik.php',
        'force-strong-passwords/slt-force-strong-passwords.php',
        'simple-history/index.php',

        'preload-fullpage-cache/preload-fullpage-cache.php',
        'imagify/imagify.php',
        'minify-html-markup/minify-html.php'
    )
));

/* Jetpack specific configs; use only one */
define( 'JETPACK_STAGING_MODE', true );
// define( 'JETPACK_DEV_DEBUG', true );
