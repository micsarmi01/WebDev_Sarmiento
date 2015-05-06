<?php 
session_start(); 

if (isset($_POST['loginForm'])) { 
     
    require 'dbConnection.php'; 
     
    $dbConn = getConnection(); 
     
    $sql = "SELECT * FROM users
            WHERE userName = :userName  
            AND password = :password"; 
             
    $namedParameters = array();         
    $namedParameters[":userName"]  = $_POST['userName'];
    $namedParameters[":password"] = sha1($_POST['password']); 
    //$namedParameters[":runningScore"]  = $_POST['runningScore'];
    //$namedParameters[":quizAttempts"]  = $_POST['quizAttempts'];); 
    
     
    $stmt = $dbConn->prepare($sql); 
    $stmt->execute($namedParameters); 
    $result = $stmt->fetch(); 
     
    if (empty($result)) { 
        header("Location: login.html?error='wrong username'"); 
    } else { 
         
        $_SESSION["userName"] = $result["userName"]; 
        $_SESSION["runningScore"] = $result["runningScore"]; 
        $_SESSION["quizAttempts"] = $result["quizAttempts"]; 
        $_SESSION["timeStamp"] = $result["timeStamp"]; 
        header("Location: quiz.php"); 
         
    } 
     
     
} 


?>