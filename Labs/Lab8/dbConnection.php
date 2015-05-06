<?php

function getConnection() {
    //Creating database connection
    $host = "127.0.0.1";    //get this by...
    $dbname = "lab7";  //get this by...
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



?>