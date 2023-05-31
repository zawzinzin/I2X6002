<?php
//indexed array
$fruits=["Apple","Mango","Banana","Orange","Grape"];
//sort(array)//ascending order
sort($fruits);//['apple','banana','grape',mago','orange']
//var_dump($fruits);                       
for($i=0; $i<count($fruits);$i++){
    echo $fruits[$i]."<br>";
}

echo "<br>";
echo $fruits[3]; //mango
echo "<br>";
//rsort(array) //descending order
rsort($fruits); //['orange,mango,grape,banana, apple]
var_dump($fruits);
echo "<br>";
echo $fruits[3]; //grape
echo "<br>";

//aspcoatove arrau
//ass_array_order /// integer capitalletter smallletter
$user=[
    'name'=> "Kaung Sat",
    "age" => 23,
    "job" => "develoer"
];
//asort(array)//ascending value order
asort($user);
echo "<pre>";
var_dump($user);
echo "<br>";

//arsort(array) //descending value order
arsort($user);
var_dump($user);
echo "<br>";

//ksort(array) //ascending key order
ksort($user);
var_dump($user);
echo "<br>";

//krsort(array) //descending key order
krsort($user);
var_dump($user);
echo "<br>";


?>