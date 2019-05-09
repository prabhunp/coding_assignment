<?php    
    $string = !empty($_GET['string'])?$_GET['string']:'Malayalam';
    echo "Example String : $string";
    echo "\n<br>";
    
    $isPalindrome = true;
    $length = strlen($string);
    $middle = $length/2;
    for ($i = 0; $i <$middle; $i++) {
        if (strtolower($string[$i]) != strtolower($string[$length - $i - 1])) {
            $isPalindrome = false;
            break;
        }
    }
    if ($isPalindrome) {
        echo  $string .' is palindrome';
    } else {
        echo  $string . ' is not palindrome';
    }     
?>