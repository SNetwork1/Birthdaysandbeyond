<?php include"db.php"; ?>
<?php session_start(); ?>
<?php 

	if (isset($_POST['submit'])) {
		$username = $_POST['username'];
		$email    = $_POST['email'];
		$password = $_POST['password'];

		if (!empty($username)&& !empty($email) && !empty($password)) {
			
			$username = mysqli_real_escape_string($conn,$username);
			$email	  = mysqli_real_escape_string($conn,$email);
			$password = mysqli_real_escape_string($conn,$password);

			$query = "SELECT randSalt FROM user";
			$randsaltQuery = mysqli_query($conn,$query);

			if(!$randsaltQuery){
				die("Query Failed". mysqli_error($conn));
			}

			$row = mysqli_fetch_array($randsaltQuery);
			$salt = $row['randSalt'];
			
			$password = crypt($password,$salt);


			$insertquery = "INSERT INTO user (username, email, password)";
			$insertquery .= "VALUES('{$username}','{$email}','{$password}')";
			$registerquery = mysqli_query($conn,$insertquery);
			if(!$randsaltQuery){
				die("Query Failed". mysqli_error($conn).''.mysqli_errno($conn));
			}

			header("Location: regsuccess.php");




	
		}


		
	}


?>

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


	<!-- main -->
	<div class="main-wrapper">
		<h1>Birthday and Beyond SignUp</h1>
		<div id="msgDiv">
      
      <div id="msgBox">
        
		<div class="agileits-top">
				<form action="account-signup.php" method="post">
                    <div class = "alert alert error"></div> 
					<h2><b>Register</b></h2><br>
					<p>Sign in or register as a new customer</p><br>
					<input style="border-radius: 18px; background-color: white; color: black;" class="text" type="text" name="username" placeholder="Username" required="">
					<input style="border-radius: 18px; background-color: white; color: black;" class="text email" type="email" name="email" placeholder="Email" required="">
					<input style="border-radius: 18px; background-color: white; color: black;" class="text" type="password" name="password" placeholder="Password" id="password" required="">
					<input style="border-radius: 18px; background-color: white; color: black;" class="text w3lpass" type="password" name="confirmpassword" placeholder="Confirm Password" id="confirm_password" required="">
					<div class="wthree-text">
						<label class="anim">
							<input type="checkbox"  required="">
							<span>I Agree To The Terms & Conditions</span>
						</label>
						<div class="clear"> </div>
					</div>
					<input style="border-radius: 18px; " type="submit" name="submit">
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
<script>
var password = document.getElementById("password")
  , confirm_password = document.getElementById("confirm_password");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;

</script>

</html>
