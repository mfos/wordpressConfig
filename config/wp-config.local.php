<?php
/**
 * Local environment config settings
 *
 * Enter any WordPress config settings that are specific to this environment 
 * in this file.
 */

/** Database Connection Settings */
define('DB_NAME',       '');
define('DB_USER',       '');
define('DB_PASSWORD',   '');
define('DB_HOST',       '');

/** Dev Env Settings */
define('WP_DEBUG',      false);

// Define content directories
define( 'WP_CONTENT_DIR', __DIR__.'/../public_html/app' );