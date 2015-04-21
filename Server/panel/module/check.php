<?php

if (!empty($_COOKIE['sid'])) {
    // check session id in cookies
    session_id($_COOKIE['sid']);
}

session_start();
require_once '../classes/Auth.class.php';

if (!Auth\User::isAuthorized()){
	header( 'Refresh: 0; url=../login.php' );
}

?>

