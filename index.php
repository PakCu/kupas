<?php 

/*
|--------------------------------------------------------------------------
| Full error reporting during development.
|--------------------------------------------------------------------------
|
| Don't ever hide errors while developing code!
|
*/

ini_set('display_errors', 1);
error_reporting(E_ALL);


/*
|--------------------------------------------------------------------------
| Load the config
|--------------------------------------------------------------------------
|
| See how this is not inside libs, and no sir I'm not exposing my 
| Facebook API credential for everyone to see.
|
*/
if ( ! is_file(__DIR__.'config.php'))
{
	throw new RuntimeException("Missing config.php file.");
}

/*
|--------------------------------------------------------------------------
| Load autoload using composer
|--------------------------------------------------------------------------
|
| Composer is good enough to now where to find my class, there no need 
| for me to load it one by one.
|
*/
include "vendor/autoload.php";