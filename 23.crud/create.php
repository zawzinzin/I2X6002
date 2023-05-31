<?php include_once('./template/header.php') ?>
<?php include_once('./template/connection.php')?>

<div class="container mt-5">
    <div class="row">
        <div class="col-8 offset-2">
            <div class="card">
                <div class="card-body">
                    <div class="h5 card-tilte text-center">
                        Create User
                    </div>
                    <form action="create.php" method="POST">
                        <div class="my-2">
                            <label for="name">Name</label>
                            <input type="text" id="name" name="username" class="form-control">
                        </div>
                        <div class="my-2">
                            <label for="phone">Phone</label>
                            <input type="text" id="phone" name ="userphone" class="form-control">
                        </div>
                        <input type="submit" class="btn btn-secondary float-end" name="createbtn" value="Create">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



<?php 
// include_once('./template/connection.php');
//var_dump($_POST);
if(isset($_POST['createbtn'])){
    $name=htmlentities($_POST["username"]);
    $phone=htmlentities($_POST["userphone"]);
    //echo $_POST['username'];
    //echo $_POST['userphone'];

    //INSERT INTO user () VALUES ();
    //$query=" INSERT INTO crud.user(name,phone) VALUES ('$name','$phone')";
    //$db=mysqli_query($connection,$query);
    // if($db){
    //     echo "inserted successfully";
    // }else{

    // }

//$sql='INSERT INTO user (name,phone) VALUES (`$name`,`$phone`)';
//$dkkn= mysqli_{query($connection,$sql);

    if($name == "" || $name==null || $phone=="" || $phone==null){
        echo "<div class='alert alert-danger col-3 offset-4'>You need to fill the form.</div>";
    }else{
        $query="INSERT INTO crud.user (name,phone) VALUES (?,?)";
        $stmt=$connection->prepare($query);
        $stmt->bind_param('ss',$name,$phone);
        $stmt->execute();
        //$db = mysqli_query($connection,$query);
        // echo "<div class='alert alert-success col-3 offset-4'>User account created.</div>";

        if($stmt==true){
            echo "<div class='alert alert-success col-3 offset-4'>User account created.</div>";
        }else{
            echo "mysqli fails".mysqli_error();
        }
    }
}
?>
<?php include_once('./template/footer.php') ?>