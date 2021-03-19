<?php 
  global $field; 
  $header = $field['header'];
  $content = $field['content'];
  if($field['no_bottom_margin'] == true) {
    $marg = 'no-bottom-margin';
  } else {
    $marg = '';
  }
?>
<div class="scrolled-item email-banner <?php echo $marg; ?>">
  <section>
    <h3><?php echo $header; ?></h3>
   <p> <?php echo $content; ?></p>
  </section>
  <form action="" class="email-form form-row">
    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" id="email" class="form-control form-outline form-outline-white">
    </div>
    <div class="form-group">
      <label for="zip">Zip</label>
      <input type="email" id="zip" class="form-control form-outline form-outline-white">
    </div>
    <button class="btn btn-white">
      Sign up
    </button>
  </form>
</div>