<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>


<!DOCTYPE html>
<html>
<head>
	<title>My Website</title>
	<link rel="stylesheet" href="style.css">
<body>
<font color="#A6ACAF" size="3">    
    <marquee><h1>Hello, <?php echo $user_data['user_name']; ?></h1></marquee>    
</font>    

       <form class="form-inline my-2 my-lg-0">
        <a href="#">HOME</a> <center>
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">

      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</center></button>
      <a href="logout.php">Logout</a>
    </form>
        </font>    
    <br /><br /><br /><br />    
    <br />    
    <br />    
    <h1 align="center">    
        <font color="#F0B27A" size="9" >    
            WELCOME<br/>    
    </font>    
    SIMPLE WEB PAGE     
    </h1>    
      
    <br /><br /><br /><br /><br /><br/><br/><br/><br/>    
    <hr width="1500px">    
    <center>    
    <b>    
    <font face="cinzel" size="4">    
        <a href ="#">About Us|     
        <a href ="#">Contact Us |    
        <a href ="#"> Privacy Policy |    
        <a href ="#"> Terms     
    </a><br/><br/>    
             
    </font>    
    </b>    
    </center>  
	

	

</body>

</html>