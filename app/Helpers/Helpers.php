<?php
session_start();
if (!function_exists('sessionSet')) {
	function sessionSet($key, $value) {
		$_SESSION[$key] = $value;
	}
}
if (!function_exists('sessionGet')) {
	function sessionGet($key) {
		$session = $_SESSION;
		return $session[$key];
	}
}
if (!function_exists('sessionHas')) {
	function sessionHas($key) {
		if(isset($_SESSION[$key]) && !empty($_SESSION[$key])) {
		   return true;
		} else {
			return false;
		}
	}
}
if (!function_exists('sessionDestroy')) {
	function sessionDestroy($key) {
		session_destroy();
	}
}
if (!function_exists('getNameRole')) {
	function getNameRole($role) {
		if ($role == 1) {
			return 'Administrator';
		}
		if ($role == 2) {
			return 'Employer';
		}
		if ($role == 3) {
			return 'Jobseeker';
		}
	}
}