<?php require('scripts/initializer.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<meta name="description" content="Developer`s homepage and portfolio">
  	<meta name="keywords" content="Development,Web,GameDev,Machine Learning,Math Modeling">
  	<meta name="author" content="Michael Boiko">

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
			<a target="_blank" rel = ”noopener” href="https://mono.net.ua/">Mono</a>
			<a target="_blank" rel = ”noopener” href="https://play.google.com/store/apps/details?id=com.Craft.ItsLoveRus&hl=en">It`s love</a>
			<a target="_blank" rel = ”noopener” href="http://samaranin.pythonanywhere.com/">Math Modeling</a>
			<a target="_blank" rel = ”noopener” href="https://hamster.samaranin.dev/">Tesla Hamster 3.0</a>
			<a target="_blank" rel = ”noopener” href="http://amadi.in.ua/">Amadi</a>
			<a target="_blank" rel = ”noopener” href="http://whiteroom.com.ua/">WhiteRoom</a>
			<a target="_blank" rel = ”noopener” href="https://lib-help.samaranin.dev/">NUWEE library helper</a>
			<a target="_blank" rel = ”noopener” href="https://fugas.space/">FUGAS</a>
		</div>

		<!-- Show Social Links -->
		<hr class="divider" />
		<!-- Find your icons from here - https://fontawesome.com/icons?d=gallery&s=brands -->
		<div class="icons-social">
			<a target="_blank" rel = ”noopener” href="https://github.com/samaranin"><i class="fab fa-github"></i></a>
			<a target="_blank" rel = ”noopener” href="https://twitter.com/samaranin"><i class="fab fa-twitter"></i></a>
			<a target="_blank" rel = ”noopener” href="https://facebook.com/samaranin"><i class="fab fa-facebook"></i></a>
			<a target="_blank" rel = ”noopener” href="https://www.linkedin.com/in/samaranin"><i class="fab fa-linkedin"></i></a>
		</div>
	</main>
</body>
</html>