// String's built in functions
<?php
function multiple($val1){
    return $val1*2;
}
$res = multiple(20);
echo $res;
echo "<br>";

$nam="Zin Zin";
//strlen(string) //strlen = string's length
echo strlen($nam);
echo "<br>";

//str_word_count(string)//word count
echo str_word_count("Hello Mello");
echo "<br>";

echo str_word_count($nam);
echo "<br>";

//strrev(string) //string reverse
echo strrev("Hello Mello");
echo "<br>";
echo strrev($nam);
echo "<br>";

//str_shuffle(string)//string shuffle
echo str_shuffle("Hello Mello");
echo "<br>";

//strpos(string,within)//
echo strpos("Hello Mello","Mello");
echo "<br>";

echo strpos("Hello Mello","ello");
echo "<br>";

//str-replace(find, new, string)
echo str_replace("Mello","World","Hello Mello");
echo "<br>";

echo str_replace("Zin","Zaw",$nam);
echo "<br>";

//strtoupper(string)
echo strtoupper("hello mello");
echo "<br>";

echo strtoupper($nam);
echo "<br>";

//strtolower(string)
echo strtolower("HELLO MELLO");
echo "<br>";

echo str_replace(" ","","Hello Mello");
echo "<br>";

//ucfirst(string)  //upper case first "like title() in python
echo ucfirst("zin zaw");//Zin zaw
echo "<br>";

//ucwords(string) //uppercase word
echo ucwords("zin zaw");//Zin Zaw
echo "<br>";

//strip_tags(html code) // strip all tags
$test="<h1><i>This i stesting</i></h1>";
echo $test;
echo strip_tags($test);
echo "<br>";

//trim(string) //left/right strip space
$vairabel="        Zi    n        ";
echo $vairabel;
echo "<br>";

var_dump($vairabel);
echo "<br>";

var_dump(trim($vairabel));
echo "<br>";



?>