<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    //get method //post method
    //get method --> a href or form or url
    //post method --> form

    //a href = "url?key=value & key=value"
    $myacc=[
        "name"=>"Tun Tun",
        "job"=>"developer"
    ];
    echo $myacc["name"];
    echo $myacc["job"];
    ?>
    // a href ka server htae ka data yu/ // form ka user c ka data you
    <a href="./server.php?name=<?php echo $myacc["name"] ?>&job=<?php echo $myacc["job"] ?>"> Server Side</a>
    <br>
    <br>
    <?php 
    //get method // form //show in url
    //name="" ==key
    //userdata==valued
    //key nae value ko server side hmar array a nay nae pyan pya pay tal
    //submit ka ma par ma phyt pr submit nayar hmar other tone lo maya
    ?>
    <form action="./server.php" method="Get">
        <input type="text" name="username" placeholder="enter your name">
        <input type="email" name="useremail" placeholder="Enter your email">
        <input type="text" name="userphone" placeholder="Enter you ph number">
        <input type="submit" value="Send">
    </form>
    <form action="./server.php" method="POST">
        <input type="text" name="pname" placeholder="enter your name">
        <input type="email" name="pemail" placeholder="Enter your email">
        <input type="text" name="pphone" placeholder="Enter you ph number">
        <input type="submit" value="Send">
    </form>
</body>
</html>