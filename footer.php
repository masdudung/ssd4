</div><!-- closes <div class=row"> -->
    
<footer class="site-footer">
    <hr>
    <p>
        <?php bloginfo( 'name' ) ?>
        footer  
        <?php
        wp_nav_menu( array( 
            'theme_location' => 'footer-menu', 
            'container_class' => 'footer-menu' ) 
        ); 
        ?>
    </p>
</footer>
</div> <!-- closes <div class=container"> -->

<?php wp_footer() ?>
</body>
</html>