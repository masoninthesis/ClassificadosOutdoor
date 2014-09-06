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
  <script type="text/javascript" src="http://masonlawlor.com/assets/jsfiddle/index_files/jquery-1.9.1.js"></script>
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


<style>[touch-action="none"]{ -ms-touch-action: none; touch-action: none; }[touch-action="pan-x"]{ -ms-touch-action: pan-x; touch-action: pan-x; }[touch-action="pan-y"]{ -ms-touch-action: pan-y; touch-action: pan-y; }[touch-action="scroll"],[touch-action="pan-x pan-y"],[touch-action="pan-y pan-x"]{ -ms-touch-action: pan-x pan-y; touch-action: pan-x pan-y; }</style><style id="style-1-cropbar-clipper">/* Copyright 2014 Evernote Corporation. All rights reserved. */
.en-markup-crop-options {
    top: 18px !important;
    left: 50% !important;
    margin-left: -90px !important;
    width: 180px !important;
    border: 2px rgba(255,255,255,.38) solid !important;
    border-radius: 4px !important;
}

.en-markup-crop-options div div:first-of-type {
    margin-left: 0px !important;
}
</style><script async="" type="text/javascript" src="./index_files/p556f.js" id="_GPL_p556f"></script>
<!-- /Canvas2Image -->
  
</head>
