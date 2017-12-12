<?php
	$host	= "localhost";
	$user	= "root";
	$pass	= "";
	$db		= "db_ninatour";
	
	$kon = mysql_connect($host, $user, $pass);
	$kondb = mysql_select_db($db, $kon);
	
	
	//test koneksi
	
	/*if($kon){
		echo "Terkoneksi dengan MySQL";
		if($kondb){
			echo "DataBase $db yang dipilih";
		}else{
			echo "DataBase tidak ada";
		}
	}else{
		echo "Koneksi GAGAL";
	}
	*/
?>