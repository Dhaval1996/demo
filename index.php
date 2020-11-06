<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$("#submit").click(function(){
				if ($("#email").val()=="") {
						alert("Please enter Email !");
						return false;
				}
				else
				{
					var email=$("#email").val();
					var emailReg = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
      				if(!emailReg.test(email))
      				{
          				alert('Invalid Email Address!');
          				return false;
          			}
				}

				if ($("#psw").val()=="") {
					alert("Please enter your password");
					return false;
				}			 			   				
			});
		});	
	</script>
	<style type="text/css">
		body {
		  font-family: Arial, Helvetica, sans-serif;
		  background-color: black;
		}

		.container {
		  padding: 30px;
		  margin: 100px 400px;
		  background-color: lightyellow;
		  text-align: center;
		  border:3px solid;
		}
		label{
		float: left;
		}

		input[type=text], input[type=password] {
		  width: 100%;
		  padding: 12px 20px;
		  margin: 8px 0;
		  display: inline-block;
		  border: 1px solid #ccc;
		  box-sizing: border-box;
		}
		input[type=submit],button {
		  background-color: #4CAF50;
		  color: white;
		  padding: 14px 20px;
		  margin: 10px 0px;
		  border: none;
		  cursor: pointer;
		  width: 150px;
		}
		button:hover {
		  opacity: 0.8;
		}
		@media only screen and (max-width: 600px) 
		{
			.container
			{
					margin:0px 10px;
			}
		}
		@media only screen and (min-width: 600px) 
		{
			.container
			{
					margin:0px 100px;
			}
		}
		@media only screen and (min-width: 768px) 
		{
			.container
			{
					margin:0px 200px;
			}
		}
		@media only screen and (min-width: 992px) 
		{
			.container
			{
					margin: 0px 300px;
			}
		}
		@media only screen and (min-width: 1200px) 
		{
			.container
			{
					margin:0px 415px;
			}
		}
	</style>
</head>
<body>
	<form name="form" action="" method="post">
  <div class="container">
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email">

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" id="psw">
<span></span>
    <input type="submit" name="submit" id="submit" value="Login"><br>
    <a href="./register.php">Register Here</a>
  </div>
</form>
</body>
</html>

<?php
$conn=mysqli_connect("localhost","root","","task");

if(isset($_POST['submit']))
{
	$email = $_POST['email'];
	$psw = $_POST['psw'];
	$query = "SELECT email, password FROM register WHERE email='$email' 
	AND password='$psw'";
	$result = mysqli_query($conn,$query);
	$num_row = mysqli_num_rows($result);
	$row=mysqli_fetch_array($result);
	if($num_row==1)
	{		
	 echo '<script>alert("Login Successful !!")</script>';
	}
	else
	{
	 echo '<script>alert("Invalid Email or Password !!")</script>';
	}
}
?>

