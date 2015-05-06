<?php
session_start();  // Starts a new session or resumes an existing one
   require 'dbConnection.php';
   $dbConn = getConnection(); 

function getColleges(){
   global $dbConn;
   $sql = "SELECT collegeId, collegeName FROM college";
   $stmt = $dbConn -> prepare($sql);
   $stmt->execute();
   return $stmt->fetchAll(); 
}

if (!isset($_SESSION['username'])) {   //checks whether the user has logged in
    header("Location: login.html");
}


if (isset ($_GET['deleteForm'])){  //checking whether we have clicked on the "Delete" button
    
    echo " Deleting record...";
    $sql = "DELETE FROM college 
             WHERE collegeId = :collegeId";    
    $namedParameters = array();
    $namedParameters[':collegeId'] = $_GET['collegeId'];
    $stmt = $dbConn -> prepare($sql);
 // $stmt->execute($namedParameters);
    
}

   echo "Welcome " . $_SESSION['adminName'];

?>

<html>
    <head>
        <title></title>

     <script>
         
         function confirmDelete(){
             
             //alert("hi"); //for testing purposes
             
             var deleteRecord = confirm("Do you want to delete it?");
             if (!deleteRecord) {
                 return false;
             } else {
                 return true;
             }
             
             
         }
        
     </script>
    
    </head>
    <body>
            

            <br>
            High confidential information!
            <br><br>

            <form action="logout.php">
              <input type="submit" value="Logout!" name="logout">    
            </form>

            <h2>Update/Delete Colleges:</h2>



            <table border='1'>

            <?php

             $colleges = getColleges();
             foreach ($colleges as $college) {
                 echo "<tr>";
                 echo "<td>" . $college['collegeName'] . "</td>";
             ?>  <td>
                     <form action="updateCollege.php">
                         <input type="hidden" name="collegeId" value="<?=$college['collegeId']?>" />    
                         <input type="submit" value="Update" name="updateForm"/>
                     </form>   
                </td> 
                <td>
                     <form onsubmit="return confirmDelete()">
                         <input type="hidden" name="collegeId" value="<?=$college['collegeId']?>" />    
                         <input type="submit" value="Delete" name="deleteForm"/>
                     </form>   
                </td>
               </tr>

             <?php    
               } //closes foreach

             ?>

            </table>

        
        </body>
    </head>
</html>
        