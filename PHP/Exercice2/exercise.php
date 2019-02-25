<?php
$password;
$salt;

$saltedPassword = '';



//$middlePassword = floor(strlen($password)/2);
//$saltedPassword = substr($password,0,$middlePassword) . $salt . substr($password,$middlePassword, strlen($password));

$firstPart = substr($password,0, floor(strlen($password)/2)+(strlen($password)%2));
$secondPart = substr($password,ceil(strlen($password)/2));

$saltedPassword = $firstPart . $salt . $secondPart;

echo $saltedPassword;