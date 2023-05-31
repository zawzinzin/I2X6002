<?php 
class Fruit{
    public $name;
    protected $color;
    private $price;

    public function fruitnam($fn){
        $this->name= $fn;
    }
    public function fruitcol($fc){
        $this->color = $fc;
    }
    public function fruitpri($fp){
        $this->price= $fp;
    }
    public function getcolor(){
        echo $this->color;
    }
    public function getprice(){
        echo $this->price;
    }
}
//about protected
class nextfruit extends Fruit{
    public function getcolor(){
        echo $this->color;
    }
    public function getpri(){
        echo $this->price;
    }
}
$aboutfru=new nextfruit;
$aboutfru->fruitnam("Apple");
$aboutfru->fruitcol("REd");
$aboutfru->fruitpri(2);

//about private 
echo $aboutfru->name; // Apple
$aboutfru->getcolor();
$aboutfru->getpri();
?>