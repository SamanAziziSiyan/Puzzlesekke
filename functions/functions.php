<?php
//	change Title Automatically
	function setTitle()
	{
		$page = basename($_SERVER["REQUEST_URI"]);
		$pageClean = str_replace(".php", "", "$page");
		switch ($pageClean) {
			case "profile":
				echo "پروفایل | پازل سکه";
				break;
			case "Login-register":
				echo "ورود | ثبت نام";
				break;
			case "single":
				echo "محصولات | پازل سکه";
				break;
			default:
				echo "صفحه اصلی | پازل سکه";
		}
		return;
	}
	
//	sanitize inputs
function sanitize($value){
		$level1 = trim($value);
		$level2=strip_tags($level1);
		return $level2;
}