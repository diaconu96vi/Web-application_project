<?php
/**
 * Created by PhpStorm.
 * User: Viktor
 * Date: 5/7/2018
 * Time: 11:48 AM
 */


require 'model/database/Connection.php';
require 'model/database/QueryBuilder.php';
$config = require 'config.php';

//Bootstrap
$pdo = Connection::connectDB($config['database']);
$query = new QueryBuilder($pdo);

$users1 = $query->selectQuery("users");

require 'views/index.view.php';