<?php
include 'connect.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
<style>
h1 {
  text-align: center;
}
</style>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0"><title>EMPLOYEE MANAGEMENT SYSTEM</title>
<h1><a href="index.php">EMPLOYEE MANAGEMENT SYSTEM</a></h1>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"></head>
<body>
<div class="container">
<div class=" text-center">
<button class="btn btn-success my-5"><a href="user.php" class="text-light">+Add Employee</a>
</button>
<?php
include 'connect.php';
$sql="SELECT * from employee";

if ($result=mysqli_query($con,$sql))
  {

  $rowcount=mysqli_num_rows($result);
  echo"<p align=center>Total Employees:<b>$rowcount</b></p>";

  mysqli_free_result($result);
  }
?>
<table class="table">
<thead>
<tr>
<th scope="col">Emp ID</th>
<th scope="col">Name</th>
<th scope="col">Email</th>
<th scope="col">Mobile</th>
<th scope="col">Department</th>
<th scope="col">Operations</th>
</tr>
</thead>
<tbody>
<?php
$sql="Select * from employee";
$result=mysqli_query($con,$sql);
if($result){
	while($row=mysqli_fetch_assoc($result)){
		$id=$row['id'];
		$name=$row['name'];
		$email=$row['email'];
		$mobile=$row['mobile'];
		$department=$row['department'];
		echo ' <tr>
			<th scope="row">'.$id.'</th>
			<td>'.$name.'</td>
			<td>'.$email.'</td>
			<td>'.$mobile.'</td>
			<td>'.$department.'</td>
			<td>
			<button class="btn btn-primary"><a href="update.php?updateid='.$id.'" class="text-light">Update</a></button>
			<button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class="text-light">Delete</a></button>
			</td>
			</tr>';
	}
}
?>
</tbody>
</table>
</div>
</body>
</html>
