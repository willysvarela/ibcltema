<div class="col-xs-12 col-md-6">
							<div class="div-mensagem">
								<div class="mensagem-thumbnail col-xs-3">
									<?php  the_post_thumbnail(); ?>
								</div>
								<div class="col-xs-9 mensagem-conteudo"> 
									<?php the_title( '<a href="' . get_permalink() . '"><span class="mensagem-titulo">', '</span></a>'); ?>
									<p class="mensagem-conteudo">
										<?php the_content(); ?>
									</p> 
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
							</div>
						</div>