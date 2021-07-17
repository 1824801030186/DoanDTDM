
	<?php
	$hostName = 'us-cdbr-east-04.cleardb.com';
	// khai báo biến username
	$userName = 'bbacc88c08f82b';
	//khai báo biến password
	$passWord = '9ba2f081';
	// khai báo biến databaseName
	$databaseName = 'heroku_bd0471f8f629435';
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
