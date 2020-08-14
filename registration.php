<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Registration</title>
<link rel="stylesheet" href="style1.css">
</head>

<header>
	<a href="index.php"><img src="alahlilogo.jpg" alt="alahlilogo" style="width:100px;height:120px;">
	
      <div class="container">
        <div id="branding">
		
          
			
		  
	        </div>
			
		
        <nav>
		
          <ul>
		  
            
            <li class="current"><a href="index.php">News</a></li>
            <li class="current"><a href="fixtures.php">Fixtures</a></li>
            <li class="current"><a href="players.php">Players</a></li>
            <li class="current"><a href="clubhistory.php">Club History</a></li>
            <li class="current"><a href="registration.php"> Become a Fan</a></li>
            <li class="current"><a href="ourpartners.php"> Our partners</a></li>
			
          </ul>
        </nav>
      </div>
    </header>

<body>
<?php
require('db.php');
// If form submitted, insert values into the database.
if (isset($_REQUEST['username'])){
        // removes backslashes
$username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
$username = mysqli_real_escape_string($con,$username);
$email = stripslashes($_REQUEST['email']);
$email = mysqli_real_escape_string($con,$email);
$password = stripslashes($_REQUEST['password']);
$password = mysqli_real_escape_string($con,$password);
$trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `users` (username, password, email, trn_date)
VALUES ('$username', '".md5($password)."', '$email', '$trn_date')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='form'>
<h3>You are registered successfully.</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
        }
    }else{
?>
<div class="form">
<h1>Registration</h1>
<form name="registration" action="" method="post">
<input type="text" name="username" placeholder="Username" required />
<input type="email" name="email" placeholder="Email" required />
<input type="password" name="password" placeholder="Password" required />
<input type="submit" name="submit" value="Register" />
<br>
<a href="login.php"><h5>Already have an account?<h5>
</form>
</div>
<?php } ?>
</body>
<footer>
      <p>© 2018, #Al-Ahli Football Club. All Rights Reserved</p>
      
    </footer>
</html>