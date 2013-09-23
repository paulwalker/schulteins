<?php
// $services = getenv("VCAP_SERVICES");
// $services_json = json_decode($services,true);
// $mysql_config = $services_json["mysql-5.1"][0]["credentials"];

// ** MySQL settings from resource descriptor ** //
define('DB_NAME', 'schulteinsurance');
define('DB_USER', getenv("OPENSHIFT_MYSQL_DB_USERNAME"));
define('DB_PASSWORD', getenv("OPENSHIFT_MYSQL_DB_PASSWORD"));
define('DB_HOST', getenv("OPENSHIFT_MYSQL_DB_HOST"));
define('DB_PORT', getenv("OPENSHIFT_MYSQL_DB_PORT"));

define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');
define ('WPLANG', '');
define('WP_DEBUG', false);

require('wp-salt.php');

$table_prefix  = 'wp_';

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

