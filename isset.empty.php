<?php 
$assarray=[
    "name" => "Zin Zon",
    "email" => "zinzon@gamil.com",
    "phone" => "98347597"
];
//isset() => check values
var_dump(isset($assarray["address"]));
echo "<br>";

//empty() => check value // reverse to isset
var_dump(empty($assarray["phone"]));
echo "<br>";
//!isset=empty //!empty=isset

if(isset($assarray["phone"])){
    $userph=$assarray["phone"];
}else{
    $userph=null;
}
echo $userph;
echo "<br>";

?>