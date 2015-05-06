<?php 
session_start(); 

if(isset($_POST['loginForm'])) { 
     
    require './dbConnection.php'; 
     
    $dbConn = getConnection(); 
     
    $sql = "SELECT * FROM adminUsers
            WHERE username = :username  
            AND password = :password"; 
             
    $namedParameters = array();         
    $namedParameters[":username"]  = $_POST['username']; 
    $namedParameters[":password"] = sha1($_POST['password']); 
     
    $stmt = $dbConn->prepare($sql); 
    $stmt->execute($namedParameters); 
    $result = $stmt->fetch(); 
     
    if (empty($result)) { 
        header("Location: ../adminLogin.php?error='wrong username'"); 
        echo "error wrong username or password";
    } else { 
         
        $_SESSION["usernameAdmin"] = $result["username"]; 
        $_SESSION["userID"] = $result["userID"]; 
        $_SESSION["name"] = $result["name"]; 
        $_SESSION["IDCardImg"] = $result["IDCardImg"]; 
        $_SESSION["birthCertificateImg"] = $result["birthCertDir"];
        $_SESSION["formImg"] = $result["formDir"];
        $_SESSION["profilePictureDir"] = $result["profilePictureDir"];
        
        
        header("location: ../adminDashboard.php"); 
         
    }  
}




?>