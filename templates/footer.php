<footer class="content-info" role="contentinfo">
  
	<nav class="navbar-fixed-bottom collapse navbar-collapse bottom-nav" role="navigation">
		<div class="row-fluid">
		    <a class="navbar-brand" href="<?php echo home_url(); ?>/"><img src="http://masonlawlor.com//smartkit/assets/images/logo.png" alt="logo-nav" width="auto" height="48px" /></a>
			<?php
			if (has_nav_menu('primary_navigation')) :
			  wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
			endif;
			?>
		</div>
    </nav>
</footer>

<?php wp_footer(); ?>
