</main>



<footer>

    <div class="formulario">
    <h2><?php echo get_cat_name(6);?></h2>
    <?php echo do_shortcode('[contact-form-7 id="49" title="Formulario de contacto 1"]') ?>
    </div>

    <div class="enlaces">
    <?php wp_nav_menu( array( 
                      'theme_location' => 'menubottom', 
                      'container' => 'false', 
                      'menu_class'=>'menu-rrss') 
                      ); ?>
                    
    <img src="<?php bloginfo( 'template_url' );?>/img/logo-bw.svg" alt="Black & White" class="imagen-footer">

    </div>

    <?php if ( function_exists( 'display_copyright' ) ) display_copyright(); ?>

</footer>
<?php wp_footer(); ?>
</body>
</html>