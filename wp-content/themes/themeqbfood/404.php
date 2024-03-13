<?php get_header(); ?>

<div class="qbc-404">
        <div class="content-wrapper">
            <div class="qbc-404__outer">
                <img src="/wp-content/uploads/2024/02/404-img.png" alt="">
            </div>
        </div>
    </div>

<?php
if ( have_posts() ) : 
?>

    <!-- Body content start -->

    <div>
      <div class="content-wrapper">
        <h1><?php the_title(); ?></h1>
        <p><?php the_content(); ?></p>
        
      </div>
    </div>

    <!-- Body content end -->
    
<?php

endif;
?>

<?php get_footer();?>