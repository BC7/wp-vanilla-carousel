<?php 

/**
 * The [wporg] shortcode.  Accepts a title and will display a box.
 *
 * @param array  $atts     Shortcode attributes. Default empty.
 * @param atring $content  Shortcode content. Default null.
 * @param string $tag      Shortcode tag (name). Default empty.
 *
 * @return string
 */
function vc_cpt_shortcode( $atts = [], $content = null, $tag = null) {
    // normalize attribute keys, lowercase
    $atts = array_change_key_case( (array) $atts, CASE_LOWER );

    // override default attributes with user attributes
    $vc_atts = shortcode_atts(
        array(
            'id' => 0,
        ), $atts, $tag
    );
 
    // start box
    $o = '<div class="vanilla-carousel-container">';
 
    // title
    $o .= '<h2>' . esc_html__( $vc_atts['id'], 'vanilla_carousel' ) . '</h2>';
 
    // enclosing tags
    if ( ! is_null( $content ) ) {
        // secure output by executing the_content filter hook on $content
        $o .= apply_filters( 'the_content', $content );
 
        // run shortcode parser recursively
        $o .= do_shortcode( $content );
    }
 
    // end box
    $o .= '</div>';
 
    // return output
    return $o;
}

add_shortcode('vanilla-carousel', 'vc_cpt_shortcode');
?>