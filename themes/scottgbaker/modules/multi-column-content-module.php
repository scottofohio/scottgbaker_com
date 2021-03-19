<?php 
global $field;
?>
<div class="mulit-column-content-module">
  <section>
    <?php if(!empty($field['section_headline'] )) { ?>
      <h2><?php echo $field['section_headline']; ?></h2>
    <?php } ?>
    <?php if(!empty($field['section_headline'] )) { ?>
      <p><?php echo $field['body_copy']; ?></p>
    <?php } ?>
    <?php if(!empty($field['cta_url']) && !empty($field['cta_text']))  { ?>
      <a href="<?php echo $field['cta_url']; ?>"><?php echo $field['cta_text']; ?></a>
    <?php } ?>
  </section>
  <div>
    <?php foreach($field['columns'] as $column) : ?>
      <article>
        <?php if(!empty($column['headline'])) { ?>
          <h3><?php echo $column['headline'] ?></h3>
        <?php } ?>
        <?php if(!empty($column['subheadline'])) { ?>
        <h4 class="subheader"><?php echo $column['subheadline']; ?></h4>
        <?php } ?>
        <?php if(!empty($column['body_copy'])) { ?>
          <p><?php echo $column['body_copy'] ?></p>
        <?php } ?>
        <?php if(!empty($column['cta_text']) && !empty($column['cta_link'])) { ?>
          <a href="<?php echo $column['cta_link']; ?>"><?php echo $column['cta_text']; ?></a>  
        <?php } ?>
      </article>
    <?php endforeach; ?>
  </div>

</div>