

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>DOD Beneficiary ADMIN Login</title>
  <meta name="description" content="">
  <meta name="author" content="">

  <meta name="viewport" content="width=device-width; initial-scale=1.0">
	
  <link rel="shortcut icon" href="/favicon.ico">
  <link rel="apple-touch-icon" href="/apple-touch-icon.png">

</head>

<body>
  <div>
    <header>
          <nav>
        <a  id="navlinks" href="Index.html"><img src="img/home.png" width="35" height="35"></a>
		<a  id="navlinks" href="signup.html"> &nbsp; Sign Up&nbsp; </a>
		<a  id="navlinks" href="login.html"> &nbsp;Log In&nbsp; </a>
		</nav>
        <br><br>
      <h1>DOD Beneficiary ADMIN Web Site Login</h1>
    </header>
    
    <div id="fieldsetDivAdmin">
    	<form action="includes/loginAdminProcess.php" method="post">
    		<div id="field">
                Username: <input type="text" name="username" id="username"> <span id="usernameError"></span> <br /></div>
            <div id="field"> Password: <input type="password" name="password" id="password"> <span id="passwordError"></span> <br /></div>
    		<input type="submit" value="Login!" name="loginForm"/>
        </form>
        
         adminUser/adminUser
      </div>
	<footer>
    	<p>&copy; Copyright  by Nickolas Zarzosa, Alex Lamont, Michael Goitia-Sarmiento</p>
    </footer>
    </div>
	  
  </div>
</body>
</html>