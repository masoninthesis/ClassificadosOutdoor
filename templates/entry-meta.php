<div class="entry-meta">
	<div style="float:right;">
		<?php
			echo '<span class="comments-link">'; ?>
			<div class="comments-box">
				<?php
			comments_popup_link( '<span class="leave-reply">' . '</span>', __( '1 Reply', 'twentytwelve' ), __( '% Comments', 'twentytwelve' ) );
			echo '</span>';
		?>
			</div>
	</div>
</div>
<br />

<!-- comments_popup_link( '<span class="leave-reply">' . '</span>', __( '1 Reply', 'twentytwelve' ), __( '%', 'twentytwelve' ), '<p>Comments</p>' ); -->