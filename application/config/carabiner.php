<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* Carabiner 1.45 configuration file.
* CodeIgniter-library for Asset Management
*/

/*
|--------------------------------------------------------------------------
| Script Directory
|--------------------------------------------------------------------------
|
| Path to the script directory.  Relative to the CI front controller.
|
*/

$config['script_dir'] = 'assets/js/';


/*
|--------------------------------------------------------------------------
| Style Directory
|--------------------------------------------------------------------------
|
| Path to the style directory.  Relative to the CI front controller
|
*/

$config['style_dir'] = 'assets/css/';

/*
|--------------------------------------------------------------------------
| Cache Directory
|--------------------------------------------------------------------------
|
| Path to the cache directory. Must be writable. Relative to the CI 
| front controller.
|
*/

$config['cache_dir'] = 'assets/cache/';




/*
* The following config values are not required.  See Libraries/Carabiner.php
* for more information.
*/



/*
|--------------------------------------------------------------------------
| Base URI
|--------------------------------------------------------------------------
|
|  Base uri of the site, like http://www.example.com/ Defaults to the CI 
|  config value for base_url.
|
*/

//$config['base_uri'] = 'http://www.example.com/';


/*
|--------------------------------------------------------------------------
| Development Flag
|--------------------------------------------------------------------------
|
|  Flags whether your in a development environment or not. Defaults to FALSE.
|
*/

$config['dev'] = TRUE;


/*
|--------------------------------------------------------------------------
| Combine
|--------------------------------------------------------------------------
|
| Flags whether files should be combined. Defaults to TRUE.
|
*/

$config['combine'] = TRUE;


/*
|--------------------------------------------------------------------------
| Minify Javascript
|--------------------------------------------------------------------------
|
| Global flag for whether JS should be minified. Defaults to TRUE.
|
*/

$config['minify_js'] = TRUE;


/*
|--------------------------------------------------------------------------
| Minify CSS
|--------------------------------------------------------------------------
|
| Global flag for whether CSS should be minified. Defaults to TRUE.
|
*/

$config['minify_css'] = TRUE;

/*
|--------------------------------------------------------------------------
| Force cURL
|--------------------------------------------------------------------------
|
| Global flag for whether to force the use of cURL instead of file_get_contents()
| Defaults to FALSE.
|
*/

$config['force_curl'] = TRUE;


// Development server default assets
$config['groups']['default'] = array(
  'js' => array(
    array('jquery-1.8.3.min.js'), // adding the jquery library
    array('bootstrap.min.js'), // adding the bootstrap library
    // array('angular.min.js') // adding the angular js library
  ),
  'css' => array(
    array('bootstrap.min.css'),
    array('bootstrap-responsive.min.css'),
  )
);