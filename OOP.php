<?php 
//class & object
class Animal {
    //Properties  htae hmar vairable ko kyal nyar tal
    public $name;
    public $color;

    //Methods  // function
    public function animalname($dogname){
        echo "This dog is ".$dogname;
    }

    public function animalcolor($color){
        echo "This dog's color is ".$color;
    }
}

$AungNet=new Animal;//create object//->
$AungNet->animalname("Aung Net"); //This dog is Aung Net
echo "<br>";
$AungNet->animalcolor("Black");
echo "<br>";

$melLone= new Animal;
$melLone->animalname("Mel Lone"); // This dog is Mel Lone
echo "<br>";
$melLone->animalcolor("Yellow");
echo "<br>";
echo "<br>";

class fruit{
    public $name = "Apple";
    public $color;

    public function fruitname($fruitname){
        $this->name=$fruitname;
    }
    public function showfruitname(){
        echo "This fruit is ".$this->name;
    }
    public function showfruitcolor(){
        echo "This fruit has ".$this->color. " color";
    }
    public function fruitcolor($fruitcolor){
        $this->color=$fruitcolor;
    }
}
$orange=new fruit;
echo $orange->name;
echo "<br>";
$orange->showfruitname();
echo "<br>";
$orange->showfruitcolor();
echo "<br>";

$orange->fruitname("Orange");
echo $orange->name;
echo "<br>";

$orange->fruitcolor("Orange");
echo $orange->color; //orange
echo "<br>";
$orange->showfruitname();
echo "<br>";
$orange->showfruitcolor();
echo "<br>";
echo "<br>";


//Access Modifiers (public , private, protected)
class car{
    public $name; //access from anywhere
    protected $color;  //access within class and classes derived from that class
    private $price;  //access within class

    public function carname($carnam){
        $this->name=$carnam;
    }
    public function carcolor($carco){
        $this->color=$carco;
    }
    public function showcarcolor(){
        echo "This is how to fix protected error " .$this->color;
    }
    public function carprice($carpri){
        $this->price=$carpri;
    }
    public function showcarprice(){
        echo $this->price;
    }
}
$BMW=new car;
$BMW->carname("Toyota");
$BMW->carcolor("Black");
$BMW->carprice("$1000000");

echo $BMW->name;
echo "<br>";
//echo $BMW->color;  //protected error
//echo $BMW->price;  //private error
$BMW->showcarcolor();
echo "<br>";
$BMW->showcarprice();
echo "<br>";
echo "<br>";

//constructior //__construct
// if you create a contruct function, PHP will autocially call this function when create an object from class
//construct function ka class 1 ku hmar 1 ku pae yay lo ya
class User{
    public $name;
    public $job;

    // public function __construct(){
    //     echo "I am Zin Zaw";
    // }
    public function __construct($mynam,$myag){
        echo "I am ".$mynam." and I am ".$myag." years old";
    }
    public function myName(){
        echo "I am future developer";
    }
}
//$myprofil=new User; //construct (I am Zin Zaw)
$myprofil=new User("Zin Zaw",18);
echo "<br>";
$myprofil->myName();  // I am future developer
echo "<br>";

//Inheritance //extends 
class Movie{
    public $name;
    public $runningtime;

    public function latestMovie($mymovie,$itstime){
        $this->name=$mymovie;
        $this->runningtime=$itstime;
        echo "I love watching movie.";
    }
}
class Myfavorite extends Movie{
    public function recentwatch(){
        echo "Movie's name is ".$this->name."and it's running time is ".$this->runningtime;
    }
}
class OtherMovie extends Myfavorite{
    public function Myothermov(){
        echo $this->name;
    }
}
$mycinema=new OtherMovie;

$mycinema->latestMovie("The lion King",120);
echo "<br>";
echo $mycinema->name;
echo "<br>";
echo $mycinema->runningtime;
echo "<br>";
$mycinema->recentwatch();
echo "<br>";
$mycinema->Myothermov();
echo "<br>";
echo "<br>";

//Namespace  

?>