
	<?php
	$hostName = 'us-cdbr-east-04.cleardb.com';
	// khai báo biến username
	$userName = 'bc98a4880a75fc';
	//khai báo biến password
	$passWord = '41fe92ef';
	// khai báo biến databaseName
	$databaseName = 'heroku_1ed2f66512e4afc';
	// khởi tạo kết nối
	try {
	    $connect = new PDO('mysql:host=' . $hostName . ';dbname=' . $databaseName, $userName, $passWord);
	    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	    $connect->query("set names utf8");
	}

		catch (PDOException $e)
		{
		    //thất bại
		    die($e->getMessage());
		}


	?>
