<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/jquery.validate.js"></script>
	<script>
		$(document).ready(function(){
			$("#submit").click(function(){
				if ($("#name").val()=="") {
					alert("Please enter your Name !");
					return false;
				}		
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

				if ($("#c_psw").val()=="") {
					alert("Please enter your conform password");
					return false;
				}

				var psw=$("#psw").val();
				var c_psw=$("#c_psw").val();
				if (psw != c_psw) {
					alert("Enter conform password same as Password ! ");
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
	<form name="form" id="form" action="insert.php" method="post">
  <div class="container">
  	<label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter Name" name="name" id="name" required="">

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" required="">

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" id="psw" required="">

    <label for="c_psw"><b>Conform Password</b></label>
    <input type="password" placeholder="Enter Password" name="c_psw" id="c_psw" required=""><br><br>

    <input type="submit" name="submit" id="submit" value="Register"><br>
    <a href="./index.php">Log In</a>
  </div>
</form>
</body>
</html>

