<?php
/**
 * Created by PhpStorm.
 * User: Viktor
 * Date: 5/21/2018
 * Time: 11:19 PM
 */

session_start();

// If session variable is not set it will redirect to userView page
if(!isset($_SESSION['name']) || empty($_SESSION['name'])){
    header("location: userView.php");
    exit;
}
// Connecting to database
require 'model/database/Connection.php';
require 'model/database/QueryBuilder.php';
$config = require 'config.php';
$pdo = Connection::connectDB($config['database']);

//Creating query object
$query = new QueryBuilder($pdo);
$users1 = $query->selectQuery("users");

require 'views/adminView/adminCommands.view.php';