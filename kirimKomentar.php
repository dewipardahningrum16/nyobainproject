<?php
include "config/koneksi.php";
	
	$nama=ucwords(strtolower($_POST['nama']));
	mysql_query("INSERT INTO komentar (nama,komentar,waktu) value ('$nama', '$_POST[komentar]', NOW())") or die(mysql_error());
	
	header('location:index.html');
?>