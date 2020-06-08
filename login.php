<?php include "db.php"; ?>
<?php session_start(); ?>
<?php 

	// session_start();

	if (isset($_POST['login'])&!empty($_POST['login'])) {
	 $username = $_POST['username'];
     $password = $_POST['password'];
     
     $username = mysqli_real_escape_string($conn, $username);
     $password = mysqli_real_escape_string($conn, $password);
    
     $query = "SELECT * FROM user WHERE username='{$username}'";
     $result = mysqli_query($conn,$query);
     if (!$result) {
         die("Query Failed".mysqli_error($conn));
     }
     while ($row = mysqli_fetch_array($result) ) {

         $db_username = $row['username'];
         $db_password = $row['password'];

     }
    
     $password = crypt($password,$db_password);


     if ($username !== $db_username && $password !== $db_password) {
        header("Location: account-login.php");

     }
     elseif ($username == $db_username && $password == $db_password) {
        
        $_SESSION['id']=$db_id;
        $_SESSION['username']=$db_username;
        $_SESSION['password']=$db_password;
        $_SESSION['email']=$db_email;

        header("Location: userdetail.php");
        
     }else {
         header("Location: account-login.php");
     }




	}

?>