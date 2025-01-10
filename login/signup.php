<?php 
session_start();

	include("connection.php");
	include("functions.php");

	if($_SERVER['REQUEST_METHOD'] == "POST" )
	{
		$user_name = $_POST['user_name'];
		$password = mysqli_real_escape_string($connect, $_POST["password"]);  
        $password = md5($password);

		$email = $_POST['email'];
		$phone_number = $_POST['phone_number'];


		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,password,email,phone_number) values ('$user_id','$user_name','$password','$email','$phone_number')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    
  </head>
  <body>
    <div class="center">
      <h1>Register</h1>
      <form method="post">
        <div class="txt_field">
          <input type="text" required name="user_name">
          <span></span>
          <label>UserName</label>
			
        </div>
        <div class="txt_field" >
        	
          <input type="text" required name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">

          <span></span>
          <label>Password</label>
          </div>

        <div class="txt_field">
          <input type="email" required name="email">
          <span></span>
          <label>Email</label>
        </div>

        <div class="txt_field">
          <input type="number" required name="phone_number">
          <span></span>
          <label>Phone Number</label>
        </div>
        
        <center><center><div class="g-recaptcha" data-sitekey="6LcYJasgAAAAAFj2c6535huoiQkT8_hP2MkXzovR"></div></center></center>
        <input type="submit" value="Signup">
        <div class="signup_link">
        	
        	<a href="login.php">Already have an account</a>
        </div>
      </form>
    </div>

  </body>
</html>
