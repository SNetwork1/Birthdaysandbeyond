<!DOCTYPE html>
<html>
<head>
<title>Birthday and Beyond SignUp</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link rel="stylesheet" type="text/css" href="css/account-signup.css"/>
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
<!-- //web font -->
</head>
<style type="text/css">
 html, body {
    max-width: 100%;
    overflow-x: hidden;
}

#msgDiv{
    padding: 50px;
    display: flex;
    align-items: center;
    justify-content: center;

  }
  #msgBox{

    width: 400px;
    text-align: center;
    background-color: #29AAE1;
    border:2px solid #ff66d9;
    justify-content: center;
    align-items: center;
    color: white;
    border-radius: 5px;
    box-shadow: 3px 3px 5px #ff66d9;

  }
  ::placeholder {
  color: gray;
  opacity: 1; /* Firefox */
}
  </style>

<body>

<?php
session_start();
$_SESSION['message'] = '';  
//connect to mysql


$mysqli = mysqli_connect("localhost","sydneysoft_birthdaysandbeyond","Rv+Jfh[vZ-!O","sydneysoft_birthdaysandbeyond");
 if ($mysqli->connect_error){
	 die('Connect Error:' .$mysqli->connect_errno .': ' . $mysqli->connect_error);
 }


if($_SERVER['REQUEST_METHOD'] == 'POST'){
   if ($_POST['password'] == $_POST['confirmpassword']){
    // two password are equal to eachother
    	$username = $mysqli->real_escape_string($_POST['username']);
    	$email =  $mysqli->real_escape_string($_POST['email']);
    	$password = md5($_POST['password']);
	}	
		$_SESSION['username'] = $username;

		$sql = "INSERT INTO user (username, email, password) VALUES('$username', '$email', '$password')";
		$insert = $mysqli->query($sql);

		if($insert){
			echo "Success: row ID:($mysqli->insert_id)";
		} else{
			die("Error: {$mysqli->errno} :{$mysqli->error}");
		}	

		if($mysqli->query($sql) === true){
			$_SESSION['message'] = "Registration Sucessful !";
			header('location: myaccount.html');
		}
		else{
		$_SESSION['message'] = "Registration failed";
		}
 $mysqli->close();
}


?> 
	<!-- main -->
	<div style="background-image:   url('img/Login-bg.jpg'); -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;" class="main-wrapper">
     
		<img style="display:block; margin-left: auto; margin-right: auto; width:25%;" src="img/Login2b.png" ></img>
		<div id="msgDiv">
      
      <div id="msgBox">
        
		<div class="agileits-top">
				<form action="#" method="post">
                    <div class = "alert alert error"><?= $_SESSION['message'] ?></div> 
					<h2><b>Register</b></h2><br>
					<p>Sign in or register as a new customer</p><br>
					<input style="border-radius: 18px; background-color: white; color: black;" class="text" type="text" name="username" placeholder="Username" required="">
					<input style="border-radius: 18px; background-color: white; color: black;" class="text email" type="email" name="email" placeholder="Email" required="">
					<input style="border-radius: 18px; background-color: white; color: black;" class="text" type="password" name="password" placeholder="Password" required="">
					<input style="border-radius: 18px; background-color: white; color: black;" class="text w3lpass" type="password" name="confirmpassword" placeholder="Confirm Password" required="">
					<div class="wthree-text">
						<label class="anim">
							<input type="checkbox"  required="">
							<span>I Agree To The Terms & Conditions</span>
						</label>
						<div class="clear"> </div>
					</div>
					<input style="border-radius: 18px; " type="submit" value="SIGNUP">
				</form>
				<p>Aleady have an Account? <a href="account-login.php"> Login Now!</a></p>
			</div>
        

      </div>

    </div>
		
		<!-- copyright -->
		<div class="agile"></div>
		</div>
		<!-- //copyright -->
		<ul class="bubbles">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>
	<!-- //main -->
</body>
</html>