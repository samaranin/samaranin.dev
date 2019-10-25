<?php 
	session_start(); 

	require('scripts/langswitcher.php');
	require('scripts/db_connector.php');
	require('scripts/get_base_info.php');

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

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<meta name="description" content="Free Web tutorials">
  	<meta name="keywords" content="HTML,CSS,XML,JavaScript">
  	<meta name="author" content="John Doe">

	<title><?php echo get_field($base_info, 'title', $lang); ?></title>

	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link rel="icon" href="favicon.ico" type="image/x-icon">	

	<link href="https://fonts.googleapis.com/css?family=Reem+Kufi|Roboto:300" rel="stylesheet">
	<link href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" rel="stylesheet">
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/styles.css">
	<!--link rel="stylesheet" href="css/themes/indigo-white.css"> -->
	<!-- <link rel="stylesheet" href="css/themes/green-white.css"> -->
	<!-- <link rel="stylesheet" href="css/themes/red-white.css"> -->
	<link rel="stylesheet" href="css/themes/grey-white.css">
	<!-- <link rel="stylesheet" href="css/themes/white-indigo.css"> -->
	<!-- <link rel="stylesheet" href="css/themes/white-blue.css"> -->
	<!-- <link rel="stylesheet" href="css/themes/white-grey.css"> -->
	<!-- <link rel="stylesheet" href="css/themes/white-red.css"> -->
	<!-- <link rel="stylesheet" href="css/themes/yellow-black.css"> -->
</head>
<body>
	<main>
		<!-- Show Lang Switcher -->
		<?php echo lang_switcher($lang_list); ?>

		<!-- Show Base Info On Correct Language -->
		<div class="intro"><?php echo get_field($base_info, 'intro', $lang); ?></div>
		<div class="tagline"><?php echo get_field($base_info, 'tagline', $lang); ?></div>
		<div class="tagline"><?php echo get_field($base_info, 'tech_list', $lang); ?></div>
		<hr class="divider" />
		<div class="tagline"><?php echo get_field($base_info, 'projects_intro', $lang); ?></div>

		<!-- Show Projects On Correct Language -->
		<div class="projects-list tagline">
			<a class="tooltip" target="_blank" href="https://mono.net.ua/">Mono</a>
			<a class="tooltip" target="_blank" href="https://play.google.com/store/apps/details?id=com.Craft.ItsLoveRus">It`s love</a>
			<a target="_blank" href="http://samaranin.pythonanywhere.com/">Math Modeling</a>
			<a target="_blank" href="https://hamster.samaranin.dev/">Tesla Hamster 3.0</a>
			<a target="_blank" href="http://amadi.in.ua/">Amadi</a>
			<a target="_blank" href="http://whiteroom.com.ua/">WhiteRoom</a>
		</div>

		<!-- Show Social Links -->
		<hr class="divider" />
		<!-- Find your icons from here - https://fontawesome.com/icons?d=gallery&s=brands -->
		<div class="icons-social">
			<a target="_blank" href="https://github.com/samaranin"><i class="fab fa-github"></i></a>
			<a target="_blank" href="https://twitter.com/samaranin"><i class="fab fa-twitter"></i></a>
			<a target="_blank" href="https://facebook.com/samaranin"><i class="fab fa-facebook"></i></a>
			<a target="_blank" href="https://www.linkedin.com/in/samaranin"><i class="fab fa-linkedin"></i></a>
		</div>

		<span class="tooltip-text" style="display: none;">
			<span><b>Technology: </b>PHP | PHP | PHP</span><br />
			<span><b>Description: </b>Short Description</span><br />
			<span><b>Link: </b>https://mono.net.ua</span>
		</span>
	</main>
</body>
</html>