<?php

session_start();



if(!isset($_SESSION['username'])){

header("Location: login.html");

}


?>

<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Profile</title>
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="viewport" content="width=device-width; initial-scale=1.0">
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

      if(empty($_SESSION['profilePictureDir'])){

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