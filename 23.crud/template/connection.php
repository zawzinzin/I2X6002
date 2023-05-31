<?php
// $servername='localhost';
// $username='root';
// $password='';
// $database='crud';
// $connection = new mysqli($servername,$username,'',$database);
$connection=mysqli_connect('localhost','root','','crud');
if ($connection == true){
    echo "connected:";
    mysqli_connect('localhost','root','','crud');
}else{
    die("connection error".mysqli_connect_error());
}
?>