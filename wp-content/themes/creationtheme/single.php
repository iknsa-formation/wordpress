<?php 

get_header();
if ( have_posts() ) : while ( have_posts() ) : the_post(); 
?>
<div class="content">
    <div class="grids">
        <div class="grid box">
            <div class="grid-header">
                <h3>
                <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
                </h3>
                <ul>
                    <a href=""><?php comments_popup_link( '0', '1','% commentaires'); ?> </a>
                </ul>
            </div>
            <div class="grid-img-content">
                <div class="img">
                    <?php the_post_thumbnail(); ?>
                </div>
                <p>
                    <?php the_content('Lire la suite'); ?>
                </p>
            </div>
            <div class="comments">
                <?php comments_template(); ?>
            </div>
        </div>
       
    </div>
</div>
<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<?php 
 get_sidebar();
get_footer();