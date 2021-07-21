<?php
// using built in function strtotime to insert format Year,months,days and even time we want
$date1 = strtotime("2019-05-31");
$date2 = strtotime("2018-04-05");

//getting the difference between 2 date
$diffdate = abs($date1 - $date2);

//getting the years by dividing the result of date in total seconds of a year
$diffyears = floor($diffdate / (365*60*60*24));

//getting the month by subtracting it to yeas and divide the result date to total seconds of a month
$diffmonths = floor(($diffdate - $diffyears * 365*60*60*24) / (30*60*60*24));

//getting the days by subtrating the years and result of date and divide the result in total seconds of days
$diffdays = floor(($diffdate - $diffyears * 365*60*60*24 - $diffmonths*30*60*60*24)/(60*60*24));


echo $diffyears." Year, ".$diffmonths." Month, ".$diffdays." Days";

