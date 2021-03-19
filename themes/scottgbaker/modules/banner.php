<?php 
global $field;
 
    $banner_style = $field['banner_style']; 
    // $no_bottom_margin = ;  
    // full and split  
    $image = $field['image']; 
    $headline = $field['headline']; 
    $accent_background_color = $field['accent_background_color']; 

   if ($banner_style == 'split-banner') {
    // styles
    $banner_background = $field['banner_background'] . '-bg';
    $use_pattern = $field['use_pattern'];
    $type_treatment = $field['split_banner_type_treatment'];
    $split_image_style = $field['split_image_style'];
    $image_orientation = $field['image_orientation'];
    $no_type = ''; 
    // content 
    $buttonClass = '';
    $content = $field['content']; 
    $button_url = $field['button_url']; 
    $button_text = $field['button_text'];
  
  } else if($banner_style == 'solid') {
    $banner_background = '';
    $type_treatment = $field['split_banner_type_treatment'];
    $split_image_style = '';
    $image_orientation = '';
    $no_type = ''; 
    $content = $field['content']; 
    $button_url = $field['button_url']; 
    $button_text = $field['button_text'];
    $use_pattern = $field['use_pattern'];
  } else if($banner_style == 'full-image-banner ') {
    // styles 
    
    $banner_background = '';
    $type_treatment = '';
    $split_image_style = '';
    $image_orientation = '';
    $no_type = $field['no_type']; 
    // content 
    $content = ''; 
    $button_url = ''; 
    $button_text = '';
  }

  if($use_pattern == true) {
    $pattern = 'use-pattern';
  } else if($use_pattern == false) {
    $pattern = 'no-pattern';
  }

  if($no_type == true) {
    $hide_type = 'hide-type';
  } else if($no_type == false) {
    $hide_type = 'show-type';
  } else {
    $hide_type = '';
  }

  
  if($accent_background_color) {
    $accent = $accent_background_color . '-accent';
  } else {
    $accent = '';
  }

  if($field['no_bottom_margin'] == true) {
    $marg = 'no-bottom-margin';
  } else {
    $marg = '';
  }

  $syle_classes = $banner_background . ' '
  . ' ' . $pattern
  . ' ' . $image_orientation 
  . ' ' . $hide_type 
  . ' ' . $accent 
  . ' ' . $split_image_style 
  . ' ' . $marg
  . ' ' . $buttonClass; 
  


  if ($banner_style == 'split-banner') { ?>
<div class="scrolled-item banner <?php echo $banner_style . ' ' . $syle_classes; ?> ">
    <div>
      <figure>
        <?php echo wp_get_attachment_image($image, $split_image_style); ?>
      </figure>
      <section><?php
        
        if ($type_treatment == 'header-only') { ?>
          <h2><?php echo $headline; ?></h2><?php
        }

        if ($type_treatment == 'no-button') { ?> 
          <h2><?php echo $headline; ?></h2>
          <p><?php echo $content; ?></p><?php
        }

        if ($type_treatment == 'all-content-fields') { ?> 
          <h2><?php echo $headline; ?></h2>
          <p><?php echo $content; ?></p>
          <a href="<?php echo $button_url; ?>" class="btn btn-primary">
            <?php echo $button_text; ?>
          </a><?php
        } ?>
      
      </section>
    </div>
    </div><?php
  
  } else if($banner_style == 'full-image-banner ') { ?>
  <div class="scrolled-item banner <?php echo $banner_style . ' ' . $syle_classes; ?> "><?php 
    if ($no_type == false) { ?>
      <section>
        <h3><?php echo $headline; ?></h3>
      </section><?php
    } ?>
  
  <figure>
    <?php echo wp_get_attachment_image($image , 'full'); ?>
  </figure>
  </div><?php 
  } else if($banner_style == 'solid') { ?>
    <div class="scrolled-item banner <?php echo $banner_style . ' ' . $syle_classes; ?> ">
     <section>
     <?php
        
        if ($type_treatment == 'header-only') { ?>
          <h3><?php echo $headline; ?></h3><?php
        }

        if ($type_treatment == 'no-button') { ?> 
          <h3><?php echo $headline; ?></h3>
          <p><?php echo $content; ?></p><?php
        }

        if ($type_treatment == 'all-content-fields') { ?> 
          <h3><?php echo $headline; ?></h3>
          <p><?php echo $content; ?></p>
          <a href="<?php echo $button_url; ?>" class="btn btn-primary">
            <?php echo $button_text; ?>
          </a><?php
        } ?>
        </section>
    </div><?php 
  }

