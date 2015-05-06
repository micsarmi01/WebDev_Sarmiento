<?php

/*
 * To change this template use Tools | Templates.
 */
session_start();
setcookie(session_name(), '', 100);
session_unset();
session_destroy();
$_SESSION = array();
header("Location: ../Index.html"); 

?>