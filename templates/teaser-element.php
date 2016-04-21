<?php
    global $wp_query;
    $slider_or_image       = '';
    $page_image            = function_exists('get_field') ? get_field('header_image', $wp_query->queried_object_id) : '';

    if ( $page_image ) {
        $slider_or_image =  wp_get_attachment_image( $page_image, 'full' );
    } else if ( is_front_page() ) {
        $slider_or_image = do_shortcode( '[fraction_slider]' );
    }

    echo $slider_or_image;
?>