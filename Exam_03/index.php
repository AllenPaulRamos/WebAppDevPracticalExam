<?php

function psquare($a){
// using sqrt to calculate the square root
    $b = (int)(sqrt($a));
    return($b * $b == $a);

}

function fib($c)
{
    //using the formula given to determine it is a fibonacci 
    return psquare(5 * $c * $c + 4) || psquare(5 * $c * $c - 4);

}

for($j = 1; $j<=10;$j++)
{
    if(fib($j))
    {
        echo $j." is a Fibonacci Number"."<br/>";
    }
    else{
        echo $j." is not a Fibonacci Number"."<br/>";
    }
}