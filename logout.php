<?php include "db.php"; ?>
<?php session_start(); ?>

<?php 

$_SESSION['id']=null;
$_SESSION['username']=null;
$_SESSION['password']=null;
$_SESSION['email']=null;
header("Location: account-login.php");




?>