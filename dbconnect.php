<?php
// establishing the MySQLi connection
//ini_set('error_reporting', E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED);
$con = mysqli_connect("localhost","sydneysoft_birthdaysandbeyond","Rv+Jfh[vZ-!O","sydneysoft_birthdaysandbeyond");
if (mysqli_connect_errno()){
	echo "MySQLi Connection was not established: " . mysqli_connect_error();
}

else
	echo "Database connection established!!!";

?>

