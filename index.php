<?php

/**
 * @license http://opensource.org/licenses/MIT MIT License
 */

// load the (optional) Composer auto-loader
if (file_exists('vendor/autoload.php')) {
    require 'vendor/autoload.php';
}

// load application config (error reporting etc.)
require 'application/config/config.php';

// load application class
require 'application/libs/classLoader.class.php';

/*Load all calasses form application/models/ folder*/
classLoader::loadClass("application/models/");
require 'application/libs/application.php';
require 'application/libs/controller.php';
require 'application/libs/model.php';
//require 'application/models/monsterModel.php';
//require 'application/models/GameTables.php';
// start the application
$app = new Application();
