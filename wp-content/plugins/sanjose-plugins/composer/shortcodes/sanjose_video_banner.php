<?php
/*
 * Banner Shortcode
 * Author: Foxthemes
 * Author URI: http://foxthemes.com/
 * Version: 1.0.0
 */

vc_map(
    array(
        'name'        => __( 'Video Banner', 'js_composer' ),
        'base'        => 'sanjose_video_banner',
        'params'      => array(
            array(
                'type'        => 'textarea_html',
                'heading'     => __( 'Video Iframe', 'js_composer' ),
                'param_name'  => 'content',
            ),
            array(
                'type'        => 'attach_image',
                'heading'     => __( 'Image video', 'js_composer' ),
                'param_name'  => 'image_video_bg',
            ),
            array(
                'type' 		  => 'textfield',
                'heading' 	  => __( 'Extra class name', 'js_composer' ),
                'param_name'  => 'el_class',
                'description' => __( 'If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.', 'js_composer' ),
                'value' 	  => ''
            ),
            /* CSS editor */
            array(
                'type' 		  => 'css_editor',
                'heading' 	  => __( 'CSS box', 'js_composer' ),
                'param_name'  => 'css',
                'group' 	  => __( 'Design options', 'js_composer' )
            )
        )
    )
);

class WPBakeryShortCode_sanjose_video_banner extends WPBakeryShortCode{
    protected function content( $atts, $content = null ) {

        extract( shortcode_atts( array(
            'image_video_bg'      => '',
            'el_class' 			  => '',
            'css' 		 		  => ''
        ), $atts ) );

        $class  = ( ! empty( $el_class ) ) ? $el_class : '';
        $class .= vc_shortcode_custom_css_class( $css, ' ' );

        // Image
        $image 	= ( ! empty( $image ) && is_numeric( $image ) ) ? wp_get_attachment_url( $image ) : '';
        $output = '';

        $output .= '<div class="sanjose-video-banner background-wrapp">';

            if( ! empty( $content ) ) :

                // Image video
                if( ! empty( $image_video_bg ) ) :
                    $image_video_bg = (!empty($image_video_bg) && is_numeric($image_video_bg)) ? wp_get_attachment_url($image_video_bg) : '';
                    $output .= '<img src="' . esc_url( $image_video_bg ) . '" class="hidden-img" alt="" />';
                endif;

                $url = '';
                $url = wp_extract_urls( $content );
                $urls = substr($url[0], 0, -6);

                $output .= '<span class="button-play"></span>';

                // Video bg
                $output .= '<div class="video_popup">';
                    $output .= '<span class="close-btn"></span>';
                    $output .= '<iframe src="about:blank" data-src="' . $urls . '?controls=0&autoplay=1&loop=1&rel=0&showinfo=0"></iframe>';
                $output .= '</div>';
            endif;

        $output .= '</div>';

        return $output;
    }
}