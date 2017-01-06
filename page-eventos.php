<?php
/*
	Template Name: Eventos
*/
get_header('page');
?>
		<link href="<?=get_template_directory_uri()?>/css/style-eventos.css" type="text/css" rel="stylesheet" />
		<div class="header--slogan padding-default">
			<div>
				<h1>Eventos</h1>
			</div>
		</div>
	</header>
	<main>
	<div class="div-eventos container">
		<div class="row">
		<?php $loop = new WP_Query( array( 'post_type' => 'evento' ) ); 

		if($loop->have_posts()) {
		?>

		<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
			<?php include('template/part-list-eventos.php'); ?>
		<?php endwhile; ?>
		<?php }else {?>
			<div class="align-center">
				 <h1>Quando houverem eventos, eles serão mostrados aqui =).</h1>
			</div>
		<?php } ?>
		</div>			
	</div>	
	</main>

<?php
get_footer();
?>