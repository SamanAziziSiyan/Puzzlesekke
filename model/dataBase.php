<?php
	$host = "localhost";
	$dbName = "puzzle-sekke";
	$userName = "root";
	$passWord = "";
	$setName = array(PDO::MYSQL_ATTR_INIT_COMMAND =>'SET NAMES utf8');
	try {
		$connect = new PDO("mysql:host=$host;dbname=$dbName;",$userName,$passWord,$setName);
//		echo 'با موفقیت به دیتابیس وصل شدید...';
	} catch(PDOException $e) {
		echo 'خطا در اتصال به دیتابیس' . $e->getMessage();
	}
	
	$tbl_users = "ps_users";