
	<?php
	$hostName = 'us-cdbr-east-04.cleardb.com';
	// khai báo biến username
	$userName = 'bd3265329a4f5a';
	//khai báo biến password
	$passWord = 'ac92706f';
	// khai báo biến databaseName
	$databaseName = 'heroku_1fffb9d0d864fd6';
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
