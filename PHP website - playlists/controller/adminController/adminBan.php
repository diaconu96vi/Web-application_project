<?php
/**
 * Created by PhpStorm.
 * User: Viktor
 * Date: 5/21/2018
 * Time: 11:54 PM
 */

session_start();

// If session variable is not set it will redirect to userView page
if(!isset($_SESSION['name']) || empty($_SESSION['name'])){
    header("location: userView.php");
    exit;
}
require 'model/database/Connection.php';
require 'model/database/QueryBuilder.php';
$config = require 'config.php';
$pdo = Connection::connectDB($config['database']);


//Creating query object
$query = new QueryBuilder($pdo);

//Banning
if(!empty($_POST['name'])){
    $query->updateQueryBanned("users", true, $_POST['name']);
}

//Unbanning
if(!empty($_POST['name1'])){
    $query->updateQueryBanned("users", false, $_POST['name1']);
}
$users1 = $query->selectQuery("users");
require 'views/adminView/adminCommands.view.php';