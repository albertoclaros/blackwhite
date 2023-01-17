<div id="carousel-bootstrap-wordpress" class="carousel slide" data-ride="carousel">
  <!-- Indicadores de las diapositivas  -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-bootstrap-wordpress" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-bootstrap-wordpress" data-slide-to="1"></li>
    <li data-target="#carousel-bootstrap-wordpress" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <?php 
    $args = ['post_type' => 'slider', 
            'posts_per_page' => 5,
            'orderby' => 'date',
            'order' => 'desc',
            'exclude' => '',
            'post_status' => 'publish'];
    
        $slider = get_posts($args); ?>
      <?php $count = 0; ?>
      <?php foreach($slider as $slide): ?>
      <div class="carousel-item <?php echo ($count == 0) ? 'active' : ''; ?>">
          <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($slide->ID)) ?>" class="img-responsive" />
          <div class="carousel-caption-template d-md-block animated fadeInUp" style="animation-name: fadeInUp;animation-delay: 1s;animation-duration: 2s;">
            <h4><?php echo $slide->post_title; ?></h4>
            <p><?php echo $slide->post_content; ?></p>
          </div>
      </div>
      <?php $count++; ?>
    <?php endforeach; ?>
  </div>

   <a class="carousel-control-prev" href="#carousel-bootstrap-wordpress" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel-bootstrap-wordpress" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>