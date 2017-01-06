<div class="div-evento col-xs-12 col-md-12">
		
		<?php if(has_post_thumbnail()) { ?>
		<style>
			.evento-thumbnail{
				background: url('<?=the_post_thumbnail_url() ?>');
			}
		</style>
		<?php 
		}else{ ?>
		<style>
			.evento-thumbnail{
				background: url('<?=get_template_directory_uri()?>\assets\img\bg-event.jpg');
			}
		</style>
		<?php 
		} ?>

		<div class="evento-thumbnail">
		</div>
		<div class="evento-content padding-15">
			<?php if(get_field('tipo_evento') == 'um') { $data = strtotime(get_field('data_evento')); ?>
				<span class="evento-date"><?php  echo date('d \d\e M \d\e Y', $data); ?></span>	
			<?php 
			}else{ $data_inicial = strtotime(get_field('data_inicial')); $data_final = strtotime(get_field('data_final')); ?>
				<span class="evento-date begin"><?php echo date('d \d\e M \d\e Y', $data_inicial); ?></span> 
				<span>à</span> 
				<span class="evento-date end"><?php echo date('d \d\e M \d\e Y', $data_final); ?></span>
			<?php } ?>
			<br/>
			<h1 class="evento-title"><?php the_title(); ?></h1>
			<p class="evento-description"><?php the_content(); ?></p>
		</div>
</div>