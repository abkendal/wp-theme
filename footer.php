<footer class="footer_nav">
  <div class="container">
  	<!-- Is there a way to make the company name a variable and set/change it in the Dashboard? -->

	<?php if ( get_theme_mod( 'themeslug_logo_footer' ) ) : ?>
	    <div class='site-logo-footer'>
	        <a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><img src='<?php echo esc_url( get_theme_mod( 'themeslug_logo_footer' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'></a>
	    </div>
	<?php else : ?>
	    <hgroup>
            <?php bloginfo( 'name' ); ?>
        </hgroup>
	<?php endif; ?>

    <p class="copyright">&copy;<?php echo date('Y'); ?> SSD Inc All Rights Reserved</p>
    <?php  wp_nav_menu(array(
      'container' => 'nav', 
      'container_id' => 'nav',
      'theme_location' => 'secondary'
    ));?>
  </div>
</footer>

<script>
/* Google Analytics! */
 var _gaq=[["_setAccount","UA-XXXXX-X"],["_trackPageview"]]; // Change UA-XXXXX-X to be your site's ID
 (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
 g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
 s.parentNode.insertBefore(g,s)}(document,"script"));
</script>

<?php wp_footer(); ?>
</body>
</html>