<!--<footer class="content-info" role="contentinfo">
  
	<header class="navbar-fixed-bottom" role="navigation">
		<div class="container">
			<div class="footer-navbar">
				<nav class="collapse navbar-collapse bottom-nav">
					<?php
					if (has_nav_menu('primary_navigation')) :
					  wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
					endif;
					?>
					
				</nav>
			</div>
			<ul class="navbar-right">
						<li>
							<a class="navbar-brand" href="<?php echo home_url(); ?>/"><img src="http://masonlawlor.com//classificadosoutdoor/wp-content/themes/ClassificadosOnline/assets/img/Logo.png" alt="logo-nav" width="auto" height="48px" /></a>
						</li>
				</ul>
		</div>
    </header>
</footer>-->

<?php wp_footer(); ?>
<footer class="content-info" role="contentinfo">
	<header class="banner navbar-fixed-bottom footer" role="banner">
	  <div class="container">
	    <div class="navbar-header">
	    </div>
	    <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
	      	<?php
				if (has_nav_menu('primary_navigation')) :
				  wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
				endif;			
			?>
	      <ul class="nav navbar-nav navbar-right">
	        <li>
				<a class="navbar-brand" href="<?php echo home_url(); ?>/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Logo.png" alt="logo-nav" width="auto" height="48px" /></a>
			</li>
	      </ul>
	    </nav>
	  </div>
	</header>
</footer>


