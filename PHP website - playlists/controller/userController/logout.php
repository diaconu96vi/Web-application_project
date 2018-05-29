<?php
// Initialize the session
session_start();

// Unset all of the session variables
$_SESSION = array();

// Destroy the session.
session_destroy();

//
//echo "You've logged out!";
header("location: /home");
exit;
?>
