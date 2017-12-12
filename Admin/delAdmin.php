<?php session_start();

if(isset($_SESSION['user_admin'])){
	include "../config/koneksi.php";
	$username=$_SESSION['user_admin'];
		
		mysql_query("DELETE FROM tbl_admin WHERE user_admin='".$_GET['user']."'"); 
	
	header ("location:setupAdmin.php");
}
?>