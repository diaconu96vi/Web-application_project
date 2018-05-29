<?php
/**
 * Created by PhpStorm.
 * User: Viktor
 * Date: 4/18/2018
 * Time: 11:30 PM
 */

require 'model/Router.php';

$router = new Router();
require 'routes.php';
//var_dump($_SERVER['REQUEST_URI']);
//$uri = trim($_SERVER['REQUEST_URI']);
$uri = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
$requestType = $_SERVER["REQUEST_METHOD"];
//die(var_dump($router));
require $router->direct($uri,$requestType);
