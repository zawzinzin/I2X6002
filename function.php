<!-- //function declaration
//function funtionName(){
    condition
} -->
<?php
//user define function

function writemsg(){
    echo "Hello Mello";
}
writemsg();//call the function
echo "<br>";

function greeting(){
    $name="Aung Aung";
    echo "Hi, I am " . $name;
}
greeting();
echo "<br>";


function sum(){
    $val1=25;
    $val2=50;
    $result=$val1+$val2;
    echo $result;
}
sum();
echo "<br>";
writemsg();
echo "<br>";
greeting();
echo "<br>";
echo "<br>";


//argument function
function username($name){
    echo $name." is my friend.<br>";
}
username("Aung Aung");//Aung Aung is my friend
username("HlA hLA");
username("John");
function user($username,$age){
    echo "My name is ".$username." and I am ".$age." years old.";
}
user("Mg Mg",25);
echo "<br>";

function multiply($num1,$num2){
    $result = $num1*$num2;
    echo $result;
}
multiply(5,10);
echo "<br>";//50
echo "<br>";

//type function//return pyan pay tae function ko type function lo khaw tal
function addnum($a,$b){
    return $a+$b;
}
$addresult=addnum(3,5);
echo $addresult;
echo "<br>";

//Scope //functions are blok scope
$fruit="mango";//de vairable ko function htae hmar tone lo ma ya//exception constants cand be used in function because they are global
function food(){
    $fruit="apple";
    echo "Inside ".$fruit;
}
food();//apple
echo "<br>";
echo "outside ".$fruit;//mango
echo "<br>";
//outside ka vairable ka function htae hmar alotemalote buu
//function htae ka vairabel ka lae outside hmar alote malote buu
echo "<br>";

//default argument function//argument ko value ma htae pay yin default value ko tone pay tal//argument nay yar hmar value pay yin value ko pae pay 
function userinfo($name="Htet Htet"){
    echo "I am $name.";
}
userinfo();
echo "<br>";
userinfo("Su Su");
?>