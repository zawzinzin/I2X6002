<?php 
//while loop
//while(condition){
//    statement;
//}
$num=1;
while($num <= 10){
    echo $num;
    echo "<br>";
    $num++;
}
echo "<br>";
//do while
//do{
//    statement;
//}while(condition)
$num=1;
do{
    echo $num . "<br>";
    $num++;
}while($num<=10);
echo "<br>";

//for
//for(declare; condition; increment or decrement){
//    statement;
//}
$fruits = ["Apple","Orange","Banana","Mango"];
//echo count($fruits);
for($i=0; $i<count($fruits); $i++){
    echo "This is ".$fruits[$i]."<br>";
}
echo "<br>";
// while(count($fruits)>=0)){
//     echo "This is ".$fruits[$j]."<br>";
//     count($fruits)--;
// }
for($i=count($fruits)-1; $i >= 0; $i--){
    echo "This is ".$fruits[$i]."<br>";
}
echo "<br>";

//for each loop
// foreach(array as parameter){
//     statement;
// }
$userdata=[
    ['name'=>'Kaung Sat','job'=>'developer'],
    ['name'=>'Aung Aung','job'=>'desinger'],
    ['name'=>'Hla Hla','job'=>'teacher']
];
//foreach (array, index number)
//key
foreach($userdata as $user){
    echo $user['name']." is a ";
    echo $user['job'];
    echo "<br>";
}
//road map for security enginner
//web development background gi ya 
//networking
//system ေတအကြောငါးလေ့လာ 

?>