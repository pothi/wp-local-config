<?php

/*** Variables ***/

// please update the following to fit the actual requirement
define('DB_NAME', 'db_name');
define('DB_USER', 'db_user');
define('DB_PASSWORD', 'db_password');
define('DB_HOST', 'localhost');

// MEDIA URL (required) to fetch wp-content/uploads file on-the-fly
define('WPLT_MEDIA_FROM_PROD_URL', 'http://example.com/');

/* End of Variables */

/*
 * You needn't edit any of the following lines.
 * Still good to know / understand what's going on
 */

$wplt_domain = $_SERVER['HTTP_HOST'];
// for Browser Sync
// $wplt_domain = "$_SERVER['HTTP_HOST']:2000";

define('WPLT_ROBOTS', 'noindex');

$wplt_protocol = 'http://';
if (isset($_SERVER['HTTPS']) &&
    ($_SERVER['HTTPS'] == 'on' || $_SERVER['HTTPS'] == 1) ||
    isset($_SERVER['HTTP_X_FORWARDED_PROTO']) &&
    $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https') {
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

        'simple-history/index.php'
    )
));
