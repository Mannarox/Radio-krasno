<?php
/*
Template Name: базовый шаблон
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
    		</div>
			<?php get_template_part( 'panel-widgets' ); ?>
		</div>
	</div>
<?php get_footer(); ?>