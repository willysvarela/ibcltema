<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no">
	<link href="<?=get_template_directory_uri()?>\css\site.min.css" type="text/css" rel="stylesheet" />
	<link href="<?=get_template_directory_uri()?>\css\default.css" type="text/css" rel="stylesheet" />
	<link href="<?=get_template_directory_uri()?>\style.css" type="text/css" rel="stylesheet" />	
	<script src="<?=get_template_directory_uri()?>\js\site.min.js" type="text/javascript"></script>
	<script src="<?=get_template_directory_uri()?>\js\functions.js" type="text/javascript"></script>
	<link href='https://fonts.googleapis.com/css?family=Work+Sans' rel='stylesheet' type='text/css'>
</head>
<body onScroll="setNavBackground()">
	<header class="header-secondary ">
		<nav  class="navbar navbar-fixed-top padding-default">
			<div class="container-fluid ">
    		<!-- Brand and toggle get grouped for better mobile display -->
			    <?php get_template_part('template/part', 'navigation'); ?>
			</div>
		</nav>