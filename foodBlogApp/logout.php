<?php

// starting the Session

session_start();

// Unsettingall of the session variables
$_SESSION = array();

// Killing the session

session_destroy();

// Redirect the Login Page or any other page after logout

header("Location: login.php");
exit();

?>