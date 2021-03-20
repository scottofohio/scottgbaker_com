<?php 
// Split Content Module
global $field;
?>

<div class="split-content-module">
  <?php 
    $count = 0;
    foreach($field['blocks'] as $split_block) : 
    ?>

      <section class="<?php echo $split_block['type']; ?>"><?php 
        if(!empty($split_block['header'])) { ?>
          <h3><?php echo $split_block['header']; ?></h3><?php 
        } 
        if(!empty($split_block['body_copy'])) { ?>
          <p><?php echo $split_block['body_copy']; ?></p><?php 
        }  
        if($split_block['type'] == 'email') { ?>
          
        <?php } else { ?>
          <script type="text/javascript" src="//d1aqhv4sn5kxtx.cloudfront.net/actiontag/at.js"></script>
          <div class="ngp-form" data-id="-7849925282729949184"></div>
        <?php } ?>

      </section>
  <?php $count++; endforeach; ?>
</div>
