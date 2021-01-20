<?php
/**
 * Template Name: События
 
 * @package god2020
 */

get_header();
?>

        <div class="content">
            <div class="row">
                <div class="offset-lg-3 col-lg-6 new__header">
                   События
                </div>
			</div>
            <?php
                $posts = get_posts( array(
                    'numberposts' => 0,
                    'orderby'     => 'date',
                    'meta_value'  =>'',
                    'post_type'   => 'events',
                ) );

                foreach( $posts as $post ){
                    setup_postdata($post);
                    ?>
  
                    <div class="row new__box">
                        <div class="col-lg-4 offset-xl-2 col-xl-2 new__box__img" style="background-image: url(<?php the_field('image') ?>);"></div>
                        <div class="col-lg-8 col-xl-6">
                            <div class="new__box__title"><?php the_title() ?></div>              
                            <div class="event__box__date"><?php the_field('date'); ?></div>
                            <div class="event__box__place"><?php the_field('event_place'); ?></div>
                            <div class="new__box__text"><?php the_excerpt( ); ?></div>
                            <div class="new__box__next"><a href="<?php the_permalink() ?>">Смотреть событие <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></div>
                        </div>                
                    </div>
                    <div class="row event__month d-flex"> 
                        <span class='event__month_block' data='<?php echo the_field('date'); ?>'></span> 
                        <div></div></div>
                    <!-- <div class="row">
                        <div class="offset-3 col-6 new__line"></div>
                    </div> -->
           
             <?php } ?>  
			 
		</div>
		

<?php
get_footer();  ?>
