<?php
/*
Template Name: Pricing Template
*/
?>

<?php get_template_part('templates/page', 'header'); ?>
<?php get_template_part('templates/content', 'page'); ?>

<script type="text/javascript">
	$('document').ready(function(){
		$('#myToolTip1').tooltip();
		$('#myToolTip2').tooltip();
		$('#myToolTip3').tooltip();
		$('#myToolTip4').tooltip();
		$('#myToolTip5').tooltip();
		$('#myToolTip6').tooltip();
		$('#myToolTip7').tooltip();
		$('#myToolTip8').tooltip();
		$('#myToolTip9').tooltip();
		$('#myToolTip10').tooltip();
		$('#myToolTip11').tooltip();
		$('#myToolTip12').tooltip();
	});
</script>

<body>
	<!-- Pricing Table -->
	<section>
		<div class="container">
			<div class="col-sm-6 col-sm-offset-3">
				<table class="center-table table-striped table-bordered table">
					<thead>
						<tr>
							<th class="Green">Rotaciones/ dia</th>
							<th class="Green"><center>Rate</center></th>
						<tbody>
							<tr>
								<td>1440</td>
								<td><center>$150.00</center></td>
							</tr>
							<tr>
								<td>720</td>
								<td><center>$85.00</center></td>
							<tr>
								<td>360</td>
								<td><center>$45.00</center></td>
							</tr>
							<tr>
								<td>180</td>
								<td><center>$25.00</center></td>
							</tr>
						</tbody>
						</tr>
					</thead>
				</table>
			</div>
		</div>
	</section> 
</body>