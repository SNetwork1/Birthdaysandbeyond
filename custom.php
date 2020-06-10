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
    $db = mysqli_connect("localhost", "root", "", "images");
   
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

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script><title>Customize cards</title>
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- <link rel="stylesheet" type="text/css" href="/css/bootstrap.css" /> -->
    <link rel="stylesheet" type="text/css" href="/css/style.css" />
    <link rel="stylesheet" type="text/css" href="/css/main.css" />
    <link rel="stylesheet" type="text/css" href="/css/mega-menu.css" />


    <link rel = "icon" href ="img/birthday-card.png" type = "image/x-icon">

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
  border: 2px solid #e8e6eb;
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
  overflow: hidden;
  border: 2px solid #e8e6eb;
  background-color:white;
  display: inline-block;
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
  color: grey;
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

    color: grey;
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
  height: 57rem;
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
#close-image img {
    display: block;
    height: 130px;  
    width: 100px;
}

  #close-CSS {
    background-image: url( '/img/3waytext.png' );
    background-size: 100px 130px;
    height: 134px;  
    width: 104px;
}

  </style>
  <body style="background-color: #F7F7F7;">
    <!-- Header -->
      <nav class="navbar navbar-expand-lg navbar-light " style="background-color: #FFC1E1">


        <div  class= "container-fluid">

          <div class = "text-center" style="color: white;"><h1>Welcome to Birthdays and Beyond!</h1>

          </div>


          <div class="container">
            <div  class= "item">
            <ul class="navbar navbar-expand-lg navbar-light">


            <a button type="button" class="btn btn-secondary btn-lg">Store</a>
            <a button type="button" class="btn btn-secondary btn-lg">Newsletter</a>
            <a button type="button" class="btn btn-secondary btn-lg">FAQs</a>

            <div class="btn-group">
              <a button type="button" class="btn btn-secondary btn-lg dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                ENG
              </a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Language 1</a>
                <a class="dropdown-item" href="#">Language 2</a>
              </div>
            <div class="btn-group">
              <a button type="button" class="btn btn-secondary btn-lg dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                USD
              </a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Currency 1</a>
                <a class="dropdown-item" href="#">Currency 2</a>
              </div>
              </div>
         </div>
        </ul>
        </div>
      </div>

      <div class= "item">
        <a href="account-signup.php" style="color: black; padding-left: 50px;">
        <i class="fas fa-user " style="font-size:30px; "></i>
        <div class= "text-center" style="color: black; padding-left: 50px">
        <br><b>Account</b><br>Login/Join</div> </a>

      </div>
      <div class= "item">
        <a href="#" style="color: black; padding-left: 50px; ">
          <i class="fas fa-shopping-cart" style="font-size:30px;">
          </i>
        <div style="color: black; padding-left: 50px">
        <br> <b>Cart</b> <br>35.20$</div>
      </a>
     </div>

    </div>
</nav>

                                <!---Menu Bar Starts--->

    <div class="container-1">
   <!--  <a class = "navbar-brand" href="/index.html">
        <img src="/img/Logo B&B.png" width="170" height="50" class="d-inline-block align-top" alt="">
      </a>-->
    <nav class="navbar navbar-expand-sm navbar-light sticky-top" style="background-color: #f6c0e0">
           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto justify-content-end ">
          <div class="container">
          <li class="nav-item active">

            <a class = "navbar-brand-lg" href="index.html">
              <img src="/img/bb-logo.jpeg" width="80" height="60" class="inline align-top" styles="top:80;" alt="">
            </a>

                                      <!--- Home
            <a class="btn btn-light" class="text-white bg-dark" style = "background-color: #ff66d9;" href="index.html" type="button" aria-haspopup="true" aria-expanded="false" >Home</a>
          </li>

                                     <!--   Cards   -->

          <li class="nav-item dropdown">
          <a href="cards.html" class="btn btn-light btn-lg dropdown-toggle" style = "background-color: #ff66d9;" role="button" id="dropdownMenuLink"  data-toggle="dropdown" aria-haspopup="true">
            Cards
          </a>

          <div class="dropdown-menu mega-menu" aria-labelledby="dropdownMenuLink">
         <div class="row">
          <div class= "col-md-3">
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#"><b>Popular</b></a>
          <div class="dropdown-divider"></div>

          <a class="dropdown-item"href="">Anniversary</a>
          <a class="dropdown-item"href="">Bestsellers</a>
          <a class="dropdown-item"href="">Birthday Cards</a>
          <a class="dropdown-item"href="">Engagements</a>
          <a class="dropdown-item"href="">Giant Cards</a>
          <a class="dropdown-item"href="">Leaving</a>
          <a class="dropdown-item"href="">New in Cards</a>
          <a class="dropdown-item"href="">Wedding</a>

      <---
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#"><b>Seasonal</b></a>
          <div class="dropdown-divider"></div>

          <a class="dropdown-item"href="">Christmas</a>
          <a class="dropdown-item"href="">Easter</a>
          <a class="dropdown-item"href="">Father's Day</a>
          <a class="dropdown-item"href="">Mother's Day</a>
          <a class="dropdown-item"href="">Valantine's Day</a>



        </div>
        <div class= "col-md-3">
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#"><b>Congrats/Goodluck</b></a>
          <div class="dropdown-divider"></div>

          <a class="dropdown-item"href="">All Congratulations</a>
          <a class="dropdown-item"href="">Good Luck</a>
          <a class="dropdown-item"href="">Graduation</a>
          <a class="dropdown-item"href="">New Job</a>
          <a class="dropdown-item"href="">Retirement</a>



          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#"><b>Baby</b></a>
          <div class="dropdown-divider"></div>


          <a class="dropdown-item"href="">Announcement</a>
          <a class="dropdown-item"href="">Baby Shower</a>
          <a class="dropdown-item"href="">New Baby</a>
          <a class="dropdown-item"href="">Pregnancy</a>
        </div>
        <div class= "col-md-2">
        <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#"><b>Baby</b></a>
          <div class="dropdown-divider"></div>


          <a class="dropdown-item"href="">Announcement</a>
          <a class="dropdown-item"href="">Baby Shower</a>
          <a class="dropdown-item"href="">New Baby</a>
          <a class="dropdown-item"href="">Pregnancy</a>



            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#"><b>Baby</b></a>
            <div class="dropdown-divider"></div>


            <a class="dropdown-item"href="">Announcement</a>
            <a class="dropdown-item"href="">Baby Shower</a>
            <a class="dropdown-item"href="">New Baby</a>
            <a class="dropdown-item"href="">Pregnancy</a>

          </div>
          <div class= "col-md-1">
          <img src="/img/card.jpg" width="240px" height="400px"  alt="">

          </div>

          <!--Birthday Cards-->

        <li class="nav-item dropdown">
            <a button class="btn btn-light btn-lg dropdown-toggle" style = "background-color: #ff66d9;" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             Birthday Cards
            </a>
            </a>
            <div class="dropdown-menu mega-menu" aria-labelledby="navbarDropdown">
              <div class="row">
                <div class= "col-md-3">
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#"><b>Him</b></a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item"href="">Boyfriend</a>
              <a class="dropdown-item"href="">Brother</a>
              <a class="dropdown-item" href="">Dad</a>
              <a class="dropdown-item" href="">Grandad</a>
              <a class="dropdown-item" href="">Husband</a>
              <a class="dropdown-item" href="">Son</a>

              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#"><b>Her</b></a>
              <div class="dropdown-divider"></div>

              <a class="dropdown-item" href="">Daughter</a>
              <a class="dropdown-item" href="">Girlfriend</a>
              <a class="dropdown-item" href="">Granma</a>
              <a class="dropdown-item" href="">Mum</a>
              <a class="dropdown-item" href="">Sister</a>
              <a class="dropdown-item" href="">Wife</a>
          </div>

          <div class= "col-md-3">
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#"><b>Kids</b></a>
              <div class="dropdown-divider"></div>

              <a class="dropdown-item"  href="#">Boy</a>
              <a class="dropdown-item" href="">Girl</a>

              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#"><b>Age</b></a>
              <div class="dropdown-divider"></div>

              <a class="dropdown-item" href="">1st Birthday</a>
              <a class="dropdown-item" href="">18th Birthday</a>
              <a class="dropdown-item" href="">21st Birthday</a>
              <a class="dropdown-item" href="">30th  Birthday</a>
              <a class="dropdown-item" href="">40th Birthday</a>
              <a class="dropdown-item" href="">50th Birthday</a>
              <a class="dropdown-item" href="">60th Birthday</a>
              <a class="dropdown-item" href="">65th Birthday</a>
              <a class="dropdown-item" href="">70th Birthday</a>
              <a class="dropdown-item" href="">80th Birthday</a>
              <a class="dropdown-item" href="">All Ages</a>
</div>

          <div class= "col-md-3">
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#"><b>Styles</b></a>
              <div class="dropdown-divider"></div>

              <a class="dropdown-item" href="">Chocolate Cards</a>
              <a class="dropdown-item" href="">Create Your Own</a>
              <a class="dropdown-item" href="">Funny</a>
              <a class="dropdown-item" href="">Non Photo</a>
              <a class="dropdown-item" href="">Photo</a>
              <a class="dropdown-item" href="">Photo Collage</a>
              <a class="dropdown-item" href="">Rude</a>

              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#"><b>Populars</b></a>
              <div class="dropdown-divider"></div>

              <a class="dropdown-item" href="">All Birthday</a>
              <a class="dropdown-item" href="">Best Seller</a>
              <a class="dropdown-item" href="">Friends</a>
              <a class="dropdown-item" href="">New in</a>
            </div>

</div>

                            <!--   Post Cards        -->

            <li class="nav-item dropdown">
            <a button class="btn btn-light btn-lg dropdown-toggle" style = "background-color: #ff66d9;" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             Postcards
            </a>
            </a>

            <div class="dropdown-menu mega-menu" aria-labelledby="navbarDropdown">
              <div class="row">
                <div class= "col-md-3">
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#"><b>I'm Looking for</b></a>
              <div class="dropdown-divider"></div>

              <a class="dropdown-item" href="#">All Postcards</a>
              <a class="dropdown-item" href="#">Birthday Postcards</a>
              <a class="dropdown-item" href="#">Father's Day POstcards</a>
              <a class="dropdown-item" href="#">General Black Postcards</a>
              <a class="dropdown-item" href="#">New Baby Postcards</a>
              <a class="dropdown-item" href="#">Wedding Postcards</a>
              <a class="dropdown-item" href="#">Thank you Postcards</a>
                </div>
                <div class= "col-md-3">
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#"><b>Who is for?</b></a>
              <div class="dropdown-divider"></div>

              <a class="dropdown-item" href="#">From Couples</a>
              <a class="dropdown-item" href="#">From Families</a>
              <a class="dropdown-item" href="#">From Him</a>
              <a class="dropdown-item" href="#">From Her</a>
              <a class="dropdown-item" href="#">From Kids</a>
           </div>
           <div class= "col-md-3">
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#"><b>Postcards by Type</b></a>
              <div class="dropdown-divider"></div>

              <a class="dropdown-item" href="#">Non Photo Postcards</a>
              <a class="dropdown-item" href="#">Photo Postcards</a>
           </div>

</div>

                            <!-- Personalized Gifts -->

         <li class="nav-item dropdown">
            <a button class="btn btn-light btn-lg dropdown-toggle" style = "background-color: #ff66d9;" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             Personalized Gifts
            </a>
            </a>

            <div class="dropdown-menu mega-menu" aria-labelledby="navbarDropdown">
              <div class="row">
                <div class= "col-md-3">

              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#"><b>I'm Looking For..</b></a>
              <div class="dropdown-divider"></div>

              <a class="dropdown-item" href="#">Alcohol</a>
              <a class="dropdown-item" href="#">Aprons</a>
              <a class="dropdown-item" href="#">Backpacks</a>
              <a class="dropdown-item" href="#">Balloons</a>
              <a class="dropdown-item" href="#">Books</a>
              <a class="dropdown-item" href="#">Calanders</a>
              <a class="dropdown-item" href="#">Canvas Prints</a>
              <a class="dropdown-item" href="#">Coasters</a>
                </div>
                <div class= "col-md-3">
              <a class="dropdown-item" href="#">Cushions</a>
              <a class="dropdown-item" href="#">Diaries</a>
              <a class="dropdown-item" href="#">Engraved Frames</a>
              <a class="dropdown-item" href="#">Glassware</a>
              <a class="dropdown-item" href="#">Keyrings</a>
              <a class="dropdown-item" href="#">Mugs</a>
              <a class="dropdown-item" href="#">Notebooks</a>
              <a class="dropdown-item" href="#">Pens</a>
              <a class="dropdown-item" href="#">Photo Blocks</a>
            </div>  <div class= "col-md-3">
              <a class="dropdown-item" href="#">Poster</a>
              <a class="dropdown-item" href="#">Socks</a>
              <a class="dropdown-item" href="#">T-shirts</a>
              <a class="dropdown-item" href="#">Wall Art</a>
              <a class="dropdown-item" href="#">Water Bottles</a>
              <a class="dropdown-item" href="#">Wedding Stationary</a>
            </div>
            </div>
          </li>




          <li class="nav-item dropdown">
            <a class="btn btn-light btn-lg dropdown-toggle" style = "background-color: #ff66d9;" type="button" id="dropdownMenuButton" data-toggle="dropdown">
             Flowers
            </a>
            </a>
            <div class="dropdown-menu " aria-labelledby="navbarDropdown">

              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#"><b>Occassions</b></a>
              <div class="dropdown-divider"></div>

              <a class="dropdown-item" href="#">Birthday</a>


              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#"><b>Themes</b></a>
              <div class="dropdown-divider"></div>

              <a class="dropdown-item" href="#">Under $30</a>

              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#"><b>Type</b></a>
              <div class="dropdown-divider"></div>


              <a class="dropdown-item" href="#">Letterbox Flowers</a>

            </div>
          </li>
        </ul>

        <form class="form-inline my-2 my-lg-0">
          <div class="container">
          <input class="form-control input" class="h-auto d-inline-block" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-secondary btn-group-lg" type="submit">Search</button></div>
        </form>

       </div>
      </div>
    </nav>

  </div>


</style>



<div class="container">
<h2 class="my-h2"> You Can Customize Your Card Here!</h2>
<div class="tab"style="color: grey">Giant (A3)<br>$9.99</div>
<div class="tab" style="color: grey">Large (A4)<br>$5.99</div>
<div class="tab" style="color: grey">Standard (A5)<br>$2.29</div>
<div class="tab" style="color: grey">Small (A6)<br>$1.99</div>
<div class="tab-long"><button type="button" class="btn btn-secondary btn-tab"><u>Sizes & Pricing</u></button>
<div class="space"></div>
<div class="space"></div>
<div class="space"></div>
<div class="space"></div>
<h2 class="my-h2-inline" style="color: grey"><b>QTY:</b></h2>
<div class="space" style="color: grey" ></div>
<input type="text" style="color: grey" class="input-tab"/>
<div class="space"></div>
<div class="space"></div>
<button onclick= "save()" type="button" class="btn btn-cont btn-lg btn-secondary">Continue</button>
</div>
<div class="card bg-light text-dark" >
   <div class="card-body card1" style="color: #F7F7F7;">Upgrade your card:</div>
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
  "<button onclick='text3way1()' id='close-image'><img src='/img/3waytext.png'></button>" +
"<button onclick='text1way1()'id='close-image'><img src='/img/1waytext.png'></button>";
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
  "<button onclick='text3way2()' id='close-image'><img src='/img/3waytext.png'></button>" +
"<button onclick='text1way2()'id='close-image'><img src='/img/1waytext.png'></button>";

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