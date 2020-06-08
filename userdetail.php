<?php include "db.php"; ?>
<?php session_start(); ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Birthdays and Beyond</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS only -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/main.css" />
    
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


    <link rel = "icon" href ="img/birthday-card.png" type = "image/x-icon"> 

</head>
  <style type="text/css">

  
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
        <a href="logout.php" style="color: black; padding-left: 50px;">
        <i class="fas fa-power-off " style="font-size:30px; "></i>
        <div class= "text-center" style="color: black; padding-left: 50px; margin-top: -25px;">
        <br><b>Logout</b></div> </a>
     
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


  
  
   
<!--Header-->
<div class="container" style="max-width: inherit;">
       <table class="table table-striped">
       
           <?php
              if (isset($_SESSION['username'])) {
                $username = $_SESSION['username'];
                $query="SELECT * FROM user where username ='{$username}'";
                $select_users = mysqli_query($conn,$query);
                if (!$select_users) {

                    die("query failed".mysqli_error($conn));
                }
                while ($row = mysqli_fetch_assoc($select_users)) {
                   
                    $username =$row['username'];
                    $email =$row['email'];
                    
                    $password=$row['password'];
              
                        
                          ?>  
                <tr>
            
                    <td colspan='1'>
                        <h1>User Details</h1>
                        
                    <form class='well form-horizontal' style='background-color: #ffc1e1;'>
                    
                        <fieldset>
                        
                        <button type='button' class='btn btn-default btn-lg' style='margin: 2%;'><span class='glyphicon glyphicon-edit' style='padding: inherit;'></span>Edit Profile</button>
                            
                        <div class='form-group'>
                                <label class='col-md-4 control-label'>Full Name</label>
                                <div class='col-md-8 inputGroupContainer'>
                                <div class='input-group'><span class='input-group-addon' style='width: auto;'><i class='glyphicon glyphicon-user'></i></span><input id='fullName' name='fullName' placeholder='Full Name' class='form-control' required='true' value='{$name}' type='text'></div>
                                </div>
                            </div>
                            <div class='form-group'>
                                <label class='col-md-4 control-label'>User Name</label>
                                <div class='col-md-8 inputGroupContainer'>
                                <div class='input-group'><span class='input-group-addon' style='width: auto;'><i class='glyphicon glyphicon-user'></i></span><input id='addressLine1' name='username' placeholder='User Name' class='form-control' required='true' value='<?php echo $username; ?>' type='text'></div>
                                </div>
                            </div>
                            <div class='form-group'>
                                <label class='col-md-4 control-label'>Phone Number</label>
                                <div class='col-md-8 inputGroupContainer'>
                                <div class='input-group'><span class='input-group-addon' style='width: auto;'><i class='glyphicon glyphicon-earphone'></i></span><input id='phoneNumber' name='phoneNumber' placeholder='Phone Number' class='form-control' required='true' value='{$phone}' type='text'></div>
                                </div>
                            </div>
                            <div class='form-group'>
                                <label class='col-md-4 control-label'>Email</label>
                                <div class='col-md-8 inputGroupContainer'>
                                <div class='input-group'><span class='input-group-addon' style='width: auto;'><i class='glyphicon glyphicon-envelope'></i></span><input id='email' name='email' placeholder='Email' class='form-control' required='true' value='{$email}' type='text'></div>
                                </div>
                            </div>
                            
                            
                            <div class='form-group'>
                                <label class='col-md-4 control-label'>Password</label>
                                <div class='col-md-8 inputGroupContainer'>
                                <div class='input-group'><span class='input-group-addon' style='width: auto;'><i class='glyphicon glyphicon-lock'></i></span><input id='postcode' name='password' placeholder='Password' class='form-control' required='true' value='<?php echo $password; ?>' type='text'></div>
                                </div>
                            </div>
                            
                            
                        
                        </fieldset>
                        
                    </form>
                    
                    </td>
                    
                </tr>
             <?php }} ?>
          </tbody>
           
       </table>
    </div>

   <!--Footer-->      
 <footer style="padding-top: 20px;">
    <div class="container">
      <div class="row">
        <div class="region_setion col-md-3">
          <h3 style="font-weight: bold; color: black; ">Your Region</h3>
          <ul class="ul-lis">
            <li><a href="#" style="color: #ff66d9; font-weight: bold;">UK</a></li>
            <li><a href="#" style="color: #ff66d9; font-weight: bold;">USA</a></li>
            <li><a href="#" style="color: #ff66d9; font-weight: bold;">CANADA</a></li>
          </ul>
        </div>
        <div class="helpful_links col-md-3">
          <h3 style="font-weight: bold; color: black;">Helpful Link</h3>
          <ul class="ul-lis">
            <li><a href="#" style="font-weight: bold;">FAQs</a></li>
            <li><a href="#" style="font-weight: bold;">Sing In</a></li>
            <li><a href="#" style="font-weight: bold;">Create an Account</a></li>
            <li><a href="#" style="font-weight: bold;">Prepay</a></li>
            <li><a href="#" style="font-weight: bold;">Customer Services</a></li>
          </ul>
        </div>
        <div class="about-us col-md-3">
          <h3 style="font-weight: bold; color: black;">About Us</h3>
          <ul class="ul-lis">
            <li><a href="#" style="font-weight: bold;">Contact Us</a></li>
            <li><a href="#" style="font-weight: bold;">Feedback</a></li>
            <li><a href="#" style="font-weight: bold;">Cookies</a></li>
            <li><a href="#" style="font-weight: bold;">Terms of Use</a></li>
            <li><a href="#" style="font-weight: bold;">Privacy notice</a></li>
          </ul>
        </div>
        <div class="payment-method-section col-md-3">
          <h3 style="font-weight: bold; color:black; ">Payment Methods</h3>
          <div class="payment-imgs">
           <a href="#"> <img src="img/visa.png" alt="visa-pay" /></a>
            <a href="#"><img src="img/mastercard.png" alt="visa-pay" /></a>
          </div>
          <div class="payment-imgs">
            <a href="#"><img src="img/maestro.png" alt="visa-pay" /></a>
            <a href="#"><img src="img/ipay.png" alt="visa-pay" /></a>
          </div>
  
          <div class="keepintouch">
            <h3 style="font-weight: bold; color: black;">Keep in Touch</h3>
            <a href="#" class="fab fa-facebook" style="font-size:30px;" ></a> 
            <a href="#" class="fa fa1 fa-instagram"></a>
            <a href="#" class="fa fa1 fa-google"></a>
            <a href="#" class="fa fa1 fa-youtube"></a>
          </div>
  
  
        </div>
      </div>
    </div>
  </footer>
  <div class="pink-line"></div>
  </div>
    <!-- Footer -->
  </div>
  </body>
  <!-- JS, Popper.js, and jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/69b29b2f79.js" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <script src="js/dropdown.js"></script>
  <script>
      $(document).ready(function() {

    
var readURL = function(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('.avatar').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}


$(".file-upload").on('change', function(){
    readURL(this);
});
});
  </script>
  </html>