<?php

function getConnection() {
    
    $host = "23.229.171.225";    
    $dbname = "Beneficiary";  
    $username = "Michael";
    $password = "TechRent2014!";
    $dbConn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $dbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 

	
	return $dbConn;
}

