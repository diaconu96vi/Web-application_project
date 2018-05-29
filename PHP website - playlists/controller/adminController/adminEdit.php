<?php
/**
 * Created by PhpStorm.
 * User: Viktor
 * Date: 5/15/2018
 * Time: 1:46 PM
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
//Storing user inputs
$userToEdit = $_POST['user'];
$nickname = $_POST['name1'];
$parola = $_POST['PASSWORD'];
$adresa = $_POST['email'];
//Creating query object
$query = new QueryBuilder($pdo);


//Change password
if($parola !=""){
    $parola = password_hash($parola, PASSWORD_DEFAULT);
    $query->updateQueryPassword("users",$parola,$userToEdit);
}
//Change email
if($adresa !=""){
    $query->updateQueryEmail("users",$adresa,$userToEdit);
}

//Change name
if($nickname !=""){
    $query->updateQueryName("users",$nickname,$userToEdit);
}

$users1 = $query->selectQuery("users");

require 'views/adminView/adminCommands.view.php';