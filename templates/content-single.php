<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <header>
      <h1 class="entry-title"><?php the_title(); ?></h1>
      <?php get_template_part('templates/entry-meta'); ?>
    </header>
    <div class="entry-content">
    	<div class="container">
			<a href="#"><h3>Redo Billboard</h3></a>
			<input type="button" id="btnSave" value="Save PNG">
		</div>

		<span id="widget" class="widget" field="AGE" roundby="20" description="Patient age, in years">
      <?php the_content(); ?>
      </span>
	  <br>

	  <div id="img-out"><canvas width="362" height="30"></canvas></div>
    </div>
    <footer>
      <?php wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?>
    </footer>
  </article>
<?php endwhile; ?>
