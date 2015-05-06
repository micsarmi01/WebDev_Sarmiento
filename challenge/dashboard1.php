<?php

session_start();



if(!isset($_SESSION['username'])){

header("Location: login.html");

}

require 'includes/dbConnection.php';

if(isset($_POST['uploadForm'])){

echo $_FILES['fileName']['name'] . "\n";


echo $_FILES['fileName']['tmp_name'] . "\n";


echo $_FILES['fileName']['size'];

echo $_FILES['fileName']['type'];




$path = "img/" . $_SESSION['username'];

if(!file_exists($path)){ // check whether the user's folder exists

mkdir($path);

}


echo "\n" . $path;

$pathOfPic = $path . "/" . $_FILES['fileName']['name'];

echo "\nPath of pic: " . $path . "/" . $_FILES['fileName']['name'];

move_uploaded_file($_FILES['fileName']['tmp_name'],   'img/' . $_SESSION['username'] . "/" . $_FILES['fileName']['name']);


// update database with the name of the file for the profile picture

$dbConn = getConnection();

        $sql = "UPDATE users SET IDCardImg='" . $_FILES['fileName']['name'] . "'WHERE username='" .$_SESSION['username']. "'";

        $stmt = $dbConn -> prepare($sql);

        $stmt -> execute();

}
?>

<!DOCTYPE html>
<html>
<head>
    <title>DoD Beneficiary Dashboard</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
    <meta name="viewport" content="width=device-width">
	
      <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
      <!--add this to every page as well for parse DB*/-->
      <script type="text/javascript" src="http://www.parsecdn.com/js/parse-1.4.2.min.js"></script>
</head>
<body>
     
	<h1> Required Documents </h1> 
<div id="user-info">
        Signed in as: <?=$_SESSION['username']?> userID: <?=$_SESSION['userID']?> (<a href="includes/logout.php" class="log-out">Log out</a>)<br><br>
      </div>
    
		<nav>
		<a href="includes/logout.php"> Logout </a>
		<a href="familySignup.php"> Add a Family Member</a>
		<a href="family.html"> Family Page </a>
		<a href="profile.html"> Profile </a>
		</nav>
		<br />
    Test: <?=$_SESSION['IDCardImg']?> 
       
	
	<!-- display documents from database from a table -->
<H1>ID Card</H1>
    	<!-- user can upload documents to the database -->
<form method="post" enctype="multipart/form-data">

      Select image: <input type="file" name="fileName" />

      <input type="submit" value="upload" name="uploadForm"/>

      </form>

      <?php

      if(empty($_SESSION['IDCardImg'])){

      echo "<img width='500' height='400' src='img/Sample-ID.jpg' alt='Unknown user' ></img>";

      } else{

      // display user's profile picture

      echo "<img src=img/" . $_SESSION['username'] . "/" . $_SESSION['IDCardImg'];
       }

      ?>



    
</body>
</html>