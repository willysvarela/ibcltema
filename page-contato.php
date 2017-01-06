<?php
/*
	Template Name: Grupos
*/
get_header('');
?>
<link href="<?=get_template_directory_uri()?>/css/style-contato.css" type="text/css" rel="stylesheet" />
		<div class="margin-default">
			<div class="row">
				<div class="col-xs-12 col-md-6">
					<h1 class="title">Precisando de ajuda?</h1>
					<span>Nos fale por aqui e teremos o prazer de, rapidamente, responder.</span>
					<form>
						<div>
							<label for="txtNome">Nome</label>
							<input type="text" class="form-control" id="txtNome" placeholder="Nome">
						</div>
						<div>
							<label for="txtEmail">Email</label>
							<input type="text" class="form-control" id="txtEmail" placeholder="email@mail.com">
						</div>
						<div>
							<label for="txtEmail">Mensagem</label>
							<textarea type="text" class="form-control" id="txtEmail" placeholder="Escreva aqui sua dúvida, opinião, ou sugestão. Ficaremos felizes em receber seu feedback"></textarea>
							<input type="submit" value="Enviar" class="button button-success" />
						</div>
					</form>
				</div>
				<div class="col-xs-12 col-md-6">
					<div class="div-mapa">
					</div>
				</div>
			</div>
			<div class="div-horarios">
				<div class="row">
					<div class="col-xs-12 row text-center text-white ">
						<div class="col-xs-6">
							<h2 class="">Horários de Serviço</h2>
							<span>Seg à Sex</span><br/>
							<span>08:00Hs às 20:00Hs</span>	
						</div>
						<div class="col-xs-6">
							<h2>Horários de Culto</h2>
						<div class="row">
							<div class="col-xs-6">
								<span>1° Culto</span><br/>
								<span>16:30Hs às 18:00Hs</span>
							</div>
							<div class="col-xs-6">
								<span>2° Culto</span><br/>
								<span>19:30Hs às 20:30Hs</span>
							</div>
						</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
<main>	
	<section class="sec-quote align-center">
	<p class="quote">Alegrei-me quando me disseram: Vamos à casa do Senhor</p>
	</section>
</main>
	
<?php
get_footer();
?>