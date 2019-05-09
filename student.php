<?php
$students = ['student1'=>['subject1'=>40, 'subject2'=>65, 'subject3'=>20],'student2'=>['subject1'=>40, 'subject2'=>50, 'subject3'=>35],'student3'=>['subject1'=>55, 'subject2'=>65, 'subject3'=>10]];
print_r("<br><br>Given Input:");
print "<pre>";
print_r($students);

foreach ($students as $key=>$value) {
    arsort($students[$key]);
}

$resultAr  = array();
$subject = !empty($_GET['n'])?$_GET['n']:2;
    foreach ($students as $key1=>$value1) {
            $i=0;
        foreach($value1 as $key2=>$value2){    
            $resultAr[$key1]    =   $resultAr[$key1] + $students[$key1][$key2];
            $i=$i+1;
            if ($i == $subject) break;
        } 
    
}

arsort($resultAr);
$i =1;
foreach($resultAr as $key => $value){
    echo "Student $i:".$key."<br>Highest $subject Subject <br>";
    $k=0;
    foreach($students[$key] as $key1 => $value1){
        echo  $key1 .":". $value1."<br>";
        $k = $k+1;
        if ($k == $subject) break;
    }    
    echo "<br><br>";
     if ($i == $subject) break;
             $i=$i+1;

}


?>