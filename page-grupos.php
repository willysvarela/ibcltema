<?php
/*
	Template Name: Grupos
*/
get_header();
?>
<link href="<?=get_template_directory_uri()?>/css/style-grupos.css" type="text/css" rel="stylesheet" />
		<div class="header--slogan padding-default">
			<div>
				<h1>Grupos de Oração</h1>
			</div>
			<hr/>
			<h4>Palavra - Bençãos - Pedidos</h4>
		</div>
	</header>
	<main>
		<section class="sec-sobre">
		<div class="container">
			<h1 class="title">O que é um Grupo de Oração?</h1>
			<p>Os Grupos de Oração (G.O) são grupos que se reúnem toda semana com o objetivo de estudar a Palavra, ouvir sobre as bençãos que Deus tem dado a cada um, e ouvir as necessidades dos membros do grupo. Oração é a chave e o foco desses grupos, que juntos elevam seus pensamentos a Deus orando uns pelos outros, dando forças para enfrentar as dificuldades e mantendo uns aos outros firmes em Cristo Jesus.</p>
			<p>Os grupos estão localizados por toda a cidade de Manaus.</p>
			<h2 class="subtitle">Encontre um grupo perto de sua casa e participe!</h2>
		</div>
		</section>
		<section class="sec-grupos container">
			<div class="row">
				<?php $loop = new WP_Query( array( 'post_type' => 'grupo' ) ); ?>
				<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
				<div class="col-xs-12 col-md-3">
					<div class="thumbnail">
						<?php
						$alvo = get_field('alvo');
						$alvo = $alvo[0];
							if(($alvo == 'Jovens') || ($alvo == 'Casados')|| ($alvo == 'Homens')|| ($alvo == 'Mulheres')){
								//do nothing
							}else{
								$alvo = 'Custom';

							}

						?>
		                <img class="img-rounded img-<?= $alvo ?>" src="<?php echo get_template_directory_uri(); ?>/assets/img/bg-event.jpg">
		                <div class="caption text-center">
		                	<h3><?php the_title(); ?></h3>
		                	<p class=""><?php the_field('lider'); ?></p>
		                	<div class="align-left">
			                 	<p class="grupo-local"><i class="glyphicon glyphicon-map-marker"></i> Local: <?php the_field('local');?></p>
								<p class="grupo-contato"><i class="glyphicon glyphicon-earphone"></i> Fone: <?php the_field('telefone');?></p>
								<p class="grupo-descricao"><i class="glyphicon glyphicon-time"></i> Dia/Hora: <?php the_field('dia');?> às <?php the_field('hora');?> Hs</p>
								<p class="grupo-descricao"><i class="glyphicon glyphicon-user"></i> Alvo: <?php the_field('alvo');?></p>
							</div>
						</div>
	            	</div>
            	</div>
				<?php endwhile; ?>	
				
			</div>
		</section>
	</main>

<?php
get_footer();
?>