<?php 
global $field;

$tab_type = $field['tab_type'];

if($tab_type == 'child-nav') { ?>
<nav class="tab-nav">
  <a href="#"></a>
</nav><?php 
} else if($tab_type == 'content-tabs') { ?>
  <ul class="tabs"><?php
    $count = 1;
    foreach($field['tabs'] as $tab) : ?> 
      <li>
        <button data-tab-target="#tab-<?php echo $count; ?>">
          <?php echo $tab['tab_label'] ?>
        </button>
      </li><?php 
    $count++;
    endforeach; ?>
  </ul>
  <div class="tab-wrap basic-grid"><?php 
    $count = 1;
    foreach($field['tabs'] as $tab) : 
    $tabGroup = $tab['tab_content']; ?>
    <article id="tab-<?php echo $count; ?>" class="tab-content">
      <h4 class="subheader"><?php echo $tabGroup['subheader'] ?></h4>
      <h2><?php echo $tabGroup['header'] ?></h2>
      <section class="main-content">
        <h3><?php echo $tabGroup['left_text'] ?></h3>
        <div>   
          <?php echo $tabGroup['right_text'] ?>
        </div>
      </section>
    </article>
    <?php 
    $count++;
    endforeach; ?>
  </div><?php
}