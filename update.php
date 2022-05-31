<?php
include 'connect.php';
$id=$_GET['updateid'];
$sql="Select * from `employee` where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$email=$row['email'];
$mobile=$row['mobile'];
$department=$row['department'];
if(isset($_POST['submit'])){
$name=$_POST['name'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$department=$_POST['department'];
$sql="update `employee` set
id=$id,name='$name',email='$email',mobile='$mobile',department='$department' where id=$id";
$result=mysqli_query($con,$sql);
if($result){
// echo "updated successfully";
header('location:index.php');
}else{
die(mysqli_error($con));
}
}
?>
<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-tofit=no">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"><title>EMPLOYEE MANAGEMENT SYSTEM</title>
</head>
<body>
<div class="container my-5">
<form method="post">
<div class="form-group">
<label>Name</label>
<input type="text" class="form-control" placeholder="Enter your name"name="name" autocomplete="off" value=<?php echo $name;?>>
</div>
<div class="form-group">
<label>Email</label>
<input type="email" class="form-control" placeholder="Enter your email" name="email" autocomplete="off" value=<?php echo $email;?>>
</div>
<div class="form-group">
<label>Mobile</label>
<input type="text" class="form-control" placeholder="Enter your mobilenumber" name="mobile" autocomplete="off" value=<?php echo $mobile;?>></div>
<div class="form-group">
<label>Department</label>
<input type="text" class="form-control" placeholder="Enter your
department" name="department" value=<?php echo $department;?>>
</div>
<button type="submit" class="btn btn-warning" name="submit">Update</button>
</form>
</div>
</body>
</html>
