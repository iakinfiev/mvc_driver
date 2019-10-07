<?php
use app\system\Router;
use app\system\Db;

require_once 'app/config/config.php';
//require_once 'app/system/Dev.php';
require_once 'app/system/auto_load.php';

session_start();

$router = new Router;
$router->run();