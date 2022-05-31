<?php
include 'connect.php';
if(isset($_POST['submit'])){
$name=$_POST['name'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$department=$_POST['department'];
$sql="insert into `employee` (name,email,mobile,department)values('$name','$email','$mobile','$department')";
$result=mysqli_query($con,$sql);
if($result){
// echo "Data inserted successfully";
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
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"><title>Employee Management System</title>
</head>
<body>
<div class="container my-5">
<form method="post">
<div class="form-group">
<label>Name</label>
<input type="text" class="form-control" placeholder="Enter your name"name="name" autocomplete="off">
</div>
<div class="form-group">
<label>Email</label>
<input type="email" class="form-control" placeholder="Enter your email"name="email" autocomplete="off">
</div>
<div class="form-group">
<label>Mobile</label>
<input type="text" class="form-control" placeholder="Enter your mobilenumber" name="mobile" autocomplete="off">
</div>
<div class="form-group">
<label>Department</label>
<input type="text" class="form-control" placeholder="Enter your Department" name="department">
</div>
<button type="submit" class="btn btn-warning" name="submit">Submit</button>
</form>
</div>
</body>
</html>
