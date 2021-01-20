<?php


get_header();
?>

	
<div class="content">
                       
	<?php if ( have_posts()) : while (have_posts() ) :the_post(); ?>
	<div class="row">
		<div class="offset-md-1 col-md-10 new1__header">
			<?php the_title() ?>
		</div>
	</div>
	<div class="offset-xl-2 col-xl-8">
		<div class="new1__img" style="background-image: url(<?php the_field('image_new') ?>);"></div>
	</div>   
	<div class="new1__box">                 
		<div class="offset-xl-2 col-xl-8">
			<div class="new1__date"><?php the_date(); ?></div>         
			<div class="new1__text"><?php the_content(); ?></div>                     
		</div>                
	</div>


</div>
<?php
endwhile; 
endif;
?>

<?php
get_footer(); ?>

