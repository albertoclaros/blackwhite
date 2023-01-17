<?php get_header(); ?>

<div class="hero-slider"><?php echo do_shortcode('[smartslider3 slider="2"]');?></div>

<div class="ancho">

    <!-- comienza wp-query BLACK&WHITE -->
    <?php

    // La consulta con sus argumentos
    $the_query1 = new WP_Query( array('cat' => 4, 'posts_per_page' => 1 ));

    // El loop
    if ( $the_query1->have_posts() ) {while ( $the_query1->have_posts() ) {$the_query1->the_post();?>

    <!-- aquí estructuramos HTML y llamadas como siempre -->

        <div id="nosotros">
            <h1><?php echo get_cat_name(4); ?></h1>
            <blockquote>
                <?php the_content()?>
                <h4><?php the_title()?></h4>   
            </blockquote>
        </div>

    <?php }} wp_reset_postdata(); ?>
    <!-- fin del wp-query BLACK&WHITE -->


    <div class="equipo">
    
        <h2><?php echo get_cat_name(5);?></h2>
        <p><?php echo category_description(5);?></p>

        <div class="equipo-grid">
            <!-- comienza wp-query EQUIPO -->
            <?php

            // La consulta con sus argumentos
            $the_query1 = new WP_Query( array('cat' => 5, 'posts_per_page' => 4 ));

            // El loop
            if ( $the_query1->have_posts() ) {while ( $the_query1->have_posts() ) {$the_query1->the_post();?>

                <?php
                /* variables para cada imagen */
                $full = get_the_post_thumbnail_url(get_the_ID(),'full');
                $large = get_the_post_thumbnail_url(get_the_ID(),'large');
                $thumbnail = get_the_post_thumbnail_url(get_the_ID(),'thumbnail'); 
                $medium = get_the_post_thumbnail_url(get_the_ID(),'medium');
                ?>

            <!-- aquí estructuramos HTML y llamadas como siempre -->

                <picture>
                    <source media="(min-width: 1200px)" srcset="<?php echo esc_url($large); ?>">
                    <source media="(min-width: 768px)" srcset="<?php echo esc_url($medium); ?>">
                    <img src="<?php echo esc_url($thumbnail); ?>" alt="">
                    <h3><?php the_title()?></h3>
                    <?php the_content()?>
                </picture>
                

            <?php }} wp_reset_postdata(); ?>
            <!-- fin del wp-query EQUIPO -->
        </div>
    </div>
</div> <!-- DIV ANCHO -->




<?php get_footer(); ?>