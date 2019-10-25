<?php
    session_start(); 

	require('langswitcher.php');
	require('db_connector.php');
	require('get_base_info.php');

	change_language($lang_list); //change language based on request on session
	$connection = connect_to_db(); // create connection to db
	
	// making some kind of cache
	if (!isset($_SESSION['base_info']))
		$_SESSION['base_info'] = get_base_info_from_db($connection); // get base info from db

	// prettify vars
	$lang = $_SESSION['lang'];
	$base_info = $_SESSION['base_info'];

	$connection = null; //close db connection
?>