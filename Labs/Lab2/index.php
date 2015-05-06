<?php

/*
 * To change this template use Tools | Templates.
 */

    function generateRandomSuit()
        {
        
        $suit = rand(1,4);

         switch ($suit){
            case 1: $folder = "clubs";
                break;
            case 2: $folder = "diamonds";
                break;
            case 3: $folder = "hearts";
                break;
            case 4: $folder = "spades";
                break;
             
            
    }
    
        return $folder;
        
    }
        
   
?>


<!DOCTYPE html>
<html>
<head>
    <title>Lab2: Multiplying Playing Cards
    <meta charset="utf-8" />
    </title>
    
     <style>
        .symbolStyle{
            font-size:6em;
        }
    </style>
    
</head>
<body>
    
    <?php

     do{
        $num1 = rand(1,10);
        $num2 = rand(1,10);
         
        $product = $num1 * $num2;
         
    }while( $product % 10 == 0);

    echo "<img src='img/cards/".generateRandomSuit()."/$num1.png'>";
    echo "<span class='symbolStyle'>*</span>";
   
    echo "<img src='img/cards/".generateRandomSuit()."/$num2.png'>";    
    echo "<span class='symbolStyle'> = </span>";
    
    $productStr = (string)$product;
    for ($i = 0; $i < strlen($productStr); $i++){
        echo "<img src='img/cards/".generateRandomSuit()."/" . productStr($i) . ".png'>";
    }
    
    

    
   


    ?>
    
    
    
    <footer>
        &copy; created by: Michael Sarmiento
    
    </footer>
    


</body>
</html>