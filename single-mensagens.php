<?php
/*
	Template Name: Mensagens
*/
get_header('page');
?>
		
		<link href="<?=get_template_directory_uri()?>/css/style-index.css" type="text/css" rel="stylesheet" />
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
					<div class="div-mensagem">
						<div class="mensagem-thumbnail">
							<img src="assets/img/bg2.jpg" alt="Mensagem" class="" />
						</div>
						<div>
								<a href="#">Ouvir</a> <a href="#">PDF</a> <a href="#">Assinar Podcast</a>
							</div>
						<div class="mensagem-content"> 
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