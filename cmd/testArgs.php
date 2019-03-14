<?php
//require_once __DIR__.'/vendor/autoload.php';

/*
 * Note that each autoloaded class with the PSR-4 autoloader
 * requires the exact directory traversal structure to load.
 * 
 * e.g. since our composer.json file states "App\\": "src/", which means
 * the App\ namespace prefix maps directly to the "src" folder.  Then
 * cannot have 
 *      App\Database\Connection for the src/framework/db/Connection.php
 *      
 *      must have
 *      
 *      "App\framework\db" to access Connection.php
 */

require_once __DIR__.'/Models/Utilities/ParseArgv.php';

use App\Models\Utilities as Model;

$modelConnect = new Model\Connection();
$modelConnect->ParseArguments($argv);
