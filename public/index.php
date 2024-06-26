<?php

define("APP_PATH", dirname(__DIR__));

require_once(APP_PATH . '/vendor/autoload.php');

require_once(APP_PATH . '/config/database.php');

use App\Core\App;

session_start();

$app = new App();

$app->run();