# WP-Local-Config
Local config file for WordPress dev / staging / test site!

## How to setup a local dev site

- Except uploads directory, archive files from the production and then transfer them to dev server
- Dump production DB and then transfer it to dev server
- Modify your existing wp-config.php file similar to [the example wp-config.php file](https://github.com/pothi/wp-local-config/blob/master/wp-config.php)
- Creat your own [local-config.php](https://github.com/pothi/wp-local-config/blob/master/local-config.php) file
- Create new database credentials that will be applicable only for the dev site
- Edit local-config.php file and update the database credentials that you created for the dev site
- Import the database dump (from production site)
- Fetch the latest version of [WP Local Toolbox](https://github.com/joeguilmette/wp-local-toolbox) and place it in wp-content/mu-plugins directory
- Browser your dev / staging / test site

Any questions? [Get in touch](https://www.tinywp.in/contact/)
