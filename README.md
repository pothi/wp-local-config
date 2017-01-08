# WP-Local-Config

For a more detailed explanation of the whole repo and its background, please see the blog post on how to set up a WordPress dev site (coming soon).

## How to setup a local dev site

- Except `wp-content/uploads` directory, archive files from the production and then transfer them to dev server.
- Dump production DB and then transfer it to dev server.
- Modify your existing wp-config.php file similar to [the example wp-config.php file](https://github.com/pothi/wp-local-config/blob/master/wp-config.php).
- Creat your own [local-config.php](https://github.com/pothi/wp-local-config/blob/master/local-config.php) file.
- Create new database credentials that will be applicable only for the dev site.
- Edit local-config.php file and update the database credentials that you created for the dev site.
- Import the database dump (from production site).
- Fetch the latest version of [WP Local Toolbox](https://github.com/joeguilmette/wp-local-toolbox) and place it in wp-content/mu-plugins directory.
- Browser your dev / staging / test site.

## Post Installation Steps

The following guidelines are useless, if you already don't have a working dev site.

- Make sure you have [a plugin to update everything in WordPress](https://github.com/pothi/wordpress-mu-plugins/blob/master/auto-update-everything.php).
- Make sure you deleted robots.txt file in the WordPress root directory.
- Make sure you deleted sitemap file/s in the WordPress root directory.
- Make sure you have a method to update mu-plugins as well, such as WP Local Toolbox. :) [hint](http://stackoverflow.com/questions/2466735/how-to-checkout-only-one-file-from-git-repository)!

Any questions? [Get in touch](https://www.tinywp.in/contact/).
