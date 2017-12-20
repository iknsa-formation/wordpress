<div class="contact">
		<div class="contact-form">
			<h3>Contact-Form</h3>
			
		</div>

		<div class="clear"> </div>
	</div>
<?php
function aston_comment($comment, $args, $depth) {
    if ( 'div' === $args['style'] ) {
        $tag       = 'div';
        $add_below = 'comment';
    } else {
        $tag       = 'li';
        $add_below = 'div-comment';
    }?>
    <<?php echo $tag; comment_class( empty( $args['has_children'] ) ? '' : 'parent' ); ?> id="comment-<?php comment_ID() ?>"><?php 
    if ( 'div' != $args['style'] ) { ?>
        <div id="div-comment-<?php comment_ID() ?>" class="comment-body"><?php
    } ?>
       <?php 
        if ( $comment->comment_approved == '0' ) { ?>
            <em class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.' ); ?></em><br/><?php 
        } ?>


        <div class="singlepage1">
        	
        	<h3><?php echo get_comment_author_link(); ?></h3>
        	<br>
        </div>
        <div class="content">
        	<?php comment_text(); ?>
        </div>
        <div class="comment-meta commentmetadata">
	            <a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ); ?>"><?php
	                /* translators: 1: date, 2: time */
	                printf( 
	                    __('%1$s at %2$s'), 
	                    get_comment_date(),  
	                    get_comment_time() 
	                ); ?>
	            </a><?php 
	            edit_comment_link( __( '(Edit)' ), '  ', '' ); ?>
        	</div>
        	
        <div class="reply"><?php 
                comment_reply_link( 
                    array_merge( 
                        $args, 
                        array( 
                            'add_below' => $add_below, 
                            'depth'     => $depth, 
                            'max_depth' => $args['max_depth'] 
                        ) 
                    ) 
                ); ?>
        </div><?php 
    if ( 'div' != $args['style'] ) : ?>
        </div><?php 
 	endif;
}
	wp_list_comments('callback=aston_comment');

	comment_form();
?>