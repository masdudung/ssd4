<div class="col-sm-2 blog-sidebar">
    <?php if ( is_active_sidebar( 'home_left_1' ) ) : ?>
        <div class="idebar-module" role="complementary">
            <?php dynamic_sidebar( 'home_left_1' ); ?>
        </div><!-- #primary-sidebar -->
    <?php endif; ?>

</div><!-- /.blog-sidebar -->