<?php include_once('./template/header.php') ?>

<?php include_once('./template/connection.php')?>

<?php 
$id=$_GET['userid'];
//$sql="SELECT * FROM crud.user WHERE id=$id";
//$query=mysqli_query($connection,$sql);
// $totalRow=mysqli_num_rows($query);
// echo $totalRow;
$sql="SELECT * FROM crud.user WHERE id=?";

$stmt=$connection->prepare($sql);
$stmt->bind_param('s',$id);
$stmt->execute();


$result=$stmt->get_result();
$data= mysqli_fetch_assoc($result);
//var_dump ($data);
//echo $data['name'];
?>

<div class="container mt-5">
    <div class="row">
        <div class="col-8 offset-2">
            <div class="card">
                <div class="card-body">
                    <div class="h5 card-tilte text-center">
                        Update User
                    </div>
                    <form action="" method="post">
                        <input type="hidden" name="userid" value="<?= $data['id']?>" 
                        <div class="my-2">
                            <label for="name">Name</label>
                            <input type="text" id="name" name="userName" value="<?= $data['name']?>" class="form-control">
                        </div>
                        <div class="my-2">
                            <label for="phone">Phone</label>
                            <input type="text" id="phone" name="userPhone" value="<?= $data['phone']?>" class="form-control">
                        </div>
                        <input type="submit" name="updatebtn" class="btn btn-secondary float-end" value="Update">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php 
if(isset($_POST["updatebtn"])){
    $id=htmlentities($_POST['userid']);
    $name=htmlentities($_POST['userName']);
    $phone=htmlentities($_POST['userPhone']);

    //$updatesql="UPDATE crud.user SET name='$name', phone='$phone' WHERE id='$id' ";
    //$updateQuery=mysqli_query($connection,$updatesql);
    $updatesql="UPDATE crud.user SET name=?, phone=? WHERE id='$id' ";
    $stmt=$connection->prepare($updatesql);
    $stmt->bind_param('ss',$name,$phone);
    $stmt->execute();

    if($stmt == true){
        header("location:./index.php");
    }else{
        echo "Update error".mysqli_error();
    }
}
?>
<?php include_once('./template/footer.php') ?>