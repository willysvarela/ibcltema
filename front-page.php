<?php 
/*
	Template Name: Front Page
*/
get_header();

?>
<!--Texto que aparece no auto-type<div id="typed-strings"><p>Igreja Batista Central Leste</p></div>-->
<link href="<?=get_template_directory_uri()?>\css\style-index.css" type="text/css" rel="stylesheet" />
		<div class="header--slogan padding-default" style="display: none">
			<div class="page-title">
				<span>Bem-Vindo</span>
			</div>
			<div>
			<div class="page-subtitle">
				<span>Muito Mais que Amigos</span>
			</div>
			<br/>
			<div>
				<a class="btn btn-primary" href="#">Conheça a Central Leste</a>
			</div>
		</div>
	</header>
	<main>
		<section class="sec-aviso">
			<div>
				
			</div>
		</section>
		<!--section class="sec-quote full-width align-center">
			<span class="quote">"...Que os seus corações sejam consolados, e estejam unidos em amor, e enriquecidos da plenitude da inteligência, para conhecimento do mistério de Deus e Pai, e de Cristo,"<br/>
Colossenses 2:2</span>
		</section-->
		<section class="sec-sobre row text-white">
			<div class="sec-title text-black">
				<h2>Uma igreja dinâmica e cheia de interação!</h2>
			</div>
			<div class="div-sobre div-grupos col-xs-12 col-md-4"> 
				<div class="card">
					<a href="grupos"> 	
						<div class="card-bg"></div>
						<div class="card-content">
							<div class="card-description">
								<div>
									<img class="card-img" src="<?=get_template_directory_uri()?>\assets\img\sobre_icon.jpg"/>
								</div>
								<span class="card-desc">Grupos para Interagir, se divertir, e o mais importante: Orar.</span>
							</div>
						</div>
						<div class="card-bar">
							<span>Encontre um Grupo</span>
						</div>
					</a>
				</div>
			</div>	
			<div class="div-sobre div-ministerios col-xs-12 col-md-4"> 
					<div class="card" >
					<a href="#"> 	
						<div class="card-bg"></div>
						<div class="card-content">
							<div class="card-description">
								<div>
									<img class="card-img" src="<?=get_template_directory_uri()?>\assets\img\sobre_icon.jpg"/>
								</div>
								<span class="card-desc">Sirva a Deus com seu Dom, não importa qual seja.</span>
							</div>
						</div>
						<div class="card-bar">
							<span>Veja Nossos Ministérios</span>
						</div>
					</a>
				</div>
			</div>
			<div class="div-sobre div-departamentos col-xs-12 col-md-4"> 
					<div class="card" >
					<a href="#"> 	
						<div class="card-bg"></div>
						<div class="card-content">
							<div class="card-description">
								<div>
									<img class="card-img" src="<?=get_template_directory_uri()?>\assets\img\sobre_icon.jpg"/>
								</div>
								<span class="card-desc">Cada idade, uma pregação adequada. Encontre seu Departamento.</span>
							</div>
						</div>
						<div class="card-bar">
							<span>Descubra seu Departamento</span>
						</div>
					</a>
				</div>
			</div>	
		</section>

		<section class="sec-eventos full-width clearfix">
			<div class="sec-title text-black">
				<h1 class="">Eventos</h1>
			<h3 class="subtitle align-center">Programações dinâmicas para todas as idades</h3>
			</div>
			<div class="row">
			<?php $loop = new WP_Query( array( 'post_type' => 'evento', 'order' => 'DESC', 'posts_per_page' => 1 ) ); ?>
			<?php while ( $loop->have_posts() ) { $loop->the_post(); ?>
				<?php if(get_field('tipo_evento') == 'um') { $data = strtotime(get_field('data_evento'));
					$data = date('d \d\e M \d\e Y', $data);
				 ?>
				<?php 
				}else{ $data_inicial = strtotime(get_field('data_inicial')); $data_final = strtotime(get_field('data_final')); $data = date('d \d\e M \d\e Y', $data_inicial) . ' à ' . date('d \d\e M \d\e Y', $data_final); } ?>
				<div class="div-ultimo-evento col-xs-12 col-md-6">
					<?php the_post_thumbnail(); ?>
				</div>
				<div class="div-evento-conteudo col-xs-12 col-md-6">
					<p><a href="<?=the_permalink() ?>"><span class="evento-nome"><?=the_title() ?></span></a></p>
					<p><span class="evento-data">Data: </span><span class="data"><?=$data ?></span></p>
					<p><span class="evento-dept">Departamento: </span><span class="badge badge-primary"><?=the_field('departamentos') ?> </span></p>
				</div>
				<div class="text-white">
					<a href="eventos" class="btn"> Todos os Eventos </a>
				</div>
			<?php } ?>
			</div>
		</section>
		<section class="sec-mensagens">	
				<div class="sec-title">
					<h1>Mensagens</h1>
					<h2>Relembre as mensagens onde estiver, e quando quiser</h2>
				</div>	
				</div>
				<div class="div-mensagens row">			
						<?php $loop = new WP_Query( array( 'post_type' => 'post' ) ); ?>
						<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
							<?php include('template/part-list-mensagens.php'); ?>		
						<?php endwhile; ?>	
				</div>
				<div class="full-width align-center">
					<a class="btn" href="mensagens">Veja Todas as Mensagens</a>
				</div>
			</section>
	</main>
<?php
get_footer();
?>