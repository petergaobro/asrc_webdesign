<?php

get_header();

if (have_posts()):
    while (have_posts()) : the_post(); ?>
    
    <article class="post page">
        
        <!--column-container-->
        <div class="column-container clearfix">
<!--            title-column-->
            <div class="title-column">
                <h2><?php the_title();?></h2>
            </div>
            
<!--            text-column-->
            <div class="text-column">
                <?php the_content(); ?>
            </div>
        </div>
   

    </article>

    <?php endwhile;


    else :
        echo '<p>NOTHING FOUND</p>';

    endif;

get_footer();
        
?>