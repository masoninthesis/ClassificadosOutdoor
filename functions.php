<?php
/* Roots includes */
require_once locate_template('/lib/utils.php');           // Utility functions
require_once locate_template('/lib/init.php');            // Initial theme setup and constants
require_once locate_template('/lib/wrapper.php');         // Theme wrapper class
require_once locate_template('/lib/sidebar.php');         // Sidebar class
require_once locate_template('/lib/config.php');          // Configuration
require_once locate_template('/lib/activation.php');      // Theme activation
require_once locate_template('/lib/titles.php');          // Page titles
require_once locate_template('/lib/cleanup.php');         // Cleanup
require_once locate_template('/lib/nav.php');             // Custom nav modifications
require_once locate_template('/lib/gallery.php');         // Custom [gallery] modifications
require_once locate_template('/lib/comments.php');        // Custom comments modifications
require_once locate_template('/lib/relative-urls.php');   // Root relative URLs
require_once locate_template('/lib/widgets.php');         // Sidebars and widgets
require_once locate_template('/lib/scripts.php');         // Scripts and stylesheets
require_once locate_template('/lib/custom.php');          // Custom functions


/* Auto size and crop */
add_image_size( 'billboard1-thumb', 420, 300, true ); // (cropped)
add_image_size( 'billboard2-thumb', 420, 300, true ); // (cropped)
add_image_size( 'billboard3-thumb', 300, 300, true ); // (cropped)
add_image_size( 'billboard4-thumb', 420, 300, true ); // (cropped)
add_image_size( 'billboard5-thumb', 420, 300, true ); // (cropped)
add_image_size( 'billboard6-thumb', 420, 300, true ); // (cropped)
add_image_size( 'billboard7-thumb', 420, 300, true ); // (cropped)
add_image_size( 'billboard8-thumb', 946, 356, true ); // (cropped)
add_image_size( 'billboard9-thumb', 168, 120, true ); // (cropped)
add_image_size( 'billboard10-thumb', 560, 400, true ); // (cropped)
add_image_size( 'billboard11-thumb', 420, 300, true ); // (cropped)
add_image_size( 'billboard12-thumb', 420, 300, true ); // (cropped)

/* Minimum Characters 
new GW_Minimum_Characters( array( 
    'form_id' => 3,
    'field_id' => 1,
    'max_chars' => 5,
    'min_validation_message' => __( 'Oops! You need to enter at least %s characters.' ),
    'max_validation_message' => __( 'Oops! You can only enter %s characters.' )
) );

*/


