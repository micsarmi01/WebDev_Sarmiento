<?php 

     
    require 'dbConnection.php'; 
     
    $dbConn = getConnection(); 
     
    




$sql= "Insert INTO users (username, password, email, firstname, lastname, gender, dob, phone, lastDeployment, payGrade) 
VALUES (:username, :password, :email, :firstname, :lastname, :gender, :dob, :phone, :lastDeployment, :payGrade)"; // using named parameters

$stmt = $dbConn -> prepare($sql); // preparing statement

$stmt -> execute( array(":username" => $_POST['username'],
                          ":password" => sha1($_POST['password']),
                          ":firstname" => $_POST['firstname'],
                          ":lastname" => $_POST['lastname'],
                          ":gender" => $_POST['gender'],
                          ":dob" =>$_POST['dob'],
                          ":email" => $_POST['email'],
                          ":phone" => $_POST['phone'],
                          ":lastDeployment" => $_POST['lastDeployment'],
                          ":payGrade" => $_POST['pay'],
                       ));

    echo" Success You have signedup! " ;
    
    echo"  <br />Under User Name: " . $_POST['username'];
    echo"  <br />First Name: " . $_POST['firstname'];
    echo"  <br />Last Name: " . $_POST['lastname'];
    echo"  <br />Email: " . $_POST['gender'];

    echo"<br> <a href='../login.html'> Back to login </a> "

    
    ?>