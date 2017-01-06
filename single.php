	<?php
/*
	Template Name: Mensagens
*/
get_header('page');
?>
		
		<link href="<?=get_template_directory_uri()?>/css/style-mensagem.css" type="text/css" rel="stylesheet" />
		<div class="header--slogan padding-default">
			<div>		
				<h1>Mensagens</h1>
			</div>		
		</div>
	</header>
	<main>
	<section class="sec-mensagens">
		<div class="div-mensagens container align-center">			
				<?php //$loop = new WP_Query( array( 'post_type' => 'mensagem' ) ); ?>
				<?php if ( have_posts() ) : the_post(); ?>
					<div class="div-mensagem row">
						<div class="mensagem-thumbnail col-xs-12 col-md-4">
							<?php  the_post_thumbnail(); ?>
								<div class="mensagem-download">
								<?php  if( get_field('video') <> '') : ?>
								<a href="<?php the_field('video'); ?>"><img src="<?=get_template_directory_uri()?>/assets/img/icon_video.png" /></a>
								<?php endif; ?>

								<?php  if( get_field('audio') <> '') : ?>
								<a href="<?php the_field('audio'); ?>"><img src="<?=get_template_directory_uri()?>/assets/img/icon_phone.png" /></a>
								<?php endif; ?>

								<?php  if( get_field('pdf') <> '') : ?>
								<a href="<?php the_field('pdf'); ?>"><img src="<?=get_template_directory_uri()?>/assets/img/icon_pdf.png"></a>
								<?php endif; ?>
							</div>
						</div>
						<div class="mensagem-content col-xs-12 col-md-8"> 
							<?php the_title( '<a href="#"><span class="mensagem-titulo">', '</span></a>'); ?>
							<p class="mensagem-conteudo">
								<?php the_excerpt(); ?>
							</p> 
							
						</div>
						

					</div>
				<?php endif; ?>	
		</div>
	</section>
	</main>

<?php
get_footer();
?>