<?php

/*Template name: special*/

get_header();

if (have_posts()):
    while (have_posts()) : the_post(); ?>
    
    <article class="post page">
        <h2><?php the_title(); ?></h2>
        
        <!--info box-->
        <div class="info-box">
            <h4>Peter title</h4>
            <p>I am peng gao, welcome to ASRC.</p>
                
        </div>

        <?php the_content(); ?>

    </article>


    <?php endwhile;


    else :
        echo '<p>NOTHING FOUND</p>';

    endif;

get_footer();
        
?>