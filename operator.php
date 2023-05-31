<?php
//Arithmetic operators

//comparison operators (==, ===, !=, >, <, >=, >=)
//==ka value ko sit
$x=100;
$y=100;
var_dump($x==$y);//boolean(true)
echo $x==$y;//1
///===ka value ko lae sit tal datatype ko lae sit tal
$x=100;
$y=100;
var_dump($x===$y);//
$x=100;
$y="100";
var_dump($x==$y);//boolean(true)
echo $x==$y;//1
///===ka value ko lae sit tal datatype ko lae sit tal
$x=100;
$y='100';
var_dump($x===$y);//bool (false)


?>