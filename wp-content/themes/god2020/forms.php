<?php
/**
 * Template Name: Формы
 
 * @package god2020
 */

get_header();
?>

    <div class="content">
        <div class="row content__header">
            <div class="offset-md-2 col-md-4 header__logo d-flex">
                <svg width="992" height="558" viewBox="0 0 992 558" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="306.5" y="37.5" width="683" height="448" rx="22.5" fill="#96BEE2" stroke="black" stroke-width="5"/>
                    <path d="M339.646 484.5L648 226.261L956.354 484.5H339.646Z" fill="#96BEE2" stroke="black" stroke-width="5"/>
                    <path d="M338.471 37.5L648 373.311L957.529 37.5H338.471Z" fill="#C6E1FA" stroke="black" stroke-width="5"/>
                    <rect y="223" width="256" height="8" rx="4" fill="#96BEE2"/>
                    <rect x="72" width="256" height="8" rx="4" fill="#96BEE2"/>
                    <rect x="72" y="550" width="256" height="8" rx="4" fill="#96BEE2"/>
                    <rect y="258" width="256" height="8" rx="4" fill="#96BEE2"/>
                    <rect y="293" width="256" height="8" rx="4" fill="#96BEE2"/>
                </svg>                                                                                                
            </div>
            <div class="col-md-4 header__title d-flex" style="color: #88AED0;">
                Форма сообщения
            </div>
        </div> 
        <!-- <div class="row">
            <svg width="2600" height="353" viewBox="0 0 2600 353" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1419.21 103.809C1788.9 -12.7403 2360.44 108.106 2600 183.097V353C2370.07 273.972 1812 144.351 1419.21 258.089C1026.42 371.826 301.802 315.244 0 183.097V0C311.429 158.576 1049.53 220.359 1419.21 103.809Z" fill="#88AED0"/>
            </svg>                                                              
        </div>          -->
        <div class="offset-lg-2 col-lg-8" style='padding: 50px 10px'>
        <?php if ( have_posts()) : while (have_posts() ) :the_post(); ?>
        <div class="form__title"><?php the_title(); ?> </div>
        
			<?php the_content(); ?>                    
        </div>
        <?php
        endwhile; 
        endif;
        ?>              
    </div>

    <?php
        get_footer(); 
                        ?>