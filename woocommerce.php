<?php
/**
 * woocommerce support
 */


function popperscores_wrapper_start() {  
    echo '&lt;div id="primary" class="content-area"&gt;';
}
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10 );
add_action( 'woocommerce_before_main_content', 'popperscores_wrapper_start', 10 ); 
 
function popperscores_wrapper_end() {
    echo '&lt;/div&gt;';
}
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10 );  
add_action( 'woocommerce_after_main_content', 'popperscores_wrapper_end', 10 );
get_header();
woocommerce_content();
get_footer();