<?php
/* Enqueue Styles */
if ( ! function_exists('thr_enqueue_styles') ) {
    function thr_enqueue_styles() {
        wp_enqueue_style( 'twenty-twenty-three-style', get_template_directory_uri() .'/style.css' );
    }
    add_action('wp_enqueue_scripts', 'thr_enqueue_styles');
}

add_shortcode('featured_image', 'my_post_featured_img');

// Creating an ACF block
// https://www.advancedcustomfields.com/blog/build-business-listing-acf-blocks-query-loop-block-theme/
add_action( 'acf/init', 'lch_acf_init_blocks' );
function lch_acf_init_blocks() {

    if ( function_exists( 'acf_register_block_type' ) ) {
        acf_register_block_type(
            array(
                'name'            => 'artillery-link',
                'title'           => 'Artillery link',
                'description'     => 'Add article artillery link.',
                // This is the PHP file that is used to render the output for our block. 
                // Inside this file, you can use any WordPress functions you could normally use in a template file.
                'render_template' => 'block-templates/artillery-link.php',
                'category'        => 'text',
                'icon'            => 'admin-links',
                'api_version'     => 2,
                'keywords'        => array( 'artillery link', 'link' ),
                'mode'            => 'preview',
                'supports'        => array(
                    'jsx'        => true,
                    'color'      => array(
                        'text'       => true,
                        'background' => false,
                    ),
                    'align_text' => true,
                ),
            )
        );
    }
}
