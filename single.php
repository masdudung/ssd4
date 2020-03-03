<?php

get_header();


get_template_part( 'include/sidebar', 'left' );
?>

<div class="col-sm-8 blog-main">
<?php

if ( have_posts() ) :
	while ( have_posts() ) : the_post(); ?>

    <div class="blog-post">
        <h2 class="blog-post-title">
            <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
        </h2>
        <P><?php the_content() ?></P>
        <?php
        if (comments_open()){
            comments_template();
        }
        ?>
    </div>
 
<?php endwhile;
 
else :
    echo '<div class="blog-post">';
    echo '<h2 class="blog-post-title">no post</h2>';
    echo '</div>' ;
endif;

?>
    </div>
    <!-- /.blog-main -->

<?php
get_template_part( 'include/sidebar', 'right' );


get_footer();
 
?>