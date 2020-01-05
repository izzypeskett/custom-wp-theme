<?php get_header()?>
<?php
echo do_shortcode('[smartslider3 slider=1]');
?>

<div class="main">
  <div id="tabs">
    <ul>
      <li><a href="#tabs-1"><?php the_field( 'tab_label_one' )?></a></li>
      <li><a href="#tabs-2"><?php the_field( 'tab_label_two' )?></a></li>
    </ul>
    <div class="container" id="tabs-1">
      <div class="container-img"><?php 
          $image = get_field('content_image');
          if( !empty( $image ) ): ?>
              <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
          <?php endif; ?></div>
      <div class="container-content">
        <h2><?php the_field( 'content_heading')?></h2>
        <p><?php the_field( 'content_box' )?></p>
      </div>
    </div>
    <div class="container" id="tabs-2">
      <div class="container-img">
        <?php $image = get_field('content_image_two');
          if( !empty( $image ) ): ?>
            <img src="<?php echo esc_url($image['url']);?>" alt="<?php echo esc_attr($image['alt']); ?>" />
          <?php endif; ?></div>
      <div class="container-content">
        <h2><?php the_field( 'content_heading_two' )?></h2>
        <p><?php the_field( 'content_box_two' )?></p>
      </div>
    </div>
  </div>
</div>


<?php get_footer()?>