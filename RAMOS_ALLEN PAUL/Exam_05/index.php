<?php

function reversestring($String){
    //using strrev a built in function of php for reversing the string 
return strrev($String);

}

$String = "Car"; // string that will be reverse
echo reversestring($String); // calling the name of the function created above to execute the return statement
