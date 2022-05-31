<?php
include 'connect.php';
if(isset($_GET['deleteid'])){
$id=$_GET['deleteid'];
$sql="delete from `employee` where id=$id";
$result=mysqli_query($con,$sql);
if($result){
// echo "Deleted successfull";
header('location:index.php');
}else{
die(mysqli_error($con));
}
}
?>
