<?php get_header(); ?>

<article class="ancho">

    <h1><?php the_title(); ?></h1>

<!-- empieza el LOOP -->
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <section class="caja descripcion">
        <?php the_excerpt()?>
        <?php the_tags( '<p class="etiqueta">','</p>' ); ?>
    </section>

    <section class="galeria">
        <?php the_content()?>
    </section>






<?php endwhile; endif; ?>
<!-- termina el LOOP -->

</article>
<?php get_footer(); ?>