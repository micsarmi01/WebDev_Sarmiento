<?php

function getConnection() {
    //Creating database connection
    $host = "127.0.0.1";    //get this by...
    $dbname = "Assignment5";  //get this by...
    $username = "root";
    $password = "";
    $dbConn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $dbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 

	//Creates conection
	$dbConn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

	//Sets Error handling to Exception so it shows all errors when trying to get the data
	$dbConn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	return $dbConn;
}


/*
 * To enter stuff in, case sensitive
$sql = "Insert INTO `Participants` (firstName, lastName, email, college, gender,  year, appType ) 
        VALUES (:fName, :lName, :email, :college, :gender, :schoolYear, :appType)";

$stmt = $dbConn -> prepare($sql); //Preparing the Statement
$stmt -> execute(array(":fName" => $_GET["fName"],
                        ":lName" => $_GET["lName"],
                        ":email" => $_GET["email"],
                        ":college" => $_GET["college"],
                        ":gender" => $_GET["gender"],
                        ":schoolYear" => $_GET["year"]
                        ":appType" => .impode($_GET["appType"])
                       ));
 */
?>