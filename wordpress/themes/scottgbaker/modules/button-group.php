<?php 
// Button Group
global $field;
$count = 1;
$buttonWrap = '';
$belowRibbon = '';
// var_dump()
if(count($field['buttons']) == 2 ) $buttonWrap = 'cta-group-small'; 
if($field['below_ribbon'] == true ) $belowRibbon = 'below-ribbon'; 
?>
<div class="cta-group <?php echo $field['background'] . ' ' . $buttonWrap . ' ' , $belowRibbon; ?>">
  <div class="btn-group">
    <?php foreach($field['buttons'] as $btn) : ?>
      <a href="<?php echo $btn['button_link']; ?>" class="btn <?php echo $btn['button_style']; ?>">
        <?php echo $btn['button_text']; ?>
      </a>
    <?php $count++; endforeach; ?>
  </div>
</div>