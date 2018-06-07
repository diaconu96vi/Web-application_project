<?php
/**
 * Created by PhpStorm.
 * User: Viktor
 * Date: 5/7/2018
 * Time: 12:57 PM
 */
/*
$router->define([
    '/home' => 'controller/index.php',
    '/about' => 'controller/about.php',
    '/about/culture' =>'controller/search.view.php',
    '/contact' => 'controller/browse.php',
    '/names' => 'controller/register.php'
]);
*/
// Guest views
$router->get('/home','controller/index.php');
$router->get('/about','controller/about.php');
$router->get('/search','controller/search.php');
$router->get('/browse','controller/browse.php');
$router->get('/access','controller/login_register.php');
$router->get('/playlist','views/playlist.php');

// User views
$router->get('/user/search','controller/userController/userSearch.php');
$router->get('/user/logout','controller/userController/logout.php');
$router->get('/user/details','controller/userController/userDetails.php');
$router->get('/user/upgrade','controller/userController/userUpgrade.php');
$router->get('/user/browse','controller/userController/userBrowse.php');
$router->get('/user/about','controller/userController/userAbout.php');
$router->get('/user/playlist','views/userView/userPlaylist.view.php');

// Admin views
$router->get('/admin/search','controller/adminController/adminSearch.php');
$router->get('/admin/logout','controller/adminController/logout.php');
$router->get('/admin/about','controller/adminController/adminAbout.php');
$router->get('/admin/browse','controller/adminController/adminbrowse.php');
$router->get('/admin/commands','controller/adminController/adminCommands.php');
$router->get('/admin/playlist','views/adminView/adminPlaylist.view.php');

$router->post('/register','controller/register.php');
$router->post('/login','controller/login.php');
$router->post('/modify', 'controller/userController/userDetails.php');
$router->post('/ban', 'controller/adminController/adminBan.php');
$router->post('/unban', 'controller/adminController/adminBan.php');
$router->post('/create','controller/adminController/adminCreate.php');
$router->post('/edit','controller/adminController/adminEdit.php');