<?php

$create = fopen("hello_there.php", "w+");

$string = "<?php\n";
fwrite($create, $string);

$string = "//this is a comment\n";
fwrite($create, $string);
echo $string;

$string = "\n";
fwrite($create, $string);
echo $string;

$string = "echo \"This is a test page!\";";
fwrite($create, $string);
$string = "\n";
fwrite($create, $string);

$string = "echo \"Exam number two!\";";
fwrite($create, $string);
$string = "\n";
\fwrite($create, $string);
echo $string;

$string = "\n";
fwrite($create, $string);
$string = "//this is the end a comment";
fwrite($create, $string);
echo $string;

fclose($create);

