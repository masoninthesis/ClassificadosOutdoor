<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php wp_title('|', true, 'right'); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <?php wp_head(); ?>

  <link rel="alternate" type="application/rss+xml" title="<?php echo get_bloginfo('name'); ?> Feed" href="<?php echo esc_url(get_feed_link()); ?>">
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,800,700' rel='stylesheet' type='text/css'>
  <link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
  
  <!-- Canvas2Image -->
  <script type="text/javascript" src="http://masonlawlor.com/assets/jsfiddle/index_files/html2canvas.js"></script>
  <script type="text/javascript" src="http://masonlawlor.com/assets/jsfiddle/index_files/base64.js"></script>
  <script type="text/javascript" src="http://masonlawlor.com//assets/jsfiddle/index_files/canvas2image.js"></script>
  
  <script type="text/javascript">//<![CDATA[ 
$(window).load(function(){
$(function() { 
    $("#btnSave").click(function() { 
        html2canvas($("#widget"), {
            onrendered: function(canvas) {
                theCanvas = canvas;
                document.body.appendChild(canvas);

                // Convert and download as image 
                Canvas2Image.saveAsPNG(canvas); 
                $("#img-out").append(canvas);
                // Clean up 
                document.body.removeChild(canvas);
            }
        });
    });
}); 

});//]]>  

</script>
<!-- /Canvas2Image -->
  
</head>
