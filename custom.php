<?php


  // Create database connection
  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['submit'])) {
	// Get image name
	//  $image = $_FILES['file']['name'];
	// $_POST['card_left_text']= ('<script> markup1, markup2, markup3</script>');
	//  $card_left_text= ($_POST['card_left_text']);

	// $_POST['card_right_text']= ('<script> markup21, markup22, markup23</script>');
	//  $card_right_text= ($_POST['card_right_text']);
    
    
    // Get text
  	  	// image file directory
  	$target = "images/".basename($image);
    $db = mysqli_connect("localhost", "root", "", "accounts");
   
    // $text = $post(‘upload.php’, { markup });

 	$sql = "INSERT INTO images (image) VALUES ('$image')";
  	// execute query
  	mysqli_query($db, $sql);

  	if (move_uploaded_file($_FILES['file']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}
  }

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

  <link rel="stylesheet" type="text/css" href="css/main.css" />
  <link rel="stylesheet" type="text/css" href="css/style.css" /> 

  <link rel="icon" href="img/birthday-card.png" type="image/x-icon">
</head>

<style type="text/css">
  .bg-pink{
    background-color: #e695a7;
  }
  .pink{
    color:#e695a7;

  }
  .white{
    color: white;
  }

  .bg-white{
    background-color: white;
  }
  .no-border-pink{
    border: 1px solid #e695a7;
  }
  .no-border-white{
    border: 2px solid white;
  }
  .right{
    float: right;
  }
  .grey{
    color: #120f10;
  }
  li.my-nav{
    display: inline;
    padding-right: 1.5rem;
    list-style: none;
    color: #09044d;
  }
  li.my-fixed-nav{
    display: inline;
    padding-right: 1.5rem;
    list-style: none;
    color:#e695a7;
  }

.my-h1{
    font-size: 3.5rem;
    padding-left:1rem;
    padding-top: 1rem;
    color: #280966;
  }
.my-h2{
  color: #280966;

}

  .my-search-input{
    width:60rem;
    height:5rem;
    border-right-width: 0px;
    border-left: 2px solid black;
    border-top: 2px solid black;
    border-bottom: 2px solid black;
}
  .my-search-icon{
    height:3.4rem;
    width:3.5rem;
    padding-top: 1rem;
    border-left-width: 0px;
    border-width: 4px;
  }
  .my-search-btn {
    border-left-width: 0px;
    border-right: 2px solid black;
    border-top: 2px solid black;
    border-bottom: 2px solid black;
}
.my-login-btn{
    background-color: black;
    height: 5rem;
    border-color: black;
}


span:hover + div {
  background-color: #e695a7;
}

.space{
  width: 2rem;
  display: inline-block;
  border: 2px solid white;
}

.placeholder{
  color: black;
  font-weight: bold;
  font-size: 18px;
  padding: 1rem;
}

.tab {
  overflow: hidden;
  border: 2px solid grey;
  background-color:white;
  display: inline-block;
  padding: 1rem;
  text-align: center;
  font-size: 2rem;
}


.card-light{
  border:1px solid #e8e6eb;
}
.tab-long {
  border: 2px solid #e8e6eb;
  background-color:white;
  padding: 0.3rem;
  text-align: center;
  font-size: 2rem;
}
.tab-small{
  border: 2px solid #e8e6eb;
  padding: 1rem;
  overflow: hidden;
  background-color:white;
  display: inline-block;
  text-align: center;
  font-size: 1.5rem;
  margin: 0 auto;
}
.btn-tab{

  background-color: #269120;
  font-weight: bold;
  color: white;
  display: inline-block;
}
.my-h2-inline{
  color: #280966;
  display: inline-block;
}
.card1{
  color: #280966;
  background-color: #dadbed;
  font-size: 3rem;
  font-weight: bold;
  text-align: center;
  }
  .card2{
    padding: 4rem;
    background-color: #e9ecf2;
    font-size: 2rem;
    font-weight: bold;
    text-align: center;
    }
    .col{
      background-color: #d0d4db;
      padding: 0px;
      text-align: center;
      margin:0 auto;

    }


.input-tab{

    color: black;
    height:6rem;
    width:6rem;
    display:inline-block;
}
.btn-cont{
  color:white;
  background-color:#280966;
  width:15rem;
  height:5rem;
}
.photo{
  overflow: hidden;
  border: 2px solid #e8e6eb;
  background-color:white;
  height: 60rem;
  margin: 2rem;
  padding: 2rem;
  text-align: center;
  font-size: 2rem;
}
.card-front{
  overflow: hidden;
  border: 2px solid #e8e6eb;
  background-color:white;
  height: 15em;
  margin: 2rem; 
  padding: 2rem;
  text-align: left;
  font-size: 2.5rem;
  color: #000000
}
.upload-btn{
   margin-right: 50rem;
   background-color: #280966;

   width: 30rem;
   display: inline;
}
img{
  height: 50rem;
  width: 50rem;
}
.fileUpload {
    position: relative;
    overflow: hidden;
    margin: 10px;
}
.fileUpload input.upload {
    position: absolute;
    top: 0;
    right: 0;
    margin: 0;
    padding: 0;
    font-size: 20px;
    cursor: pointer;
    opacity: 0;
    filter: alpha(opacity=0);
}
  .nav li a {
  color: black;
  }
  form.example input[type=text] {
  padding: 10px;
  font-size: 17px;
  border: 1px solid grey;
  float: left;
  width: 90%;
  background: #f1f1f1;
  }
  /* Style the submit button */
  form.example button {
  float: left;
  width: 10%;
  padding: 10px;
  background: #F7F7F7;
  color: black;
  font-size: 17px;
  border: 1px solid grey;
  border-left: none; /* Prevent double borders */
  cursor: pointer;
  }
  form.example button:hover {
  background: #0b7dda;
  }
  /* Clear floats */
  form.example::after {
  content: "";
  clear: both;
  display: table;
  }
  .notification {
  position: relative;
  display: inline-block;
  }
  .notification .badge {
  position: absolute;
  top: -10px;
  right: -10px;
  padding: 5px 10px;
  border-radius: 50%;
  background: red;
  color: white;
  }
  .myNav_ul{
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  }
  .myNav_li {
  float: left;
  }
  .myNav_li a {
  display: block;
  font-size: 18px;
  font-weight: bold;
  color: #FE69B4;
  text-align: center;
  padding: 14px 16px;
  margin-right: 20px;
  text-decoration: none;
  }
  .fa1 {
  padding: 20px;
  font-size: 30px;
  width: 50px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
  }
  .fa1:hover {
  opacity: 0.7;
  }
#close-image imag {
    display: block;
    height: 130px;  
    width: 100px;
}

  #close-CSS {
    background-image: url( '/img/3waytext.png' );
    background-size: 100px 130px;
    height: 134px;  
    width: 104px;
}  </style>
      
<body style="background-color: #F7F7F7;">
<nav class="navbar navbar-expand-sm navbar-dark fixed-top custom-nav" id="mainNav">
			<div class="container">
				<a class="navbar-brand js-scroll-trigger" href="#page-top">Welcome To Birthdays & Beyond!</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
					aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarResponsive">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item ">
							<a class="nav-link js-scroll-trigger" href="#store">Store</a>
						</li>
						<li class="nav-item">
							<a class="nav-link js-scroll-trigger" href="#newsletter">Newsletter</a>
						</li>
						<li class="nav-item">
							<a class="nav-link js-scroll-trigger" href="#FAQ">FAQ</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
								ENG
							</a>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="#">Language 1</a>
								<a class="dropdown-item" href="#">Language 2</a>
								<a class="dropdown-item" href="#">Language 3</a>
							</div>
						</li>

						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
								USD
							</a>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="#">Currency 1</a>
								<a class="dropdown-item" href="#">Currency 2</a>
								<a class="dropdown-item" href="#">Currency 3</a>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</nav>


  <!---Menu Bar Starts--->

  <div class="container-fluid bg-primary">
    <!--  <a class = "navbar-brand" href="index.html">
        <img src="img/Logo B&B.png" width="170" height="50" class="d-inline-block align-top" alt="">
      </a>-->
      

  <ul class="list-unstyled list navbar-collapse">
				<li style="margin-right: -150px; ">
					<img class="img" src="/img/Logo.png">
				</li>

				<li style=" padding-top: 120px; margin-left: 30px;">


					<div class="form-group has-search">
						<span class=" form-control-feedback"></span>
						<input type="text" class="form-control resize" placeholder="Search"
							style="background-color: #f8f8f8 !important;">
					</div>
				</li>

				<li style="padding-top: 120px; padding-left: 30px;">

					<div class="whiteBackground">
						<span class="fa fa-user" style="line-height: 40px; vertical-align: middle;"> </span>
					</div>

				</li>

				<li class="nav-item dropdown" style="padding-top: 113px; padding-left: 0px;">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
						data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<b style="color:black">My Account</b>
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="#">Login</a>
						<a class="dropdown-item" href="#">Sign Up</a>
					</div>
				</li>

				<li style="padding-top: 120px; padding-left: 0px;">

					<div class="whiteBackground">
						<i class="fa-shopping-cart" style="line-height: 40px; vertical-align: middle;"> </i>
					</div>

				</li>

				<li class="nav-item dropdown" style="padding-top: 120px; padding-left: 9px; text-align: center;">
					<b> My Cart</b>

				</li>

				<li>

					<div class="container-1" style="z-index: 2000;">
						<nav class="navbar navbar-expand-sm navbar-light  new-nav" id="mainNav">
							<div class="container " style="padding-left: 280px;">
								<a class="navbar-brand js-scroll-trigger " href="#page-top"
									style="color: #f06e9c;">Home</a>
								<button class="navbar-toggler" type="button" data-toggle="collapse"
									data-target="#secondNavbar" aria-controls="navbarResponsive" aria-expanded="false"
									aria-label="Toggle navigation">
									<span class="navbar-toggler-icon" ;"></span>
								</button>
								<div class="collapse navbar-collapse" id="secondNavbar">
									<ul class="navbar-nav ml-auto">

										<li class="nav-item dropdown position-static">
											<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"
												id="navbarDropdown" role="button">Cards</a>
											<ul class="list-unstyled dropdown-menu megamenu">
												<div class="row">
													<li class="col-md-3 column">
														<ul>
															<h6 class="list-header">Popular</h6>
															<hr>
															<li>
																<a href="#">Anniversary</a>
															</li>
															<li>
																<a href="#">Bestsellers</a>
															</li>
															<li>
																<a href="#">Birthday Cards</a>
															</li>
															<li>
																<a href="#">Engagements</a>
															</li>
															<li>
																<a href="#">Giant Cards</a>
															</li>
															<li>
																<a href="#">Leaving</a>
															</li>
															<li>
																<a href="#">New in Cards</a>
															</li>
															<li>
																<a href="#">Wedding</a>
															</li>
														</ul>
													</li>
													<li class="col-md-3 column">
														<ul>
															<h6 class="list-header">Seasonal</h6>
															<hr>
															<li>
																<a href="#">Christmas</a>
															</li>
															<li>
																<a href="#">Easter</a>
															</li>
															<li>
																<a href="#">Father's Day</a>
															</li>
															<li>
																<a href="#">Mother's Day</a>
															</li>
															<li>
																<a href="#">Valentine's Day</a>
															</li>
														</ul>
													</li>
													<li class="col-md-3 column">
														<ul>
															<h6 class="list-header">Congrats/Goodluck</h6>
															<hr>
															<li>
																<a href="#">All Congratulations</a>
															</li>
															<li>
																<a href="#">Goodluck</a>
															</li>
															<li>
																<a href="#">Graduation</a>
															</li>
															<li>
																<a href="#">New Job</a>
															</li>
															<li>
																<a href="#">Retirement</a>
															</li>
														</ul>
													</li>
													<li class="col-md-3 column">
														<ul>
															<h6 class="list-header">Baby</h6>
															<hr>
															<li>
																<a href="#">Announcement</a>
															</li>
															<li>
																<a href="#">Baby Shower</a>
															</li>
															<li>
																<a href="#">New Baby</a>
															</li>
															<li>
																<a href="#">Pregnancy</a>
															</li>

														</ul>
													</li>
												</div>
											</ul>
										</li>

										<li class="nav-item dropdown position-static">
											<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"
												id="navbarDropdown" role="button">Birthday Cards</a>
											<ul class="list-unstyled dropdown-menu megamenu">
												<div class="row">
													<li class="col-md-3 column">
														<ul>
															<h6 class="list-header">Age</h6>
															<hr>
															<li>
																<a href="#">1st Birthday</a>
															</li>
															<li>
																<a href="#">18th Birthday</a>
															</li>
															<li>
																<a href="#">21st Birthday</a>
															</li>
															<li>
																<a href="#">30th Birthday</a>
															</li>
															<li>
																<a href="#">40th Birthday</a>
															</li>
															<li>
																<a href="#">50th Birthday</a>
															</li>
															<li>
																<a href="#">60th Birthday</a>
															</li>
															<li>
																<a href="#">65th Birthday</a>
															</li>
															<li>
																<a href="#">70th Birthday</a>
															</li>
															<li>
																<a href="#">80th Birthday</a>
															</li>
															<li>
																<a href="#">All Ages</a>
															</li>



														</ul>
													</li>
													<li class="col-md-3 column">
														<ul>
															<h6 class="list-header">Styles</h6>
															<hr>
															<li>
																<a href="#">Chocolate Cards</a>
															</li>
															<li>
																<a href="#">Create Your Own</a>
															</li>
															<li>
																<a href="#">Funny</a>
															</li>
															<li>
																<a href="#">Non Photo</a>
															</li>
															<li>
																<a href="#">Photo</a>
															</li>
															<li>
																<a href="#">Photo Collage</a>
															</li>
															<li>
																<a href="#">Rude</a>
															</li>


														</ul>
													<li class="col-md-3 column">
														<ul>
															<h6 class="list-header">Populars</h6>
															<hr>
															<li>
																<a href="#">All Birthday</a>
															</li>
															<li>
																<a href="#">Best Seller</a>
															</li>
															<li>
																<a href="#">Friends</a>
															</li>
															<li>
																<a href="#">New In</a>
															</li>


														</ul>
													</li>
										</li>

										<li class="col-md-3 column">
											<ul>
												<h6 class="list-header">Kids</h6>
												<hr>
												<li>
													<a href="#">Boy</a>
												</li>
												<li>
													<a href="#">&nbsp; &nbsp;
														&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
												</li>


												<li>
													<a href="#"></a>
												</li>

												<li>
													<a href="#">Girl</a>
												</li>
											</ul>
										</li>
										<li class="col-md-3 column">
											<ul>
												<h6 class="list-header">Him</h6>
												<hr>
												<li>
													<a href="#">Boyfriend</a>
												</li>
												<li>
													<a href="#">Brother</a>
												</li>
												<li>
													<a href="#">Dad</a>
												</li>
												<li>
													<a href="#">Grandad</a>
												</li>
												<li>
													<a href="#">Husband</a>
												</li>
												<li>
													<a href="#">Son</a>
												</li>

											</ul>
										</li>
										<li class="col-md-3 column">
											<ul>
												<h6 class="list-header">Her</h6>
												<hr>
												<li>
													<a href="#">Daughter</a>
												</li>
												<li>
													<a href="#">Girlfriend</a>
												</li>
												<li>
													<a href="#">Grandma</a>
												</li>
												<li>
													<a href="#">Mum</a>
												</li>
												<li>
													<a href="#">Sister</a>
												</li>
												<li>
													<a href="#">Wife</a>
												</li>
											</ul>
										</li>



								</div>
			</ul>
			</li>

			<li class="nav-item dropdown position-static">
				<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id="navbarDropdown"
					role="button">Postcards</a>
				<ul class="list-unstyled dropdown-menu megamenu">
					<div class="row">
						<li class="col-md-3 column">
							<ul>
								<h6 class="list-header">I'm Looking For</h6>
								<hr>
								<li>
									<a href="#">All Postcards</a>
								</li>
								<li>
									<a href="#">Birthday Postcards</a>
								</li>
								<li>
									<a href="#">Father's Day Postcards</a>
								</li>
								<li>
									<a href="#">General Black Postcards</a>
								</li>
								<li>
									<a href="#">New Baby Postcards</a>
								</li>
								<li>
									<a href="#">Wedding Postcards</a>
								</li>
								<li>
									<a href="#">Thank You Postcards</a>
								</li>

							</ul>
						</li>
						<li class="col-md-3 column">
							<ul>
								<h6 class="list-header">From Who?</h6>
								<hr>
								<li>
									<a href="#">From Couples</a>
								</li>
								<li>
									<a href="#">From Families</a>
								</li>
								<li>
									<a href="#">From Him</a>
								</li>
								<li>
									<a href="#">From Her</a>
								</li>
								<li>
									<a href="#">From Kids</a>
								</li>
							</ul>
						</li>
						<li class="col-md-3 column">
							<ul>
								<h6 class="list-header">Postcards by Type</h6>
								<hr>
								<li>
									<a href="#">Non Photo Postcards</a>
								</li>
								<li>
									<a href="#">Photo Postcards</a>
								</li>

							</ul>
						</li>

					</div>
				</ul>
			</li>

			<li class="nav-item dropdown position-static">
				<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id="navbarDropdown"
					role="button">Personalized Gifts</a>
				<ul class="list-unstyled dropdown-menu megamenu">
					<div class="row">
						<li class="col-md-3 column">
							<ul>
								<h6 class="list-header">I'm Looking For</h6>
								<hr>
								<li>
									<a href="#">Alcohol</a>
								</li>
								<li>
									<a href="#"> &nbsp; &nbsp; </a>
								</li>
								<li>
									<a href="#">Aprons</a>
								</li>
								<li>
									<a href="#">Backpacks</a>
								</li>
								<li>
									<a href="#">Balloons</a>
								</li>
								<li>
									<a href="#">&nbsp; &nbsp;</a>
								</li>
								<li>
									<a href="#">Books</a>
								</li>
								<li>
									<a href="#"> &nbsp; &nbsp; </a>
								</li>
								<li>
									<a href="#">Calendars</a>
								</li>
								<li>
									<a href="#">Canvas Prints</a>
								</li>
								<li>
									<a href="#">Coasters</a>
								</li>

							</ul>
						</li>
						<li class="col-md-3 column">
							<ul>
								<h6 class="list-header"> &nbsp;</h6>
								<hr>
								<li>
									<a href="#">Cushions</a>
								</li>
								<li>
									<a href="#">&nbsp; &nbsp;</a>
								</li>

								<li>
									<a href="#">Diaries</a>
								</li>
								<li>
									<a href="#">Engraved Frames</a>
								</li>
								<li>
									<a href="#">Glassware</a>
								</li>
								<li>
									<a href="#">Keyrings</a>
								</li>
								<li>
									<a href="#">&nbsp; &nbsp;</a>
								</li>
								<li>
									<a href="#">Mugs</a>
								</li>
								<li>
									<a href="#">&nbsp; &nbsp;</a>
								</li>
								<li>
									<a href="#">Notebooks</a>
								</li>
								<li>
									<a href="#">&nbsp; &nbsp;</a>
								</li>
								<li>
									<a href="#">Pens</a>
								</li>
							</ul>
						</li>
						<li class="col-md-3 column">
							<ul>
								<h6 class="list-header">&nbsp;</h6>
								<hr>
								<li>
									<a href="#">Posters</a>
								</li>
								<li>
									<a href="#">&nbsp; &nbsp;</a>
								</li>
								<li>
									<a href="#">Socks</a>
								</li>
								<li>
									<a href="#">&nbsp; &nbsp;</a>
								</li>
								<li>
									<a href="#">T-Shirts</a>
								</li>
								<li>
									<a href="#">&nbsp; &nbsp;</a>
								</li>
								<li>
									<a href="#">Wall Art</a>
								</li>
								<li>
									<a href="#">Water Bottles</a>
								</li>
								<li>
									<a href="#">Wedding Stationary</a>
								</li>

							</ul>
						</li>

					</div>
				</ul>
			</li>

			<li class="nav-item dropdown position-static">
				<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id="navbarDropdown"
					role="button">Flowers</a>
				<ul class="list-unstyled dropdown-menu megamenu">
					<div class="row">
						<li class="col-md-3 column">
							<ul>
								<h6 class="list-header">Occasions</h6>
								<hr>
								<li>
									<a href="#">Birthday</a>
								</li>
								<li>
									<a href="#">&nbsp; &nbsp;</a>
								</li>
								<li>
									<a href="#"> Themes </a>
								</li>
								<li>
									<a href="#">Under $30</a>
								</li>


							</ul>
						</li>
						<li class="col-md-3 column">
							<ul>
								<h6 class="list-header"> Type</h6>
								<hr>
								<li>
									<a href="#">Letterbox Flowers</a>
								</li>

							</ul>
						</li>

					</div>
				</ul>
      </li>
    </ul>
		</div>
		</div>
		</nav>
		</div>
		</li>
		</ul>
  </div>
  <!-- Body -->

<div class="container-fluid">
<h2 class="my-h2"> You Can Customize Your Card Here!</h2>
<button class="tab" style="color: black" style="padding-bottom: 50px;">Giant (A3)<br>$9.99</button>
<button class="tab" style="color: black">Large (A4)<br>$5.99</button>

<div class="tab-long"><button type="button" class="btn btn-secondary btn-tab"><u>Sizes & Pricing</u></button>
<div class="space"></div>
<div class="space"></div>
<div class="space"></div>
<div class="space"></div>
<h2 class="my-h2-inline" style="color: black"><b>QTY:</b></h2>
<div class="space" style="color: grey" ></div>
<input type="text" class="input-tab"/>
<div class="space"></div>
<div class="space"></div>
<button onclick= "save()" type="button" class="btn btn-cont btn-lg btn-secondary">Continue</button>
</div>
<div class="card bg-light text-dark" >
   <div class="card-body card1" style="color: black;">Upgrade your card:</div>
 </div>

    <div class="col-sm-6 col ">

    <button onclick="cardF()" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Card Front</button>
    <button onclick="cardIL()" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Inside Left</button>
    <button onclick="cardIR()" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Inside Right</button>
    <button onclick="cardB()" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Card Back</button>

       <div class="photo" id="photo">

        <img src="/img/BC00008.jpg"/>

  </div>
    </div>

    <div class="col-sm-6">
      <div class="card-front" id="card"> Card Front<hr>
     </div>
  
  
      <div class="btn-group">
         <button type="button" class=" upload-btn btn-info btn-lg btn" data-toggle="modal" data-target="#myModal">Upload Your Card front</button>
       </div>

    </div>
</div>
<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Choose Card Front</h4>
        </div>
        <div class="modal-body">
          <div class="container">
            <div class="row">
              <div class="form-upload">
          <input id="uploadFile" placeholder="Choose File" disabled="disabled" />
          <div class="fileUpload btn btn-primary">
              <span>Choose File From Device</span>
              <form method="post" action="upload.php" enctype="multipart/form-data">
              <input name="file" id="uploadBtn" type="file" class="upload" />
                </div>
              </div>

            <div class="fileUpload btn btn-primary">
                <span>Submit</span>
                <input name="submit" type="submit" class="upload" />
            </div>
            </form>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>


  <footer class="page-footer font-small " style="background-color: #f8f8f8;">

<!-- Footer Links -->
<div class="container text-center ">

  <!-- Grid row -->
  <div class="row">

	<!-- Grid column -->
	<div class="col-md-2 text-md-left" style="margin-left:-85px">

	  <!-- Links -->
	  <h3 class="font-weight-bold mt-3 mb-4" id="custom-heading">Your Region</h3>

	  <ul class="list-unstyled">
		<li>
		  <a href="#!" id="country">UK</a>
		</li>
		<li>
		  <a href="#!" id="country">USA</a>
		</li>
		<li>
		  <a href="#!" id="country">CANADA</a>
		</li>
		
	  </ul>

	</div>
	<!-- Grid column -->

	<hr class="clearfix w-100 d-md-none">

	<!-- Grid column -->
	<div class="col-md-2 mx-auto text-md-left">

	  <!-- Links -->
	  <h3 class="font-weight-bold mt-3 mb-4" id="custom-heading">Helpful Links</h3>

	  <ul class="list-unstyled">
		<li >
		  <a href="#!" id="link">FAQ</a>
		</li>
		<li>
		  <a href="#!" id="link">Sign In</a>
		</li>
		<li>
		  <a href="#!" id="link">Create an Account</a>
		</li>
		<li>
		  <a href="#!" id="link">Prepay</a>
		</li>
		 <li>
		  <a href="#!" id="link">Customer Services</a>
		</li>
	  </ul>

	</div>
	<!-- Grid column -->

	<hr class="clearfix w-100 d-md-none">

	<!-- Grid column -->
	<div class="col-md-2 mx-auto text-md-left">

	  <!-- Links -->
	  <h3 class="font-weight-bold mt-3 mb-4 text-md-left" id="custom-heading">About Us</h3>

	  <ul class="list-unstyled">
		<li class="text-sm-md-lg-xl-left">
		  <a href="#!" id="link">Contact Us</a>
		</li>
		<li>
		  <a href="#!" id="link">Feedback</a>
		</li>
		<li>
		  <a href="#!" id="link">Cookies</a>
		</li>
		<li>
		  <a href="#!" id="link">Terms of Use</a>
		</li>
		 <li>
		  <a href="#!" id="link">Privacy Notice</a>
		</li>
	  </ul>

	</div>
	<!-- Grid column -->

	<hr class="clearfix w-100 d-md-none">

	<!-- Grid column -->
	<div class="col-md-2 mx-auto text text-md-left">

	  <!-- Links -->
	  <h3 class="font-weight-bold  mt-3 mb-4" id="custom-heading">Payment Methods</h3>

	  <ul class="list-unstyled">
		<div class="payment-imgs">
	   <a href="#"> <img style="width: 60px !important; height: 50px !important;" src="img/visa.png" alt="visa-pay" /></a>
		<a href="#"><img style="width: 60px !important; height: 50px !important;" src="img/mastercard.png" alt="mastercard" /></a>
	  </div>
	  <div class="payment-imgs">
		<a href="#"><img style="width: 60px !important; height: 50px !important;" src="img/maestro.png" alt="maestro" /></a>
		<a href="#"><img style="width: 60px !important; height: 50px !important;" src="img/ipay.png" alt="ipay" /></a>
	  </div>
	  </ul>

	</div>
	<!-- Grid column -->

<!-- Grid column -->
	<div class="col-md-2 text-md-left " style="margin-right: -85px;">

	  <!-- Links -->
	  <h3 class="font-weight-bold text-center mt-3 mb-4" id="custom-heading">Keep In Touch</h3>

	 <!-- Social buttons -->
<ul class="list-unstyled list-inline text-center">
  
<ul class="social-icons social-icons-colored social-icons-circle m-t-50 " style="padding-inline-start: 20px;">


  <li class="p-1"><a href="#" class="bg-facebook"><i class="fab fa-facebook-f"></i></a></li>
		<li><a href="#" class="bg-instagram"><i class="fab fa-instagram""></i></a></li>
			
	  <li class="p-1"><a href="#" class="bg-twitter"><i class="fab fa-twitter"></i></a></li>
  <li><a href="#" class="bg-youtube"><i class="fab fa-youtube"></i></a></li>
						  
						  
</ul>
</div>
 
</ul>
<!-- Social buttons -->
	</div>
	<!-- Grid column -->


  </div>
  <!-- Grid row -->

</div>
<!-- Footer Links -->

</footer> 



  </body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://kit.fontawesome.com/69b29b2f79.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script src="/js/dropdown.js"></script>
  <script>
  document.getElementById("uploadBtn").onchange = function () {
    document.getElementById("uploadFile").value = this.value;
  };
 
  </script>



<script>
function cardF() {
  document.getElementById("card").innerHTML = "Card Front<hr>";
  document.getElementById("photo").innerHTML = "<img src='/img/BC00008 Blank.jpg'/>"

}

function cardIR() {
  document.getElementById("card").innerHTML = "Card Inside Right<hr> <br>" + 
  "<button onclick='text3way1()' id='close-image'><img src='/img/3waytext.png' style='width:80px; height:80px;'></button>" +
"<button onclick='text1way1()'id='close-image'><img src='/img/1waytext.png' style='width:80px; height:80px;'></button>";
}
function text1way1(){
  document.getElementById("photo").innerHTML = "<button id='edit' class='btn btn-primary' onclick='edit1()' type='button'>Edit</button><button id='save' class='btn btn-primary' onclick='save1()' type='button'>Save</button><div class='click2edit'>Add Your text here</div>";
}

function text3way1(){
  document.getElementById("photo").innerHTML = "<button id='edit' class='btn btn-primary' onclick='edit1()' type='button'>Edit</button><button id='save' class='btn btn-primary' onclick='save1()' type='button'>Save</button><div class='click2edit'>Add Your text here</div>"
 + "<button id='edit' class='btn btn-primary' onclick='edit1()' type='button'>Edit</button><button id='save' class='btn btn-primary' onclick='save1()' type='button'>Save</button><div class='click3edit'>Add Your text here</div>"
  +"<button id='edit' class='btn btn-primary' onclick='edit1()' type='button'>Edit</button><button id='save' class='btn btn-primary' onclick='save1()' type='button'>Save</button><div class='click4edit'>Add Your text here</div>";
}

function text1way2(){
  document.getElementById("photo").innerHTML = "<button id='edit' class='btn btn-primary' onclick='edit2()' type='button'>Edit</button><button id='save' class='btn btn-primary' onclick='save2()' type='button'>Save</button><div class='click2edit'>Add Your text here</div>";
}

function text3way2(){
  document.getElementById("photo").innerHTML = "<button id='edit' class='btn btn-primary' onclick='edit2()' type='button'>Edit</button><button id='save' class='btn btn-primary' onclick='save2()' type='button'>Save</button><div class='click2edit'>Add Your text here</div>"
 + "<button id='edit' class='btn btn-primary' onclick='edit2()' type='button'>Edit</button><button id='save' class='btn btn-primary' onclick='save2()' type='button'>Save</button><div class='click3edit'>Add Your text here</div>"
  +"<button id='edit' class='btn btn-primary' onclick='edit2()' type='button'>Edit</button><button id='save' class='btn btn-primary' onclick='save2()' type='button'>Save</button><div class='click4edit'>Add Your text here</div>";
}

function cardIL() {
  document.getElementById("card").innerHTML = "Card Inside Left<hr> <br>" + 
  "<button onclick='text3way2()' id='close-image'><img src='/img/3waytext.png' style='width:80px; height:80px;'></button>" +
"<button onclick='text1way2()'id='close-image'><img src='/img/1waytext.png' style='width:80px; height:80px;'></button>";

}
function cardB() {
  document.getElementById("card").innerHTML = "Card Back <hr>";
  document.getElementById("photo").innerHTML = "<img src='/img/logo1.jpg' style = font size: 2px;></img>"
} 

</script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

<script>

 var edit1 = function() {
  $('.click2edit').summernote({focus: true});
  $('.click3edit').summernote({focus: true});
  $('.click4edit').summernote({focus: true});
};

var save1 = function() {
  var markup1 = $('.click2edit').summernote('code');
  $('.click2edit').summernote('destroy');
  var markup2 = $('.click3edit').summernote('code');
  $('.click3edit').summernote('destroy');
  var markup3 = $('.click4edit').summernote('code');
  $('.click4edit').summernote('destroy');
};

var edit2 = function() {
  $('.click2edit').summernote({focus: true});
  $('.click3edit').summernote({focus: true});
  $('.click4edit').summernote({focus: true});
};

var save2 = function() {
  var markup21 = $('.click2edit').summernote('code');
  $('.click2edit').summernote('destroy');
  var markup22 = $('.click3edit').summernote('code');
  $('.click3edit').summernote('destroy');
  var markup23 = $('.click4edit').summernote('code');
  $('.click4edit').summernote('destroy');
};

 </script>

</html>