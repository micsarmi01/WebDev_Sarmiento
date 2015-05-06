<?php

/*
 * To change this template use Tools | Templates.
 */

echo"  <br />Number of Passwords to generate: " . $_GET['number'];

$numberOfWords = $_GET['number'];
$lengthOfWords = 8; 
echo" $numberOfWords <br> ";
$character = $_GET['exclude'];
$ascii = ord($character);

echo $ascii;

for($i = 0; $i <= $numberOfWords; $i++ ){
    echo "<br>";
    
    for($z = 0; $z < $lengthOfWords; $z++ ){
        
        echo chr(rand(65,90));
        
    }
}
    
    

?>