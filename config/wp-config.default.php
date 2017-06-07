<?php
/**
 * Default config settings
 */
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/
 */
define('AUTH_KEY',         '');
define('SECURE_AUTH_KEY',  '');
define('LOGGED_IN_KEY',    '');
define('NONCE_KEY',        '');
define('AUTH_SALT',        '');
define('SECURE_AUTH_SALT', '');
define('LOGGED_IN_SALT',   '');
define('NONCE_SALT',       '');

$table_prefix  = 'wp_';

define('WPLANG', '');

/** Disable File Editor */
define( 'DISALLOW_FILE_EDIT', true );

/** Disable Automatic Updates (Should be done by VCS/ Composer */
define( 'AUTOMATIC_UPDATER_DISABLED', true );

/** Stop users from uploading plugins/themes directly */
define( 'DISALLOW_FILE_MODS', true );

$isSecure = false;
if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') {
    $isSecure = true;
}
elseif (!empty($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https' || !empty($_SERVER['HTTP_X_FORWARDED_SSL']) && $_SERVER['HTTP_X_FORWARDED_SSL'] == 'on') {
    $isSecure = true;
}




//// GET PROTOCOL
//if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') {
//    // this is HTTPS
//    $protocol  = "https";
//} else {
//    // this is HTTP
//    $protocol  = "http";
//}

/* Define URLs and paths */
$base_path = substr(ABSPATH, strlen($_SERVER['DOCUMENT_ROOT']));
//define('WP_SITEURL', "https://${_SERVER['HTTP_HOST']}/core");
//define('WP_HOME', "https://${_SERVER['HTTP_HOST']}");

if($isSecure) {
    define('WP_SITEURL', "https://${_SERVER['HTTP_HOST']}/core");
    define('WP_HOME', "https://${_SERVER['HTTP_HOST']}");

    define('WP_CONTENT_URL', 'https://' . $_SERVER['HTTP_HOST'] . '/app'); // Define content directory URL

    define('FORCE_SSL_ADMIN', true);
    // in some setups HTTP_X_FORWARDED_PROTO might contain
    // a comma-separated list e.g. http,https
    // so check for https existence
    if (strpos($_SERVER['HTTP_X_FORWARDED_PROTO'], 'https') !== false)
        $_SERVER['HTTPS']='on';

} else {
    define('WP_SITEURL', "http://${_SERVER['HTTP_HOST']}/core");
    define('WP_HOME', "http://${_SERVER['HTTP_HOST']}");

    define('WP_CONTENT_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/app'); // Define content directory URL
}

/* ASSET PATHS */
//define('IMAGES_PATH', '/app/themes/everyroots/images/');

// Require Composer autoloader
require __DIR__.'/../public_html/vendor/autoload.php';

define( 'WP_POST_REVISIONS', 5 );
