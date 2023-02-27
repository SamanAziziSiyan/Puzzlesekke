<?php
	function createUser($firstName, $lastName, $userName, $passWord, $email, $mobile, $role)
	{
		global $connect, $tbl_users;
		$firstName = sanitize($firstName);
		$lastName = sanitize($lastName);
		$userName = sanitize($userName);
		$passWord = sanitize($passWord);
		$email = sanitize($email);
		$mobile = intval($mobile);
		$role = intval($role);
		
		$sql = ("INSERT `$tbl_users` SET `first_name`=?,
		`last_name`=?,`user_name`=?,`email`=?,`password`=?,`mobile`=?,`role`=?");
		$result = $connect->prepare($sql);
		$result->bindValue(1,$firstName);
		$result->bindValue(2,$lastName);
		$result->bindValue(3,$userName);
		$result->bindValue(4,$email);
		$result->bindValue(5,$passWord);
		$result->bindValue(6,$mobile);
		$result->bindValue(7,$role);
		
		$result->execute();
		return $result;
	}