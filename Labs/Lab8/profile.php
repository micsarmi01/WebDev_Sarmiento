<?php

session_start();



if(!isset($_SESSION['username'])){

header("Location: login.html");

}



// TODO: PLACE profile pic in folder hierarchy






require 'dbConnection.php';

if(isset($_POST['uploadForm'])){

echo $_FILES['fileName']['name'] . "\n";


echo $_FILES['fileName']['tmp_name'] . "\n";





echo $_FILES['fileName']['size'];

echo $_FILES['fileName']['type'];


//$imageType = exif_imagetype($_FILES['fileName']['tmp_name']); // 1, 2, 3 for gif, jpg or png respectively.


//if($imageType != 1 ||  $imageType != 2 || $imageType !=3){

// delete image

//echo "Here";

//unlink($_FILES['fileName']['name']);

//}


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

        $sql = "UPDATE zip_code SET profilePicture='" . $_FILES['fileName']['name'] . "'WHERE username='" .$_SESSION['username']. "'";

        $stmt = $dbConn -> prepare($sql);

        $stmt -> execute();


}



?>

<!DOCTYPE html>

<html lang="en">

<head>

  <meta charset="utf-8">



  <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame 

       Remove this if you use the .htaccess -->

  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">



  <title>profile</title>

  <meta name="description" content="">





  <meta name="viewport" content="width=device-width; initial-scale=1.0">



  <!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->

  <link rel="shortcut icon" href="/favicon.ico">

  <link rel="apple-touch-icon" href="/apple-touch-icon.png">

</head>



<body>

  <div>

    <header>

      <h1>User Profile</h1>

    </header>





    <div>

      Username: <?=$_SESSION['username']?>

      

      <form method="post" enctype="multipart/form-data">

      Select image: <input type="file" name="fileName" />

      <input type="submit" name="uploadForm"/>

      </form>

      <?php

      if(empty($_SESSION['profilePicture'])){

      echo "<img src='img/unknown.jpg' alt='Unknown user' >";

      } else{

      // display user's profile picture

      echo "<img src=img/" . $_SESSION['username'] . "/" . $_SESSION['profilePicture'];
}

      ?>

    </div>



    <footer>

     

    </footer>

  </div>

</body>

</html>