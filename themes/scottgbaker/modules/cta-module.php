<?php 
// CTA Module
global $field;
$cta_repeater = $field['cta_repeater'];
?>

<div class="cta-module">
  <?php foreach($cta_repeater as $cta) :  ?>
  <section style="background-image: url(<?php echo $cta['background_image']; ?>);">
    <?php if(!empty($cta['headline'])) { ?>
      <h2><?php echo $cta['headline']; ?></h2>  
    <?php  } ?>
    <?php if(!empty($cta['body_copy'])) { ?>
      <p><?php echo $cta['body_copy']; ?></p>
    <?php } ?>
    <?php if(!empty($cta['cta_link']) && !empty($cta['cta_text']))  { ?>
     <a href="<?php echo $cta['cta_link']; ?>" class="btn btn-outline-gold"><?php echo $cta['cta_text']; ?></a>
    <?php } ?>
  </section>
  <?php endforeach; ?>
</div>