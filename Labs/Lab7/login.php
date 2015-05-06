<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">

  <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame 
       Remove this if you use the .htaccess -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>Lab 7: Fist Name, Last Name</title>
  <meta name="description" content="">
  <meta name="author" content="lara4594">

  <meta name="viewport" content="width=device-width; initial-scale=1.0">

  <!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
  <link rel="shortcut icon" href="/favicon.ico">
  <link rel="apple-touch-icon" href="/apple-touch-icon.png">
</head>

<body>
  <div>
    <header>
      <h1>Monterey Soccer Cup</h1>
      <h3>Admin Section</h3>
      
    </header>

    <div>

      <form method="post" action="loginProcess.php">
          
           Username:  <input type="text" name="username" placeholder="Enter your username"/><br /><br />
           Password:  <input type="password" name="password" placeholder="Enter your password"/><br /><br />
          
           <input type="submit" value="Login!" name="loginForm">
           (admin, s3cr3t)
      </form>

      <h2 style="color:red">
      <?php
        if (isset($_GET['error'])) {
                echo $_GET['error'];
        }
      ?>
      </h2>
      
    </div>

  </div>
</body>
</html>