<?php 
// Hero Module
global $field;
$hero_style = $field['video_or_image'];
?>

<div class="scrolled-item hero <?php echo $hero_style . '-hero'; ?>">
  <section>
    <h1><?php echo $field['header']; ?></h1><?php 
    if (!empty($field['button_link']) && !empty($field['button_text'])) { ?>
      <a href="<?php echo $field['button_link']; ?>" class="btn btn-outline-primary">
        <?php echo $field['button_text']; ?>
      </a><?php 
    } ?>
  </section>
 
  <?php 
  if($hero_style == 'video') { ?>
   
    <video autoplay muted loop><?php 
    
      foreach($field['video_embed'] as $key => $val) : 
        echo '<source src="' . $val . '" type="video/'. $key . '"/>';
      endforeach; ?>
    
    </video><?php 
  
  } else if($hero_style == 'image') { ?>
    <figure>
      <?php echo wp_get_attachment_image($field['image'], 'full');  ?>
    </figure><?php 
  } ?> 

</div>

