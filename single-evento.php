<?php
/*
	Template Name: Eventos
*/

get_header('page');
the_post();
?>
		<link href="<?=get_template_directory_uri()?>/css/style-eventos.css" type="text/css" rel="stylesheet" />
		<div class="header--slogan padding-default">
			<div>
				<h1>Eventos</h1>
			</div>
		</div>
	</header>
	<main>
	<div class="div-eventos container align-center">
		<div class="row">
			<?php include('template/part-single-evento.php'); ?>
		</div>			
	</div>	
	</main>

<?php
get_footer();
?>