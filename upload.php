<?php
if(isset($_POST['submit'])){
  $db = mysqli_connect("localhost", "root", "", "uploads");
  $image = $_FILES['file']['name'];
  // Get text
      // image file directory
  $target = "images/".basename($image);

  $sql = "INSERT INTO images (image) VALUES ('$image')";
  // execute query
  mysqli_query($db, $sql);

  move_uploaded_file($_FILES['file']['tmp_name'], $target);

 $target = "images/".basename($image);

$result = mysqli_query($db, "SELECT * FROM images");
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script><title>Hello, world!</title>
  <style>
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

::placeholder{
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

    color: white;
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
  height: 66rem;
  margin: 2rem;
  padding: 2rem;
  text-align: left;
  font-size: 2.5rem;
  color: #280966;
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


  </style>
  </head>
  <body>
    <!--Top navbar-->
    <nav class="navbar navbar-inverse bg-pink no-border-pink">
  <div class="container-fluid">
    <div class="navbar-header">
      <h4 class="white">Welcome to Birthdays and Beyond!</h4>
     </div>
    <ul class="nav navbar-nav right">
      <li class="my-nav"><h4>Store</h4></li>
      <li class="my-nav"><h4>Newsletter</h4></li>
      <li class="my-nav"><h4>FAQ</h4></li>
      <li class="dropdown my-nav">
   <h4 class="dropdown-toggle" data-toggle="dropdown">ENG
   <span class="caret"></span></h4>
   <ul class="dropdown-menu">
     <li><a href="#">Page 1-1</a></li>
     <li><a href="#">Page 1-2</a></li>
     <li><a href="#">Page 1-3</a></li>
   </ul>
 </li>
 <li class="dropdown my-nav">
<h4 class="dropdown-toggle" data-toggle="dropdown" href="#">USD
<span class="caret"></span></h4>
<ul class="dropdown-menu">
  <li><a href="#">Page 1-1</a></li>
  <li><a href="#">Page 1-2</a></li>
  <li><a href="#">Page 1-3</a></li>
</ul>
</li>
    </ul>

  </div>
</nav>
<!--Top Navbar end-->

<!--Bottom Navbar-->
  <nav class="navbar">
    <div class="container-fluid">
      <div class="navbar-header">
        <h1 class="nav navbar-nav my-h1"> Birthdays and Beyond </h1>
      </div>
<form class="navbar-form navbar-left" action="/action_page.php">
<div class="input-group">
  <input type="text" class = "my-search-input" placeholder="Search...">
  <div class="input-group-btn">
<button class="btn btn-default my-search-btn" type="submit">
      <i class="glyphicon glyphicon-search my-search-icon"></i>
        </button>
        <div class="space"> </div>
<button class="btn btn-info btn-lg my-login-btn">
          <span class="glyphicon glyphicon-log-in"></span> Log in
        </button>
        <div class="space"> </div>
        <button class="btn btn-info btn-lg my-login-btn">
         <span class="glyphicon glyphicon-shopping-cart"></span> Shopping Cart
       </button>
  </div>
</div>
</form>
</nav>
<!-- Bottom navbar end-->

<!--Fixed navbar-->
<nav class="navbar navbar-inverse navbar-fixed bg-white no-border-white">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
        <li class="my-fixed-nav"><h3>Home</h43></li>
        <li class="my-fixed-nav"><h3>Cards</h43></li>
        <li class="my-fixed-nav"><h3>Birthday Cards</h43></li>
        <li class="my-fixed-nav"><h3>Postcards</h43></li>
        <li class="my-fixed-nav"><h3>Personalized Gifts</h43></li>
        <li class="my-fixed-nav"><h3>Flowers</h43></li>
    </ul>
  </div>
</nav>
<div class="container">
  <h2 class="my-h2"> You Can Customize Your Card Here!</h2>
  <div class="tab">
Giant (A3)<br>$9.99</div>
<div class="tab">Large (A4)<br>$5.99</div>
<div class="tab">Standard (A5)<br>$2.29</div>
<div class="tab">Small (A6)<br>$1.99</div>
<div class="tab-long"><button type="button" class="btn btn-secondary btn-tab"><u>Sizes & Pricing</u></button>
<div class="space"></div>
<div class="space"></div>
<div class="space"></div>
<div class="space"></div>
<h2 class="my-h2-inline"><b>QTY:</b></h2>
<div class="space"></div>
<input type="text" class="input-tab"/>
<div class="space"></div>
<div class="space"></div>
<button type="button" class="btn btn-cont btn-lg btn-secondary">Continue</button>
</div>
<div class="card bg-light text-dark">
   <div class="card-body card1">Upgrade your card:</div>
 </div>

    <div class="col-sm-6 col ">
      <div class="tab">Card Front</div>
      <div class="tab">Inside Right</div>
      <div class="tab">Inside Left</div>
      <div class="tab">Card Back</div>

       <div class="photo">
         <?php

         if(isset($_POST['submit'])){

           $image = $_FILES['file']['name'];
           // Get text
               // image file directory
           $target = "images/".basename($image);

           $sql = "INSERT INTO images (image) VALUES ('$image')";
           // execute query
           mysqli_query($db, $sql);

           move_uploaded_file($_FILES['file']['tmp_name'], $target);

          $target = "images/".basename($image);
         $db = mysqli_connect("localhost", "root", "", "uploads");
         $result = mysqli_query($db, "SELECT * FROM images ORDER BY id DESC");
         while ($row = mysqli_fetch_assoc($result)){
           $imageURL = 'images/'.$row['image'];
           ?>

        <img src="<?php echo $imageURL;?>"/>
  <?php
  }
    }
  }
    ?>
  </div>
    </div>


    <div class="col-sm-6 col">
      <div class="card-front">Card Front:<hr>
        <div class="card1">

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
              <form method="post" action="" enctype="multipart/form-data">
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

  <script>
  document.getElementById("uploadBtn").onchange = function () {
    document.getElementById("uploadFile").value = this.value;
  };
  </script>
</html>
