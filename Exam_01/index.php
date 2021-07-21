<?php

function Palindrome($String){
     
    if ((strlen($String) == 1) || (strlen($String) == 0))
    {
        echo "It is a Palindrome";
    }
 
    else
    {
        //comparing to the first letter
        //using strtolower allows the string inputted in lowercases
        //preventing error even the string inputted is a palindrome
        if (strtolower(substr($String,0,1)) == (strtolower(substr($String,(strlen($String) - 1),1))))
        {
             
            //checked letters
            return Palindrome(strtolower(substr($String,1,strlen($String) -2)));
        }
        else{
            echo " It is Not a Palindrome"; }
    }
}
 
$String = "dad";
Palindrome($String);
?> 
