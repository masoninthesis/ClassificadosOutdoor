<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <header>
      <h1 class="entry-title"><?php the_title(); ?></h1>
      <?php get_template_part('templates/entry-meta'); ?>
    </header>
    <div class="entry-content">
    	<div class="container">
        <div id="paypal" class="col-xs-12">
          <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
            <input type="hidden" name="cmd" value="_xclick">
            <input type="hidden" name="business" value="info@clasificadosoutdoor.com">
            <input type="hidden" name="lc" value="US">
            <input type="hidden" name="item_name" value="Clasificados">
            <input type="hidden" name="button_subtype" value="services">
            <input type="hidden" name="no_note" value="0">
            <input type="hidden" name="currency_code" value="USD">
            <input type="hidden" name="bn" value="PP-BuyNowBF:paypal-btn.png:NonHostedGuest">
            <table>
            <tr><td><input type="hidden" name="on0" value="Rates">Rates</td></tr><tr><td><select name="os0">
              <option value="1440">1440 $150.00 USD</option>
              <option value="720">720 $85.00 USD</option>
              <option value="360">360 $45.00 USD</option>
              <option value="180">180 $25.00 USD</option>
            </select> </td></tr>
            </table>
            <input type="hidden" name="currency_code" value="USD">
            <input type="hidden" name="option_select0" value="1440">
            <input type="hidden" name="option_amount0" value="150.00">
            <input type="hidden" name="option_select1" value="720">
            <input type="hidden" name="option_amount1" value="85.00">
            <input type="hidden" name="option_select2" value="360">
            <input type="hidden" name="option_amount2" value="45.00">
            <input type="hidden" name="option_select3" value="180">
            <input type="hidden" name="option_amount3" value="25.00">
            <input type="hidden" name="option_index" value="0">
            <input class="pay-btn" type="image" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/paypal-btn.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
            <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
          </form>
        </div>
        <div id="note" class="col-sm-5 col-xs-12">
          <div class="alert alert-warning">ó llamar 787-641-1191 para alternativa de pago</div>
        </div>
        <div id="btns" class="col-xs-12">
          <a href="" class="btn btn-primary btn-pad" id="btnSave">
            <i class="fa fa-cloud-download"> Save</i>
          </a>
          <a href="http://clasificadosoutdoor.com/escoja-su-billboard/" class="btn btn-primary btn-pad" id="btnSave">
            <i class="fa fa-undo"> Redo</i>
          </a>
        </div>
  			<span id="widget" class="widget">
      			<?php the_content(); ?>
      		</span>
  	  		<br>
      		<div id="img-out"><canvas width="362" height="30"></canvas></div>
      	</div>
    	</div>
    <footer>
      <?php wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?>
    </footer>
  </article>
<?php endwhile; ?>
