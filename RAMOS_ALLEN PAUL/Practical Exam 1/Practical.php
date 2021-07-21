<?php

//LOOP 
//A. Sum of all even numbers 

$i = 0;
$sum = 0;
while($i <= 10){

   if($i % 2 == 0){

        echo "this is even number: ".$i."<br/>";
        $sum = $sum + $i;
   } 

    $i++;
}
echo "Sum of all even numbers: ".$sum;

echo "<br/>";
echo "<br/>";


//B. display all odd numbers 
$a = 0;
echo "this are the odd numbers from 0 to 10"."<br/>";
do{

    if($a % 2 != 0)
    {
        echo $a."<br/>";
    }

    $a++;
}while($a <= 10);

//C. Fib sequence


echo "<br/>";
echo "fibonacci series"."<br/>";

$first = 1;  
$second = 0;
for($i=0;$i<=10;$i++)
{
echo "$second,";

$fib=$first+$second; 
$first=$second;  
$second=$fib;  	

}


//ARRAYS
//A. Display the value that have the most number occurence
echo "<br/>";
echo "<br/>";
$names = array("Marvin","Marco","Marvin","Marco","Marco","Marvin","Christian");
$connames = array_count_values($names);
asort($connames);
print_r($connames);



//B. 
echo "<br/>";
echo "<br/>";
$numbers = array(9863,7127,2020,80,131,55,100);
asort($numbers);
print_r($numbers);

//C 
$colors = array("red","blue","black","red","blue","blue","red","gold");
$concolor = array_count_values($colors);
print_r($concolor);

$uninumbers = [];

foreach($concolor as $colors => $count)
{
    if($count === 1)
    {
        $uninumbers[] = $colors;
    }
}
print_r($uninumbers);




