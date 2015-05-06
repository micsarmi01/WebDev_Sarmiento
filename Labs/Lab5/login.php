<?php
session_start();
require 'dbConnection.php';

$dbConn = getConnection();

$username = $_POST['username'];
$password = sha1($_POST['password']);

$sql = "SELECT * FROM admin WHERE username = :username AND password = :password";
//$sql = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";  //allowing SQL Injection
$namedParameters = array();
$namedParameters[':username'] = $username;
$namedParameters[':password'] = $password;
$stmt = $dbConn -> prepare($sql);
$stmt->execute($namedParameters);
//$stmt->execute();
$result = $stmt->fetch(); //We are expecting one record

if (empty($result)) {

     header("Location: index.php?error=WRONG USERNAME OR PASSWORD");
    
} else {
    
    $_SESSION['username']  = $result['username'];
    $_SESSION['adminName'] = $result['firstName'] . " " . $result['lastName'];
    header("Location: reports.php");
    
}



?>