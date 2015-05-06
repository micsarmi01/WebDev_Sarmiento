<?php
session_start();
if (!isset($_SESSION['username'])){
    header("Location: index.php");
}

 if (isset($_GET['collegeId'])){
     
     $collegeId = $_GET['collegeId'];
     require 'dbConnection.php';
     $dbConn = getConnection();
     
     $sql = "SELECT * FROM college WHERE collegeId = :collegeId";
     $stmt = $dbConn -> prepare($sql);
     $stmt->execute(array(":collegeId"=>$collegeId));
     $result = $stmt->fetch();
     
 }

 if (isset($_POST['updateForm'])) {  //the update form has been submitted
     
     $sql = "UPDATE college
             SET collegeName = :collegeName,
                    email = :email,
                    phone = :phone,
                    street = :street,
                    city = :city,
                    zip = :zip
             WHERE collegeId = :collegeId";
      $namedParameters = array();
      $namedParameters[":collegeName"] = $_POST['collegeName'];
      $namedParameters[":email"] = $_POST['email'];
      $namedParameters[":phone"] = $_POST['phone'];     
      $namedParameters[":street"] = $_POST['street'];     
      $namedParameters[":city"] = $_POST['city'];     
      $namedParameters[":zip"] = $_POST['zip'];     
      $namedParameters[":collegeId"] = $_POST['collegeId'];   
      $stmt = $dbConn -> prepare($sql);
      $stmt->execute($namedParameters);
      echo "Record has been updated!";
 }



?>
<a href="reports.php">Go Back to Reports</a><br /> <br>

<form method="post">
    
    College Name: <input type="text" name="collegeName" value="<?=$result['collegeName']?>"> <br />
    email <input type="text" name="email" value="<?=$result['email']?>"><br />
    Phone <input type="text" name="phone" value="<?=$result['phone']?>"><br />
    Street: <input type="text" name="street" value="<?=$result['street']?>"><br />
    City: <input type="text" name="city" value="<?=$result['city']?>"><br />
    Zip Code: <input type="text" name="zip" value="<?=$result['zip']?>"><br />
    <input type="hidden" name="collegeId" value="<?=$result['collegeId']?>"> 
       <br>
    <input type="submit" name="updateForm" value="Update!">
    
</form>