<?php 
session_start(); 

if (!isset($_SESSION['username'])) {
    header("Location: login.html");
}
     
    require 'dbConnection.php'; 
     
    $dbConn = getConnection(); 
     
    




$sql= "Insert INTO familyMembers (userID, firstname, lastname, gender, dob) VALUES (:userID, :fName, :lName, :gender, :dob)"; // using named parameters
$stmt = $dbConn -> prepare($sql); // preparing statement

$stmt -> execute( array(":userID" => $_SESSION['userID'],
                          ":fName" => $_POST['firstname'],
                          ":lName" => $_POST['lastname'],
                          ":gender" => $_POST['gender'],
                          ":dob" =>$_POST['dob'],
                          
                       ));

    echo" Success family member added! " ;
    
    echo"  <br />Under User ID: " . $_SESSION['userID'];
    echo"  <br />First Name: " . $_POST['firstname'];
    echo"  <br />Last Name: " . $_POST['lastname'];
    echo"  <br />Email: " . $_POST['gender'];

    echo"<br> <a href='../dashboard.php'> Back to Dashboard </a> "

    
    ?>