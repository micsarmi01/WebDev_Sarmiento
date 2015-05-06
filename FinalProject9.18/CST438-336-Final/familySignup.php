<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.html");
}



?>

<!DOCTYPE html>
<html>
<head>
	<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
    <meta name="viewport" content="width=device-width">
	<link rel="stylesheet" type="text/css" href="css/style.css">
      <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
      <!--add this to every page as well for parse DB*/-->
      <script type="text/javascript" src="http://www.parsecdn.com/js/parse-1.4.2.min.js"></script>
    
    <title>DoD Beneficiary Sign Up Page</title>
</head>
<body>
	<header>
        <nav>
        <a  id="navlinks" href="dashboard.php"><img src="img/dashboard.png" width="35" height="35"></a>
		<a  id="navlinks" href="familySignup.php"> &nbsp; Add a Family Member&nbsp; </a>
		<a  id="navlinks" href="family.php"> &nbsp;Family Page&nbsp; </a>
		<a  id="navlinks" href="profile.php"> &nbsp;Profile&nbsp; </a>
        <a  id="logout" href="includes/logout.php"> (Logout: <?=$_SESSION['username']?>) &nbsp;  </a>
		</nav>
      <h1>DOD Beneficiary Web Add a Family Member</h1>
    </header>
	<div id="user-info">
        Signed in as: <?=$_SESSION['username']?> (<a href="includes/logout.php" class="log-out">Log out</a>)<br><br>
      </div><br>
     <div style="display:none" class="error">
      Looks like there was a problem saving the object. Make sure you've set your application ID and javascript key correctly in the call to <code>Parse.initialize</code> in this file.
    </div>

    <div style="display:none" class="success">
      <p>We've just created a new user</p>
      
        
      </div>
    
    <div id="fieldsetDiv">
    	<form action="includes/familySignupProcess.php" method="post">
    		
			
            First Name: <input type="text" name="firstname" id="firstname"> <span id="firstNameError"></span><br />
            Last Name: <input type="text" name="lastname" id="lastname"> <span id="lastNameError"></span><br />
            Gender: <select name="gender" id="gender">
                    <option value="M">Male</option>
                    <option value="F">Female</option>
                    </select> <span id="genderError"></span><br />
            Date of Birth: <input type="date" name="dob" id="dob"> <span id="dobError"></span><br />
        
    		<input type="submit" value="Add Family Member" id="familySignUp"> <br />
        </form>
    </div> 
    
   
		
	<footer>
    	<p>&copy; Copyright  by Nickolas Zarzosa, Alex Lamont, Michael Goita-Sarmiento</p>
    </footer>
    

</body>
</html>