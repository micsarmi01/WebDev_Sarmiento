<?php 

require '../../dbConnection.php'; 
$dbConn = getConnection(); 

$sql = "SELECT username FROM lab7_user WHERE username = :username"; 
$namedParameters = array(); 
$namedParameters[":username"] = $_GET['username']; 

$stmt = $dbConn->prepare($sql); 
$stmt->execute($namedParameters); 
$result = $stmt->fetch(); 

//print_r($result); 
$checkUsername = array(); 
if (empty($result)) { 
   $checkUsername['exists'] = false; 
   //echo "username available";     
} else { 
   $checkUsername['exists'] = true; 
   //echo "username NOT available"; 
} 

echo json_encode($checkUsername); 


?>