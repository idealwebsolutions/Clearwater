<?php

/**
* Defines all paths/extensions used by this system
* @version 0.6
* @description
*/

include 'config.php';

// Document root path (my/dir/path/include) since we are in the includes folder
$doc_root = "../../../"; 

// Site root
$site_root = "../";

// Framework name (or directory holding the framework)
$framework = 'clearwater'; 

// Application path
$application = $framework.'/application/'.$application_name.'/';

// Module path
$modules = $framework.'/modules/';

// System path
$system = $framework.'/system/';

// Default render ext
$php_ext = ".php";

// DEFINE ALL ERRORS
error_reporting(E_ALL | E_STRICT);

// Set known extension
define('EXT', $php_ext);

// Set full path of document root
define('DOC_ROOT', realpath(dirname($doc_root)).DIRECTORY_SEPARATOR);

// Set root path
define('SITE_ROOT', realpath(dirname($site_root)).DIRECTORY_SEPARATOR);

// Check whether they are correct directory paths
if(is_dir(DOC_ROOT.$application)) {
	define('APPLICATION', DOC_ROOT.$application);
} 
if(is_dir(DOC_ROOT.$modules)) {
	define('MODULES', DOC_ROOT.$modules);
} 
if(is_dir(DOC_ROOT.$system)) {
	define('SYSTEM', DOC_ROOT.$system);
}

// Destroy variables used
unset($application, $modules, $system);

?>