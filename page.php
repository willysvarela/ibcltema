<?php
/*
	Template Name: Page
*/
get_header('page');
?>
<?php the_post(); ?>
		<link href="<?=get_template_directory_uri()?>/css/style-index.css" type="text/css" rel="stylesheet" />
		<div class="header--slogan padding-default">
			<div>
				<h1><?php the_title() . 'sw'; ?></h1>
			</div>
		</div>
	</header>
	<main>
	<div>
		<?php the_content(); ?>		
	</div>	
	</main>

<?php
get_footer();
?>