<?php

/* 
1.Declare the array 
2.Loop each values inside of the array
3.First we will check array length should be less then or equal to 5
4.Second thing we will check array's each value should be less then or equal to 10
5.Third step is compare the value to the other values
6.Swap the values by descending order
*/


$array=[10,4,5,8,7];
$result=[];
for ($i=0; $i <count($array); $i++) { 

    if($array[$i]>$array[$i+1])
    {
        array_push($result,$array[$i]);
        print_r($result);
    }
    else
    {
        $array[$i]=$array[$i+1];
        $array[$i+1]=$array[$i];
    }
}   

print_r($result);


?> 