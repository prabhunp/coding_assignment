<?php
echo "A list of students and their marks in three subjects are given in the respective order.
Example";
echo "\n";

echo "Student1 20 40 65";echo "\n";
echo "Student2 35 40 50";echo "\n";
echo "Student3 10 55 65"; echo "Given n = 2";echo "\n";
echo "Find the name of the students who has got top marks in atleast n subjects.";
echo "Output for the above example -student1 -student3";
echo "since they got top marks in atleast 2 subjects";


$students = ['student1'=>['subject1'=>40, 'subject2'=>65, 'subject3'=>20],'student2'=>['subject1'=>40, 'subject2'=>50, 'subject3'=>35],'student3'=>['subject1'=>55, 'subject2'=>65, 'subject3'=>10]];
print_r("<br><br>Given Input:");
print "<pre>";
print_r($students);

foreach ($students as $key=>$value) {
    arsort($students[$key]);
}

$resultAr  = array();
$subject = $_GET['n'];
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