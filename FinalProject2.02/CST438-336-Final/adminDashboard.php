<?php

session_start();



if(!isset($_SESSION['usernameAdmin'])){

header("Location: adminLogin.php");

}


?>

<!DOCTYPE html>
<html>
<head>
    <title>DoD Beneficiary ADMIN Dashboard</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    
   <script>
      $(function() {
        $( "#accordion" ).accordion({
      heightStyle: "content"
        });
      });
      </script>
    
        <nav>
        <a  id="navlinks" href="dashboard.php"><img src="img/dashboard.png" width="35" height="35"></a>
		<a  id="navlinks" href="Index.html"> &nbsp; Home Page &nbsp; </a>
        <a  id="logout" href="includes/logout.php"> (Logout: <?=$_SESSION['usernameAdmin']?>) &nbsp;  </a>
		</nav>
          
      
</head>
<body>
    
       <br><br>
	<h1> ADMIN Dashboard </h1> 
    
    <img src="img/todo.png">
    
	

 
<div id="accordion">
    <h3>Welcome <?=$_SESSION['name']?>!</h3>
  <div>
    <p>
    Administrate:
    </p>
  </div>
  <h3>ADD Users</h3>
  <div>
    <p>
    <div id="familyForm">
    	<form action="includes/signup.php" method="post">
            <h5>Add User</h5>
    		Username: <input type="text" name="username" id="username"> <span id="usernameError"></span> <br />
    		Password: <input type="password" name="password" id="password"> <span id="passwordError"></span> <br />
			Re-Type Password: <input type="password" id="password2"> <span id="passwordError2"></span> <br />
            Email: <input type="email" name="email" id="email"> <span id="emailError"></span><br />
            First Name: <input type="text" name="firstname" id="firstName"> <span id="firstNameError"></span><br />
            Last Name: <input type="text" name="lastname" id="lastName"> <span id="lastNameError"></span><br />
            Gender: <select name="gender" id="gender">
                    <option value="M">Male</option>
                    <option value="F">Female</option>
                    </select> <span id="genderError"></span><br />
            Phone Number: <input type="text" name="phone" id="phone"> <span id="phoneError"></span><br />
            Pay Grade: <input type="text" name="pay" id="pay"> <span id="payGradeError"></span><br />
            Date of Birth: <input type="date" name="dob" id="dob"> <span id="dobError"></span><br />
            Date of Last Deployment: <input type="date" name="lastDeployment" id="lastDeployment"> <span id="deploymentError"></span><br />
            
    		<input type="submit" value="Sign Up!" id="signUp"> <br />
       </form>
    </div> 
    </p>
  </div>
  <h3>Delete Users</h3>
  <div>
    <p>
    Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum sit amet
    purus. Vivamus hendrerit, dolor at aliquet laoreet, mauris turpis porttitor
    velit, faucibus interdum tellus libero ac justo. Vivamus non quam. In
    suscipit faucibus urna.
    </p>
  </div>
  <h3>Edit Users</h3>
  <div>
    <p>
    Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis.
    Phasellus pellentesque purus in massa. Aenean in pede. Phasellus ac libero
    ac tellus pellentesque semper. Sed ac felis. Sed commodo, magna quis
    lacinia ornare, quam ante aliquam nisi, eu iaculis leo purus venenatis dui.
    </p>
    <ul>
      <li>List item one</li>
      <li>List item two</li>
      <li>List item three</li>
    </ul>
  </div>
  <h3>Reports</h3>
  <div>
    <p>
    Cras dictum. Pellentesque habitant morbi tristique senectus et netus
    et malesuada fames ac turpis egestas. Vestibulum ante ipsum primis in
    faucibus orci luctus et ultrices posuere cubilia Curae; Aenean lacinia
    mauris vel est.
    </p>
    <p>
    Suspendisse eu nisl. Nullam ut libero. Integer dignissim consequat lectus.
    Class aptent taciti sociosqu ad litora torquent per conubia nostra, per
    inceptos himenaeos.
    </p>
  </div>
</div>
 	
		


    
</body>
</html>