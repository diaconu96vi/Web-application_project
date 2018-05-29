<?php
/**
 * Created by PhpStorm.
 * User: Viktor
 * Date: 5/27/2018
 * Time: 10:43 PM
 */

session_start();

// If session variable is not set it will redirect to userView page
if(!isset($_SESSION['name']) || empty($_SESSION['name'])){
    header("location: userView.php");
    exit;
}
require 'views/adminView/adminAbout.view.php';