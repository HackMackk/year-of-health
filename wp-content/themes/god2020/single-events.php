<?php



get_header();
?>

	
<div class="content">
                       
	<div class="row">
		<div class="offset-md-1 col-md-10 new1__header">
			<?php the_title() ?>
		</div>
	</div>
	<div class="offset-xl-2 col-xl-8">
		<div class="new1__img" style="background-image: url(<?php the_field('image') ?>);"></div>
	</div>   
	<div class="new1__box">                 
		<div class="offset-xl-2 col-xl-8">
			<div class="new1__date"  style='color:#9C4C33;'><?php the_field('date'); ?></div>
			<div class="new1__date"><?php the_field('event_place'); ?></div>
			<?php if ( have_posts()) : while (have_posts() ) :the_post(); ?>         
			<div class="new1__text"><?php the_content(); ?></div>  
			<?php
				endwhile; 
				endif;
			?>                   
		</div>                
	</div>


</div>
	

<?php
get_footer(); ?>