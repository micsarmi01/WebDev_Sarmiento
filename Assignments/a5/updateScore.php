<?php
require 'dbConnection.php';
$dbConn = getConnection();

function() {
    
    
    //update user wher username = username
    
    //stmnts
   
     $sql = "UPDATE user 
            SET runningScore = :lastScore
            WHERE userName = mike123 ";
        
      $namedParameters = array();
      //last score 
      $namedParameters[":lastScore"] = $_POST['lastScore'];
      //username
      $namedParameters[":userName"] = $_POST['userName];  
    
      $stmt = $dbConn -> prepare($sql);
      $stmt->execute($namedParameters);
    
      echo "Record has been updated!;
}

/*if (isset ($_POST['saveForm'])) {  //checking if we have submitted the "save" form

    $sql = "UPDATE cup_college 
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
*/
?>