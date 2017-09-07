<?php
if(!isset($_SESSION["isloggedin"])) {
	$_SESSION["isloggedin"] = false;
}

if(isset($_REQUEST["username"]) && $_REQUEST["username"] != "") {
	if($_REQUEST["username"] == "demouser" && $_REQUEST["password"] == "abc123") {
		$_SESSION["isloggedin"] = true;
	}   else {
		$_SESSION["isloggedin"] = false;
	}
}

if($_SESSION["isloggedin"] == false) {
	$_SESSION["err"] = true;
	header("Location: https://yourdomain.net");
	die();
} else {
	$_SESSION["err"] = false;
}
?>