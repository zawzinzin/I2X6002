<?php 
//indexed array built in function
$fruits=["Apple","Mango","Banana","Orange","Grape"];
 //count()//array length
 echo count($fruits);
 echo "<br>";

 //current()//first indexed room
 echo current($fruits); //Apple
 echo "<br>";


 //end() //last indexed room
 echo end($fruits);
 echo "<br>";


 //array_rand() //random indexed number
 echo array_rand($fruits); // 0 -> 4
 echo "<br>";
 echo $fruits[array_rand($fruits)]; //$fruits(rand indexed number)
 echo "<br>";

//in_array(value,array) //whetner value is in array or not // boolean
 //echo in_array("Apple",$frutis);
 echo "<br>";

 var_dump(in_array("Apple",$fruits));
 echo "<br>";

 //array_aum(array) //sum all integers in array
 $numbers=[23,100,16,34,"Hello","Mello"];
 echo array_sum($numbers);
 echo "<br>";

//range (start,end) //build an array start to end
$indexedarr=range(10,20);
echo "<pre>";
var_dump($indexedarr);
echo "<br>";
print_r($indexedarr);
echo "<br>";


//associative array
$users=[
    'name'=> "Kaung Sat",
    "age" => 23,
    "job" => "develoer"
];
//array_key(aarray)//show all keys in aso array
var_dump(array_keys($users)); //['name','age','job']
echo "<br>";

//array_value(array)
var_dump(array_values($users));//['kanun sat',23,'deevloper]
echo "<br>";

//array_key_exists("key",array) //key is inside array yor not //boolean
var_dump(array_key_exists("name",$users)); //bool(true)
echo "<br>";

//shuffle()//shuffle row in associative array
shuffle($users);
var_dump($users); //change data a tuall
echo "<br>";


?>