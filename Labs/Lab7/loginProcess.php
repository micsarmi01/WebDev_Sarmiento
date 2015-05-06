<?php 
session_start(); //Start a new session or resume an existing session 

require 'dbConnection.php'; 
$dbConn = getConnection(); 

$username = $_POST['username']; 
$password = sha1($_POST['password']); //encryption using sha1 method directly 
$password = hash("sha1", $_POST['password']); //Another way to do the line above 

//$sql = "SELECT * FROM cup_admin WHERE username = '$username' AND password = '$password'"; //allowing SQL injection! 
$sql = "SELECT * FROM admin WHERE username = :username AND password = :password"; 

$stmt = $dbConn->prepare($sql); 
$namedParameters = array(); 
$namedParameters[":username"] = $username; 
$namedParameters[":password"] = $password; 
$stmt->execute($namedParameters); 
$result = $stmt->fetch(); 

//print_r($result); 

if (empty($result)) { 
    header("Location: login.php?error=Wrong username or password!"); 
} else { 
     
    $_SESSION['username'] = $result['username']; 
    $_SESSION['adminName'] = $result['firstName'] . " " . $result['lastName']; 
    header("Location: reports.php"); //redirects users to a new file 
     
} 


?>