<?php

require '../../dbConnection.php';
$dbConn = getConnection();

function getCollege() {
    global $dbConn;
    $sql = "SELECT * FROM cup_college WHERE collegeId = :collegeId";
    $namedParameters = array();
    $namedParameters[":collegeId"] = $_POST['collegeId'];
    $stmt = $dbConn->prepare($sql);
    $stmt->execute($namedParameters);
    return $stmt->fetch();
}

if (isset ($_POST['saveForm'])) {  //checking if we have submitted the "save" form

    $sql = "UPDATE college
            SET collegeName = :collegeName,
                       city = :city,
                     street = :street,
                        zip = :zip,
                phoneNumber = :phone
            WHERE collegeId = :collegeId";
    $namedParameters = array();
    $namedParameters[":collegeName"] = $_POST['collegeName'];
    $namedParameters[":city"] = $_POST['city'];
    $namedParameters[":street"] = $_POST['street'];
    $namedParameters[":zip"] = $_POST['zip'];
    $namedParameters[":phone"] = $_POST['phone'];
    $namedParameters[":collegeId"] = $_POST['collegeId'];                
    $stmt = $dbConn->prepare($sql);
    $stmt->execute($namedParameters);    
    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">

  <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame 
       Remove this if you use the .htaccess -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>updateCollege</title>
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
      <h1>Updating College Info</h1>
    </header>
 
    <div>
        
        College Id: <?=$_POST['collegeId']?>
        
        <?php
        
        if (isset($_POST['collegeId'])) {
            
            $college = getCollege();
            //print_r($college);
        }
        
        ?>
        
        <form method="post">
            College Name: <input type="text" name="collegeName"  value="<?=$college['collegeName']?>" /><br /><br />
            Street: <input type="text" name="street"  value="<?=$college['street']?>" /> <br /><br />
            City: <input type="text" name="city" value="<?=$college['city']?>" />  <br /><br />
            Zip Code: <input type="text" name="zip"  value="<?=$college['zip']?>" /> <br /><br />
            Phone Number: <input type="text" name="phone"  value="<?=$college['phoneNumber']?>" /> <br /><br />
            <input type="hidden" name="collegeId" value="<?=$college['collegeId']?>" />
            <input type="submit" value="Save Info!" name="saveForm" />
        </form>
        
        
      
    </div>

    <footer>
     <p>&copy; Copyright  by lara4594</p>
    </footer>
  </div>
</body>
</html>