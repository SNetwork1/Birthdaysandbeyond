<!DOCTYPE html>
<html>
<head>
<title>Birthday and Beyond Login</title>
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
  
body {
  background-image: img/Login-bg.JPG !important;
}
  </style>

<body style="background-image: ">

	<!-- main -->
	<div style="background-image:   url('img/Login-bg.jpg'); -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;"  class="main-wrapper" >
		<img style="display:block; margin-left: auto; margin-right: auto; width:25%;" src="img/Login2b.png" ></img>
		<div id="msgDiv">
      
      <div id="msgBox">
        
		<div class="agileits-top">
				<form action="#" method="post">
                    
					<h2><b>Account Login</b></h2><br>
					<p>If you Already have an account, login</p><br>
					<input style="border-radius: 18px; background-color: white; color: black;" class="text" type="text" name="username" placeholder="Username" required="">
				<br>
					<input style="border-radius: 18px; background-color: white; color: black;" class="text" type="password" name="password" placeholder="Password" required="">
					
					<input style="border-radius: 18px; " type="submit" value="SIGNIN">
				</form>
				<p>Don't have an Account? <a href="account-login.php"> Register Now!</a></p>
			</div>
        

      </div>

    </div>
		
		<!-- copyright -->
		<div class="agile"></div>
		</div>
		<!-- //copyright -->
		
	</div>
	<!-- //main -->
</body>
</html>