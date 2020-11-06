<?php
$conn=mysqli_connect("localhost","root","","task");

if(isset($_POST['submit']))
{
  $name=$_POST['name'];
	$email=$_POST['email'];
	$psw=$_POST['psw'];

  $duplicate=mysqli_query($conn,"select * from register where email='$email'");
  if (mysqli_num_rows($duplicate)>0)
  {
    echo '<script>alert("User is existing !!")</script>';
  }
  else
  {
    $query="INSERT INTO register(name,email,password)VALUES('$name','$email','$psw')";
    mysqli_query($conn,$query);
  }	
}
?>