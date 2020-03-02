<div class="col-sm-8 blog-main">

<?php

global $post;
$post_id = $post->ID;
$prefix = 'prefix-';

$obituary_query = new WP_Query($args);
if ( have_posts() ) :
    while ( have_posts() ) : the_post(); 

    //get post meta
    $position   = get_post_meta($post_id, $prefix. 'position', true); // Use myinfo-box1, myinfo-box2, myinfo-box3 for respective fields 
    $email      = get_post_meta($post_id, $prefix. 'email', true);
    $phone      = get_post_meta($post_id, $prefix. 'phone', true);
    $website    = get_post_meta($post_id, $prefix. 'website', true);
    $image_id   = get_post_meta($post_id, $prefix. 'image', true);
    $image      = wp_get_attachment_url( $image_id );
    
?>

    <div class="blog-post">
        <h2 class="blog-post-title">
            <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
        </h2>
        <P><?php echo $position ?></P>
        <P><?php echo $email?></P>
        <P><?php echo $phone?></P>
        <P><?php echo $website?></P>
        <img src="<?php echo $image?>" />

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

