<div class="col-sm-8 blog-main">
<?php

if ( have_posts() ) :
	while ( have_posts() ) : the_post(); ?>

    <div class="blog-post">
        <h2 class="blog-post-title">
            <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
        </h2>
        <P><?php the_content() ?></P>
    </div>
 
<?php endwhile;
 
else :
    echo '<div class="blog-post">';
    echo '<h2 class="blog-post-title">There are no posts!</h2>';
    echo '</div>' ;
endif;

the_post_navigation( array(
    'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'twentyfifteen' ) . '</span> ' .
        '<span class="screen-reader-text">' . __( 'Next post:', 'twentyfifteen' ) . '</span> ' .
        '<span class="post-title">%title</span>',
    'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'twentyfifteen' ) . '</span> ' .
        '<span class="screen-reader-text">' . __( 'Previous post:', 'twentyfifteen' ) . '</span> ' .
        '<span class="post-title">%title</span>',
) );

// If comments are open or we have at least one comment, load up the comment template.
if ( comments_open() || get_comments_number() ) :
    comments_template();
endif;

?>
    </div>
    <!-- /.blog-main -->

