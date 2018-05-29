<?php
/**
 * Created by PhpStorm.
 * User: Viktor
 * Date: 5/15/2018
 * Time: 1:46 PM
 */
session_start();

// If session variable is not set it will redirect to userView page
/*if(!isset($_SESSION['name']) || empty($_SESSION['name'])){
    header("location: userView.php");
    exit;
}*/
require 'model/database/Connection.php';
require 'model/database/QueryBuilder.php';
$config = require 'config.php';
$pdo = Connection::connectDB($config['database']);
//Storing session username
$user = $_SESSION['name'];
//Creating query object
$query = new QueryBuilder($pdo);

//Change name
if(!empty($_POST['name1'])){
    $query->updateQueryName("users",$_POST['name1'],$user);
    $_SESSION = array();

// Destroy the session.
    session_destroy();
    session_start();
    $_SESSION['name'] = $_POST['name1'];
    header("location: /user/details");
}

//Change password
if(!empty($_POST['PASSWORD'])){
    $parola = password_hash($_POST['PASSWORD'], PASSWORD_DEFAULT);
    $query->updateQueryPassword("users",$parola,$user);
}
//Change email
if(!empty($_POST['email'])){
    $query->updateQueryEmail("users",$_POST['email'],$user);
}
//Print user details
$users1 = $query->selectQuery("users");
foreach($users1 as $utilizator)
{
    if($utilizator->username == $user )
    {
        $unume = $utilizator->username;
        $uparola = $utilizator->PASSWORD;
        $uemail = $utilizator->email;
        $uadmin = $utilizator->admin;
    }
}

require 'views/userView/userDetails.view.php';