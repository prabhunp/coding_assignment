<?php
    $number = !empty($_GET['n'])?$_GET['n']:98565;
    echo "Given Number : $number";
    echo "\n <br>"; 
    $rev_number = 0;  
    while ($number > 1) {  
        $remainder = $number % 10;  
        $rev_number = ($rev_number * 10) + $remainder;  
        $number = ($number / 10);   
    }  
    echo "Reverse number is: $rev_number"; 

?>
