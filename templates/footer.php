<footer class="content-info" role="contentinfo">
  
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
							<a class="navbar-brand" href="<?php echo home_url(); ?>/"><img src="http://masonlawlor.com//assets/Logo.png" alt="logo-nav" width="auto" height="48px" /></a>
						</li>
				</ul>
		</div>
    </header>
</footer>

<?php wp_footer(); ?>
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<footer class="content-info" role="contentinfo">
	<header class="banner navbar navbar-fixed-bottom" role="banner">
	  <div class="container">
	    <div class="navbar-header">
	      <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	    </div>
	    <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
	      	<?php
				if (has_nav_menu('primary_navigation')) :
				  wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
				endif;			
			?>
	      <ul class="nav navbar-nav navbar-right">
	        <li>
				<a class="navbar-brand" href="<?php echo home_url(); ?>/"><img src="http://masonlawlor.com//assets/Logo.png" alt="logo-nav" width="auto" height="48px" /></a>
			</li>
	      </ul>
	    </nav>
	  </div>
	</header>
</footer>
=======
>>>>>>> parent of 6d8a3f7... Not too bad. Replaced header and footer. mixing.
=======
>>>>>>> parent of 6d8a3f7... Not too bad. Replaced header and footer. mixing.
=======
>>>>>>> parent of 6d8a3f7... Not too bad. Replaced header and footer. mixing.


