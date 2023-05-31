<?php include_once('./template/header.php') ?>
<?php include_once('./template/connection.php')?>
<?php
$id=$_GET['userid'];
echo $id;

//$sql="DELETE FROM crud.user WHERE id='$id'";
//$query=mysqli_query($connection,$sql);
$sql="DELETE FROM crud.user WHERE id=?";
$stmt=$connection->prepare($sql);
$stmt->bind_param('s',$id);
$stmt->execute();

if($stmt==true){
    header("location: ./index.php");
}else{
    echo"Delete Fails".mysqli_error();
}
?>
<?php include_once('./template/footer.php') ?>