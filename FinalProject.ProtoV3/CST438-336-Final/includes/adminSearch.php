<?php 
session_start(); 
    require 'dbConnection.php'; 
    if(isset($_POST['search'])) { 
     
    
     
    $dbConn = getConnection(); 
     
    $sql = "SELECT * FROM users
            WHERE username = :username"; 
             
    $namedParameters = array();         
    $namedParameters[":username"]  = $_POST['username']; 
    
     
    $stmt = $dbConn->prepare($sql); 
    $stmt->execute($namedParameters); 
    $result = $stmt->fetch(); 
     
    if (empty($result)) { 
        
        header("Location: adminDashboard.php?error='no entries'"); 
    } else { 
         
        
         $foundUsername = $result["username"];
          
    }  
    
   
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>DoD Beneficiary ADMIN Dashboard</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    
       <nav>
        <a  id="navlinks" href="../adminDashboard.php"><img src="../img/dashboard.png" width="35" height="35"></a>
		<a  id="navlinks" href="../Index.html"> &nbsp; Home Page &nbsp; </a>
        <a  id="logout" href="logout.php"> (Logout: <?=$_SESSION['usernameAdmin']?>) &nbsp;  </a>
		</nav>
      
</head>
<body>
    
       <br><br>
	<h1> ADMIN Dashboard </h1> 
    Username: <?=$foundUsername?>
 	
		


    
</body>
</html>