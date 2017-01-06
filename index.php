<?php
/*
	Template Name: Arquivo Mensagens
*/
get_header('page');
?>
		<div class="header--slogan padding-default">
			<div>		
				<h1 clas="typed">Mensagens</h1>
			</div>		
		</div>
	</header>
	<main>
	<section class="sec-mensagens">
		<div class="div-mensagens container row">			
				<?php $loop = new WP_Query( array( 'post_type' => 'post' ) ); ?>
				<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
				<?php include('template/part-list-mensagens.php'); ?>
				<?php endwhile; ?>	
		</div>
		
	</section>
	</main>

<?php
get_footer();
?>