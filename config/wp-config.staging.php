<?php
/**
 * Staging environment config settings
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
define('WP_DEBUG',      true);

// Define content directories
define( 'WP_CONTENT_DIR', '/var/sites/d/domusexecutive.staging.mfos.co.uk/public_html/app' );