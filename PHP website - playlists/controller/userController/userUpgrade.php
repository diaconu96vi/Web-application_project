<?php
/**
 * Created by PhpStorm.
 * User: Viktor
 * Date: 5/15/2018
 * Time: 1:35 PM
 */

session_start();

// If session variable is not set it will redirect to userView page
if(!isset($_SESSION['name']) || empty($_SESSION['name'])){
    header("location: userView.php");
    exit;
}
require 'views/userView/userUpgrade.view.php';