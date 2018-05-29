<?php
/**
 * Created by PhpStorm.
 * User: Viktor
 * Date: 5/7/2018
 * Time: 11:46 PM
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

//Getting input
$nickname = $_POST['name'];
$parola = $_POST['PASSWORD'];
$parola1 = $_POST['retypePASSWORD'];
$adresa = $_POST['email'];

//Checking if register input is valid
$uservalid=true;
$users1 = $query->selectQuery("users");
if($nickname == "" || strlen($nickname) < 3)
{
    echo "Invalid username";
    $uservalid = false;
}
else {
    foreach ($users1 as $utilizatori) {
        if ($utilizatori->username == $nickname) {
            echo " User already taken !";
            $uservalid = false;
        }
    }
}

//Checking if password input is valid
if($parola != $parola1)
{
    echo "Password doesnt match";
    $passvalid = false;
}
elseif (strlen($parola) < 3){
    echo "Password too short";
    $passvalid = false;
}

else {
    $passvalid = true;
}

if($passvalid == true && $uservalid == true ) {
    $param_password = password_hash($parola, PASSWORD_DEFAULT);
    $query->insertQuery("users", $nickname, $param_password, $adresa);
    $users1 = $query->selectQuery("users");
    require 'views/adminView/adminCommands.view.php';
}