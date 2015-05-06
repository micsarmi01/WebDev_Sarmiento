<?php

session_start();



if(!isset($_SESSION['username'])){

header("Location: login.html");

}


?>

<!DOCTYPE html>
<html>
<head>
    <title>DoD Beneficiary Profile</title>
	
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    
        <nav>
        <a  id="navlinks" href="dashboard.php"><img src="img/dashboard.png" width="35" height="35"></a>
		<a  id="navlinks" href="familySignup.php"> &nbsp; Add a Family Member&nbsp; </a>
		<a  id="navlinks" href="family.php"> &nbsp;Family Page&nbsp; </a>
		<a  id="navlinks" href="profile.php"> &nbsp;Profile&nbsp; </a>
        <a  id="logout" href="includes/logout.php"> (Logout: <?=$_SESSION['username']?>) &nbsp;  </a>
		</nav>
    
       <script>
      $(function() {
        $( "#accordion" ).accordion({
      heightStyle: "content"
        });
      });
      </script>
    
</head>
<body>
    
       <br><br>
	<h1> Required Documents </h1> 

    <div id="accordion">
        <h3> Welcome <?=$_SESSION['username']?>!</h3>
        <p> Choose a required document.</p>
  <h3>ID Card</h3>
  <div>
    <p>
    <!-- user can upload documents to the database -->
      <form method="post" action="includes/uploadID.php" enctype="multipart/form-data">

      Select image: <input type="file" name="fileName" />

      <input type="submit"  value="Upload ID Card" name="uploadForm"/>

      </form>

      <?php

      if(empty($_SESSION['IDCardImg'])){

      echo "<img width='500' height='400' src='img/Sample-ID.jpg' alt='Unknown user' ></img>";

      } else{

      // display user's profile picture

      echo "<img src=img/id/" . $_SESSION['username'] . "/" . $_SESSION['IDCardImg'];
       }

      ?>
    </p>
  </div>
  <h3>Birth Certifcate</h3>
  <div>
    <p>
    <!-- user can upload documents to the database -->
      <form method="post" action="includes/uploadBirthCert.php" enctype="multipart/form-data">

      Select image: <input type="file" name="fileName" />

      <input type="submit"  value="Upload Birth Certificate" name="uploadForm"/>

      </form>

      <?php

      if(empty($_SESSION['birthCertificateImg'])){

      echo "<img width='500' height='400' src='img/birthCertificate.jpg' alt='Unknown user' ></img>";

      } else{

      // display user's profile picture

      echo "<img src=img/birthCertificates/" . $_SESSION['username'] . "/" . $_SESSION['birthCertificateImg'];
       }

      ?>
    </p>
  </div>
    
  <h3>Form</h3>
  <div>
    <p>
    <!-- user can upload documents to the database -->
      <form method="post" action="includes/uploadForm.php" enctype="multipart/form-data">

      Select image: <input type="file" name="fileName" />

      <input type="submit"  value="Upload Form" name="uploadForm"/>

      </form>
    
      <?php

      if(empty($_SESSION['formImg'])){

      echo "<img width='500' height='400' src='img/form.jpg' alt='Unknown user' ></img>";

      } else{

      // display user's profile picture

      echo "<img src=img/form/" . $_SESSION['username'] . "/" . $_SESSION['formImg'];
       }

      ?>
    </p>
   
  </div>
  
</div>
    
		
		
    
</body>
</html>