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
	<div class="main-wrapper">
		<h1>Birthday and Beyond SignUp</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
				<form action="#" method="post">
                    <div class = "alert alert error"><?= $_SESSION['message'] ?></div> 
					<input class="text" type="text" name="username" placeholder="Username" required="">
					<input class="text email" type="email" name="email" placeholder="Email" required="">
					<input class="text" type="password" name="password" placeholder="Password" required="">
					<input class="text w3lpass" type="password" name="confirmpassword" placeholder="Confirm Password" required="">
					<div class="wthree-text">
						<label class="anim">
							<input type="checkbox" class="checkbox" required="">
							<span>I Agree To The Terms & Conditions</span>
						</label>
						<div class="clear"> </div>
					</div>
					<input type="submit" value="SIGNUP">
				</form>
				<p>Don't have an Account? <a href="account-login.php"> Login Now!</a></p>
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