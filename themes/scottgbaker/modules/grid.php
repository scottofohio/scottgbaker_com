<?php 
  global $field; 
  $grid_columns = $field['grid_columns'];
  $block_type = $field['block_type'];
  $section_header = $field['section_header'];
  if($grid_columns == 'three-col-bordered') {
    $grid_columns = 'three-col bordered';
  } else if($grid_columns == 'two-col-bordered') {
    $grid_columns = 'two-col bordered';
  } else {
    $grid_columns = $field['grid_columns'];
  }
  if(!empty($section_header)) { ?>
  <section class="section-header">
    <h2><?php echo $section_header; ?></h2><?php 
  } ?>  
  
  <div class="scrolled-item basic-grid <?php echo $grid_columns; ?>"><?php 
    foreach($field['grid_blocks'] as $grid)  : 
      $header = $grid['header'];
      $subheader = $grid['subheader'];
      $content = $grid['content'];
      $link_text = $grid['link_text'];
      $link_url = $grid['link_url'];
      
      if($grid_columns == 'three-col' || $grid_columns == 'two-col' || $grid_columns == 'one-col') {
        $content_type = 'full';
      } else {
        $content_type = $grid['content_type'];
      }
      if($block_type == 'card') {
        $card_bg = $grid['card_color'];
      } else {
        $card_bg = '';
      } ?>
      <div><?php 
      if($content_type == 'full-content') { ?>
        <article class="<?php echo $block_type . ' ' . $card_bg; ?>"><?php 
        ?><h4 class="subheader"><?php echo $subheader; ?></h4>
          <section>
            <h3><?php echo $header; ?></h3>
            <p><?php echo $content; ?></p>
            <a href="<?php echo $link_url; ?>" class="btn btn-primary">
              <?php echo $link_text; ?>
            </a>
          </section>
        </article><?php  
      } else if($content_type == 'icon-only') { 
        if($grid['image_as_icon'] == true) { 
            $icon_image = 'icon image-only';
      } else { 
        $icon_image = 'image image-only';
      } ?> 
        <figure class="<?php echo $icon_image; ?>">
          <?php echo wp_get_attachment_image($grid['icon'], 'square'); ?>
        </figure><?php 
      } else if($content_type == 'text-in-circle') {  ?> 
        <section class="<?php echo $content_type; ?>">
          <h5><?php 
            echo $content; ?>
          </h5>
        </section><?php 
      } ?>
    </div><?php 
    endforeach; ?>
  </div><?php 
  if(!empty($section_header)) { ?>
    </section><?php 
    } ?>  
  