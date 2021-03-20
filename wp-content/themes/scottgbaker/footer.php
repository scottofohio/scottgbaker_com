<?php
/**
 * The Footer for the Baker Design Baseline Theme
 *
 *
 * @package WordPress
 * @subpackage Baker Design Theme 1.0
 * @since 2.0
 */

 ?>

</main> <!-- # end site container --> 
<footer class="site-footer">
  <div>
  
  <nav class="footer-nav">
    <a href="https://github.com/sgbakerr">GitHub</a>
    <a href="mailto:scott@scottgbaker.com">Email</a>
  </nav>
  <div class="search-form">
    <?php get_search_form() ?>
  </div>
  <p>&copy; <?php echo date('Y'); ?> Scott G Baker </p>
  </div>
</footer>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-54412400-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-54412400-1');
</script>
<?php wp_footer(); ?>
</body>
</html>