<?php

    //Creating database connection
    $host_name = "127.0.0.1";    //get this by...
    $database = "AJAXTest";  //get this by...
    $username = "root";
    $password = "";
   




//////// Do not Edit below /////////
try {
$dbo = new PDO('mysql:host='.$host_name.';dbname='.$database, $username, $password);
} catch (PDOException $e) {
print "Error!: " . $e->getMessage() . "<br/>";
die();
}
?>