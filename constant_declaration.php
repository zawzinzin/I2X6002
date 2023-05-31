<?php
//define(name, value) in front, $name="mg mg"
define("Name","kaung Sat");
echo Name;
echo "<br>";

define("name","aung aung");
echo name;
echo "<br>";

$name="mg my";
echo $name;
echo "<br>";
$name="su su";
echo $name;
echo "<br>";

//constants are global
define("fruit","papaya");
function display(){
    echo "My favourite fruit is ".fruit;
}
display();
?>