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


$sql= "Insert INTO participant (firstName, lastName, email, college, gender, year) VALUES ( :fName, :lName, :email, :college, :gender, :year)"; // using named parameters
$stmt = $dbConn -> prepare($sql); // preparing statement

$stmt -> execute( array(":fName" => $_GET['fName'],
                          ":lName" => $_GET['lName'],
                          ":email" => $_GET['email'],
                          ":college" => $_GET['college'],
                          ":gender" => $_GET['gender'],
                          ":year" => $_GET['year']
                       ));

 echo" Success! " ;

    echo"  <br />First Name: " . $_GET['fName'];
    echo"  <br />Last Name: " . $_GET['lName'];
    echo"  <br />Email: " . $_GET['email'];
    echo"  <br />College: " . $_GET['college'];
    echo"  <br />Gender: " . $_GET['gender'];
    echo"  <br />Year: " . $_GET['year'];



/*
   *$appArray = $_Get['appType'];
        
   * echo "You selected " . count($appArray) 
     * 
     *  */
?>