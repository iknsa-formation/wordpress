<?php 

get_header();
if ( have_posts() ) : while ( have_posts() ) : the_post(); 
?>
<div class="content">
    <div class="grids">
        <div class="grid box">
            <div class="grid-header">
                <h3><?php the_title(); ?></h3>
                <ul>
                    <li> <span>Article posté par <?php the_author(); ?></span>
                    </li>
                    <li>
                        <a href=""><?php comments_popup_link( '0', '1 commentaires','% commentaires'); ?> </a>
                    </li>
                </ul>
            </div>
            <div class="grid-img-content">
                <div class="img">
                    <?php the_post_thumbnail(); 
                    echo get_template_directory_uri();
                    ?>
                </div>
                <p>
                    <?php the_content('Lire la suite'); ?>
                </p>
            </div>
            <div class="comments">
                <ul>
                    <li><a href="#"><img src="wp-content/themes/aston/images/views.png" title="view" /></a></li>
                    <li><a href="#"><img src="wp-content/themes/aston/images/likes.png" title="likes" /></a></li>
                    <li><a href="#"><img src="wp-content/themes/aston/images/link.png" title="link" /></a></li>
                    <li><a class="readmore" href="<?php the_permalink() ?>">Lire la suite</a></li>
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