<?php
/**
 * Created by PhpStorm.
 * User: Viktor
 * Date: 5/8/2018
 * Time: 2:13 PM
 */

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

//Checking if userView input is valid
$uservalid=false;
$passvalid=false;
$adminvalid = false;
$bannedvalid = false;
$users1 = $query->selectQuery("users");

//Checking if username is valid(and if admin)
if($nickname == ''){
    echo "Username is empty";
    $uservalid = false;
}
else
{
    foreach ($users1 as $utilizatori) {
        if ($utilizatori->username == $nickname) {
            $uservalid = true;
            //Check if admin
            if($utilizatori->admin == true){
                $adminvalid = true;
            }
            //Check if banned
            if($utilizatori->banned == true){
                $bannedvalid = true;
            }
        }
    }
}

//Checking if password is valid
if($parola == ''){
    echo "Password is empty";
    $passvalid = false;
}
else{
    foreach ($users1 as $utilizatori) {
        if (password_verify($parola, $utilizatori->PASSWORD)) {
            $passvalid = true;
            //echo "aaaaaaa";
        }
    }
}

if($bannedvalid) {
    header("location: views/banned.php");
}
elseif($uservalid == true && $passvalid == true) {

    //Logs
    $file = 'people.txt';
    // Open the file to get existing content
    $current = file_get_contents($file);
    // Append a new person to the file
    $current .= "User: " . $nickname . " Logged in: " . date("Y/m/d h:i:sa") . "\n";
    // Write the contents back to the file
    file_put_contents($file, $current);

    session_start();
    $_SESSION['name'] = $nickname;
    if ($adminvalid) {
        header("location: /admin/search");
    } else {
        header("location: /user/search");
    }
}
