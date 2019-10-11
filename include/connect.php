<?php
	// $tenmaychu='localhost';
	// $tentaikhoan='root';
	// $pass='';
	// $csdl='dienthoai';
	// $conn=mysqli_connect($tenmaychu,$tentaikhoan,$pass,$csdl) or die('Ko kết nối được');

	$serverName = "DUCMANH\SQLEXPRESS";
	$connectionInfo = array( "Database"=>"dienthoai","UID"=>"","PWD"=>"");
	$conn = sqlsrv_connect( $serverName, $connectionInfo);

?>