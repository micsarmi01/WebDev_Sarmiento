<?php

/*
 * To change this template use Tools | Templates.
*/


$host = "127.0.0.1";
$dbname = "Hackathon";
$username="dbuser";
$password = "s3cr3t";
$dbConn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
$dbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 

$stmt = $dbConn -> prepare($sql); // preparing statement
$stmt -> execute( array(":fName" => $_POST['fName'],
                          ":lName" => $_POST['lName'],
                          ":email" => $_POST['email'],
                          ":college" => $_POST['college'],
                          ":gender" => $_POST['gender'],
                          ":year" => $_POST['year']
                       ));

$sql= "Insert INTO participant (firstName, lastName, email, college, gender, year) VALUES ( :fName, :lName, :email, :college, :gender, :year)"; // using named parameters




 echo" Success! " ;

    echo"  <br />First Name: " . $_POST['fName'];
    echo"  <br />Last Name: " . $_POST['lName'];
    echo"  <br />Email: " . $_POST['email'];
    echo"  <br />College: " . $_POST['college'];
    echo"  <br />Gender: " . $_POST['gender'];
    echo"  <br />Year: " . $_POST['year'];



/*
   *$appArray = $_Get['appType'];
        
   * echo "You selected " . count($appArray) 
     * 
     *  */
?>