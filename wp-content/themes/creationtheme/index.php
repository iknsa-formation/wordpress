<?php 

get_header();
if ( have_posts() ) : while ( have_posts() ) : the_post(); 
?>
<div class="content">
    <div class="grids">
        <div class="grid box">
            <div class="grid-header">
                <h3><?php the_title(); ?></h3>
                
            </div>
            <div class="grid-img-content">
                <div class="img">
                    <!-- Ajouter l'image à la une -->
                    <?php the_post_thumbnail(); ?>
                </div>
                <p>
                    <?php the_content('Lire la suite'); ?>
                </p>
            </div>
            <div class="comments">
                <ul>
                    <li><a href="#"><img src="images/views.png" title="view" /></a></li>
                    <li><a href="#"><img src="images/likes.png" title="likes" /></a></li>
                    <li><a href="#"><img src="images/link.png" title="link" /></a></li>
                    <li><a class="readmore" href="singlepage.html">ReadMore</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif;
get_sidebar();
get_footer();