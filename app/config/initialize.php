<?php

// Define the core paths
// Define them as absolute paths to make sure that require_once works as expected

// DIRECTORY_SEPARATOR is a PHP pre-defined constant
// (\ for Windows, / for Unix)

defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);


defined('SITE_ROOT') ? null : 
	define('SITE_ROOT', 'C:'.DS.'wamp64'.DS.'www'.DS.'SparFlick');

defined('MODEL_PATH') ? null : define('MODEL_PATH', SITE_ROOT.DS.'app'.DS.'models');

// load config file first
require_once(SITE_ROOT.DS.'app'.DS.'config'.DS.'config.php');

// load basic functions next so that everything after can use them
require_once(SITE_ROOT.DS.'app'.DS.'http'.DS.'functions.php');

// load core objects
require_once(SITE_ROOT.DS.'app'.DS.'http'.DS.'session.php');
require_once(SITE_ROOT.DS.'app'.DS.'http'.DS.'pagination.php');

// load database files
require_once(SITE_ROOT.DS.'app'.DS.'database'.DS.'database.php');
require_once(SITE_ROOT.DS.'app'.DS.'database'.DS.'database_object.php');

// load models
require_once(MODEL_PATH.DS.'user.php');
require_once(MODEL_PATH.DS.'photograph.php');
require_once(MODEL_PATH.DS.'comment.php');

?>