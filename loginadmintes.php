<?php
  class loginadmintes extends PHPUnit_Framework_TestCase
  {
      public function testlogin()
      {
      		include "koneksi.php";
		    $username = "ismo";
		    $password = "123456";
		    $level  = "admin";
		    $status = "Y";

		    $aktif=false;
			$query=mysql_query("select * from tbl_admin where user_admin='$username' and pass_admin='$password' and aktif='$status' and level='$level'");
			$cek=mysql_num_rows($query);

		    if($cek) $aktif = true;
		    $this->assertTrue($aktif);
     }
  }
