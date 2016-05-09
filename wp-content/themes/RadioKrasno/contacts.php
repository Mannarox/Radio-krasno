<?php
/*
Template Name: Страница Контактов
*/
?>
<?php get_header(); ?>
	<nav>
		<?php 
		$args = array(
			'theme_location' => 'primary'
		);
		wp_nav_menu( $args ); 
		?>
	</nav>
	<div class="main-content">
    	<div class="row">
    		<div class="col-md-9">
    			<?php get_template_part( 'panel-shortly' ); ?>
    			<div id="map-radio-krasno"></div>
    			<?php the_content(); ?>
    		</div>
			<?php get_template_part( 'panel-widgets' ); ?>
		</div>
	</div>
<?php get_footer(); ?>
<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=zi5T3VpLPwW3vxsZzDYSA5x77YjfnbrL&width=100%&height=500&lang=ru_RU&sourceType=constructor&scroll=true&id=map-radio-krasno"></script>