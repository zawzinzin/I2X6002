<!-- <?php
//expire date
function expirdate(int$day){
    $exda=$day+5;
    echo "Expire date is ".$exda;
}
expirdate(5);
echo"<br>";

function admin($name,$job){
    echo "My name is $name and I am $job.";
}
admin("Zin Zin","admin");
echo"<br>";

function sum($val,$a=10){
    $result= $val+5;
    return $result+$a;
}
echo sum(5);
echo"<br>";

function job($jo="developer"){
    echo "My job is ".$jo."<br>";
}
job();
job("full stack developer");
?> -->
<?php 
$cars=['volov','BMW','Toyota'];
$numbers=[1,2,3,4,5];
$array=['BMW',123,21.5,true];
echo $cars;
echo "<br>";
var_dump ($cars);
echo "<br>";

//arrray ko print htoe chin yin var_dump nae htote ya tal
//array ta kue lone ko htote chin yin var_dump and array htae ka index ko htote chin yin echo nae tone loe ya
//Indexed Arrays
$even=[2,4,6,8];
var_dump($even);
echo "<br>";
var_dump($even[1]);
echo "<br>";
echo $even[1];
echo "<br>";

$data=['Aung Aung','Mg Mg',24,50,true];
echo $data[1];//Mg Mg
echo "<br>";
//echo = data type ko string pyaung pee kyie
echo $data[4];
echo "<br>";
var_dump($data[4]);
echo "<br>";
$data[0]="Mya Mya";
var_dump($data);
echo "<br>";
print_r($data);
echo "<br>";
//print($data);
$data[]="Hla Hla";
print_r($data);
echo "<br>";
$data[7]=100;
print_r($data);
echo "<br>";
echo count($data);
echo "<br>";
echo count($cars);
echo "<br>";


//Assoicative Array => not with index numbers but with keys=>value
$age=[
    "Peter"=>23,
    "Harry"=>24,
    "Joe" => 21,
    "Nick"=>22
];
echo $age["Peter"]."<br>";
echo $age["Joe"]."<br>";
echo $age["Harry"]."<br>";
$info=[
    "name"=>"Mg Mg",
    "age"=>23,
    "address"=>'Natmauk',
    "phnum"=>805903455
];
print_r($info);
echo "<br>";
echo $info[1];


$users=[
    "Peter" => [
        "age" => 23,
        "gender" => "male",
        "job" => "designer"
    ],
    "Harry" => [
        "age" => 25,
        "gender" => "male",
        "job" => "developer"
    ],
    "Nick" => [
        "age" => 23,
        "gender" => "female",
        "job" => "fullstack"
    ]
    ];
var_dump($users);
echo "<br>";
var_dump($users["Peter"]);
echo "<br>";
var_dump($users["Harry"]["job"]);
?>