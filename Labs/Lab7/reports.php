<?php
session_start();

if (!isset($_SESSION['username'])){  //validates whether user has logged in
    header("Location: login.php");
}


 function getColleges(){
     
    require 'dbConnection.php';
    $dbConn = getConnection();
    
    $sql = "SELECT collegeId, collegeName FROM college";
    $stmt = $dbConn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll();    
    return $result;
 }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">

  <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame 
       Remove this if you use the .htaccess -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>reports</title>
  <meta name="description" content="">
  <meta name="author" content="lara4594">

  <meta name="viewport" content="width=device-width; initial-scale=1.0">

  <!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
  <link rel="shortcut icon" href="/favicon.ico">
  <link rel="apple-touch-icon" href="/apple-touch-icon.png">
  <script>
      
      function confirmDelete(collegeName) {
          //alert("It's working");
      /*    var remove = confirm("Do you really want to delete it?");
          if (remove) {
              return true;
          } else {
              return false;
          }
      */    
          return confirm("Do you really want to delete " + collegeName + "?");
          
      }
      
  </script>
</head>

<body>
  <div>
    <header>
      <h1>Soccer Cup - Admin Section</h1>
    </header>

    <div>

        <strong> Welcome <?=$_SESSION['adminName']?>!</strong>
        
        <form action="logout.php">
            <input type="submit" value="Logout!">
        </form>

        <h2> Update/Delete College Info</h2>
      
        <table border='1'>
        <?php
        
        $colleges = getColleges();
        
        foreach ($colleges as $college) {
            echo "<tr>";
            echo "<td>" . $college['collegeName'] . "</td>";
        ?>    
            <td>
                <form action="updateCollege.php" method="post">
                  <input type="hidden"    name="collegeId" value="<?=$college['collegeId']?>"/>
                  <input type="submit" value="Update" name="updateForm" />
                </form>
            </td>
            <td>
                <form onsubmit="return confirmDelete('<?=$college['collegeName']?>')">
                  <input type="hidden"    name="collegeId" value="<?=$college['collegeId']?>"/>                    
                  <input type="submit" value="Delete" name="deleteForm" />
                </form>
            </td>
            
            
         <?php        
            echo "</tr>";
        } //foreach ends
        
        ?>
        </table>
        
   

      
    </div>

    <footer>
     <p>&copy; Copyright  by lara4594</p>
    </footer>
  </div>
</body>
</html><?php

/*
 * To change this template use Tools | Templates.
 */
?>