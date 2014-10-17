<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <header>
      <h1 class="entry-title"><?php the_title(); ?></h1>
      <?php get_template_part('templates/entry-meta'); ?>
    </header>
    <div class="entry-content">
    	<div class="container">
    		<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
				<input type="hidden" name="cmd" value="_s-xclick">
				<input type="hidden" name="hosted_button_id" value="LT4XPGCL9UHDU">
				<table>
					<tr><td><input type="hidden" name="on0" value="Seleccione Paquete">Seleccione Paquete</td></tr><tr><td><select name="os0">
						<option value="1440">1440 $0.01 USD</option>
						<option value="720">720 $0.01 USD</option>
						<option value="360">360 $0.01 USD</option>
						<option value="180">180 $0.01 USD</option>
					</select> </td></tr>
				</table>
				<br>
				<input type="hidden" name="currency_code" value="USD">
				<input type="image" src="http://masonlawlor.com//classificadosoutdoor/wp-content/themes/ClassificadosOnline/assets/img/paypal-btn.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
				<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
				</form>


			<a href="" class="btn btn-primary btn-pad" id="btnSave">
				<i class="fa fa-cloud-download"> Save</i>
			</a>
			<a href="" class="btn btn-primary btn-pad" id="btnSave">
				<i class="fa fa-undo"> Redo</i>
			</a>
		</div>

		<span id="widget" class="widget" field="AGE" roundby="20" description="Patient age, in years">
        	<?php the_content(); ?>
        </span>
	  <br>

	     <div id="img-out"><canvas></canvas></div>
    </div>
    <footer>
      <?php wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?>
    </footer>
  </article>
<?php endwhile; ?>
