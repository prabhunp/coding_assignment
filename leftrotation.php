
<?php  
    function leftRotatebyOne(&$array, $number) { 
        $temporary = $array[0]; 
        for ($i = 0; $i < $number - 1; $i++) 
            $array[$i] = $array[$i + 1];       
            $array[$i] = $temporary; 
    } 
      
    function leftRotate(&$array, $decimal, $number) { 
        for ($i = 0; $i < $decimal; $i++) 
            leftRotatebyOne($array, $number); 
    } 
      
    function printArray(&$array, $number) { 
        for ($i = 0; $i < $number; $i++) 
            echo $array[$i] . " "; 
    } 
      
    $array = array( 1, 2, 3, 4, 5 ); 
    echo "Given array:";
    echo "\n";
    echo '<pre>';print_r($array);
    $number = sizeof($array);       
    leftRotate($array, 2, $number); 
    printArray($array, $number); 
          
?> 