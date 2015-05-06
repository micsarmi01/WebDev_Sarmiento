<?php


session_start();



if(!isset($_SESSION['username'])){

header("Location: login.html");

}

require 'dbConnection.php';

if(isset($_POST['uploadForm'])){

echo $_FILES['fileName']['name'] . "\n";


echo $_FILES['fileName']['tmp_name'] . "\n";


echo $_FILES['fileName']['size'];

echo $_FILES['fileName']['type'];




$path = "../img/form/" . $_SESSION['username'];

if(!file_exists($path)){ // check whether the user's folder exists

mkdir($path);

}


echo "\n" . $path;

$pathOfPic = $path . "/" . $_FILES['fileName']['name'];

echo "\nPath of pic: " . $path . "/" . $_FILES['fileName']['name'];

move_uploaded_file($_FILES['fileName']['tmp_name'],   '../img/form/' . $_SESSION['username'] . "/" . $_FILES['fileName']['name']);

echo "<a href='../dashboard.php'> Back to Dash </a>";
    
// update database with the name of the file for the profile picture

$dbConn = getConnection();

        $sql = "UPDATE users SET formDir='" . $_FILES['fileName']['name'] . "'WHERE username='" .$_SESSION['username']. "'";

        $stmt = $dbConn -> prepare($sql);

        $stmt -> execute();

}
?>