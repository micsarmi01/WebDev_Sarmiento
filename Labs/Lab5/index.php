<!--
To change this template use Tools | Templates.
-->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html><html>

<head>
    <title></title>
</head>
<body>
    <h1> Login Screen </h1>
    
    <form action="login.php" method="post">
        
        Username: <input type="text" name="username"> <br />
        Password: <input type="password" name="password"> <br />
        <input type="submit" value="Login!" name="loginForm" />
        
        
    </form>
    
    <h3 style="color:red">
    <?php
  
      if (isset($_GET['error'])) {
          
          echo $_GET['error'];
          
      }

    ?>
    </h3>



</body>
</html>