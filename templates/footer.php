<footer class="content-info" role="contentinfo">
  
	<header class="navbar-fixed-bottom bottom-nav" role="navigation">
		<div class="container">
			<div class="footer-navbar">
				<nav class="collapse navbar-collapse">
					<?php
					if (has_nav_menu('primary_navigation')) :
					  wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
					endif;
					?>
					
				</nav>
			</div>
			<ul class="navbar-right">
						<li>
							<a class="navbar-brand" href="<?php echo home_url(); ?>/"><img src="http://masonlawlor.com//assets/Logo.png" alt="logo-nav" width="auto" height="48px" /></a>
						</li>
				</ul>
		</div>
    </header>
</footer>

<?php wp_footer(); ?>


