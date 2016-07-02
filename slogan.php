<?php
$f_contents = file("slogans.txt");
$slogan = $f_contents[array_rand($f_contents)];
echo $slogan;
?>