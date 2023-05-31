<?php 
//date module ko tone chin yin first a nay nae default timezone ko yay htar pr
date_default_timezone_set("Asia/Rangoon");

//date(format,timestamp) -->string
echo date("d-F-Y(D) h:i:s"); //currenttime
echo "<br>";
$time=date("d-F-Y(D) h:i:s");
echo gettype($time);
echo "<br>";

//This is how to store time that we want
echo date("d-M-Y(D)",strtotime("2022-06-21"));//strtotime(day-month-year)//(year-month.day)
echo "<br>";

//date_create() ka string ko object pyaung pay tal because date_format htae hmar (object,format) hate ya tar mo
//date_create() -->object// date_format(object,format)
$currentdate=  date_create(date("c"));
echo date_format($currentdate,"d-F-Y(D) h:i:s");
echo "<br>";
//The above are two ways to express date on document

//date_add(object,interval) //interval ->date_interval_create_from_date_string("+chin tae days")
$current=date_create(date("d-m-Y"));
date_add($current,date_interval_create_from_date_string("5 days")); // actually change
echo date_format($current,"d-m-Y"); // 4-02-2023
echo "<br>";

$expiredate=date_create(date(strtotime("2022.2.1")));
date_add($expiredate,date_interval_create_from_date_string("1 month"));
echo "The expire date is".date_format($expiredate,"d-m-Y");
echo "<br>";

$exp=date_create(date("c"));
date_add($exp,date_interval_create_from_date_string("1 month"));
echo date_format($exp,"c");
echo "<br>";

//date_sub(object,interval)
$last3month=date_create(date("c"));
date_sub($last3month,date_interval_create_from_date_string("3 months"));
echo date_format($last3month,"d-m-Y"); //30.10.2022
echo "<br/>";

//date_diff(datetimee1, datetime2)
//phpinfo()
?>