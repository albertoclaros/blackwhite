<?php get_header(); ?>

<div class="ancho">

<h1><?php single_tag_title(); ?></h1>

<div class="grid">


<?php if ( have_posts() ) : ?>

<!-- Add the pagination functions here. -->
<?php
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

$the_query = new WP_Query( $paged ); 
?>

<!-- Start of the main loop. -->
<?php while ( have_posts() ) : the_post();  ?>

<!-- the rest of your theme's main loop -->

<div class="caja">
    <?php if ( has_post_thumbnail() ) {the_post_thumbnail();} ?>
    <h2><?php the_title(); ?></h2>
    <div class="enlace"><a href="<?php the_permalink(); ?>">+</a></div>
    <?php the_tags( '<p class="etiqueta">','</p>' ); ?>
    
</div>

<?php endwhile; ?>
<!-- End of the main loop -->

<!-- Add the pagination functions here. -->
</div>

<ul class="paginador">
    <li><?php previous_posts_link('<p><</p>'); ?></li>
    <li class="paginador__numeros"><?php echo paginate_links(); ?></li>
    <li><?php next_posts_link('<p>></p>'); ?></li>
    </ul> 

<?php else : ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>



</div>
<?php get_footer(); ?>