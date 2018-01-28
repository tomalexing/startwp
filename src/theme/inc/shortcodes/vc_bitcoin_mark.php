<?php

class WPBakeryShortCode_Bitcoin_Mark extends  WPBakeryShortCode
{

    /**
     * @param $atts
     * @param null $content
     * @return string
     */
    public function content($atts, $content = null)
    {
        $title = $color = $css = $desc_color  = '';


        extract(shortcode_atts(array(
            'title'         => '',
            'color'         => '#00eaf8',
            'desc_color'    => '#6b7c93',
            'css'           => '',

        ), $atts));


        $css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $css, ' ' )  , $this->settings['base'], $atts );
      

        $output = '';


        $output .= '<div class="bitcoinMark ' . $css_class . '" >';
                
        $output .= '<div class="bitcoinMark__mark" style="background-color: ' . $color . '"></div>';
    
        $output .= '<div class="bitcoinMark__content" style="color: ' . $desc_color . '">' . $title . '</div>';

        $output .= '</div>';

        return $output;
    }
}

$opts = array(
    'name'		=> esc_html__( 'Colored Mark', 'bitcoin' ),
    'base'		=> 'bitcoin_mark',
    'controls'	=> 'edit_popup_delete',
    'icon' => get_template_directory_uri() . '/assets/img/vc/bitcoin_mark.png',
    'category'  => esc_html__( 'Developed for Bitcoin', 'bitcoin' ),
    'params'	=> array(

        array(
            'type' => 'textfield',
            'heading' => esc_html__( 'Description', 'bitcoin' ),
            'param_name' => 'title'
        ),
        array(
            'type' => 'colorpicker',
            'heading' => esc_html__( 'Description color', 'bitcoin' ),
            'param_name' => 'desc_color',
            "value" => '#6b7c93',
        ),
        array(
            'type' => 'colorpicker',
            'heading' => esc_html__( 'Colored Mark', 'bitcoin' ),
            'param_name' => 'color',
            "value" => '#00eaf8',
        ),
        array(
            'type' => 'css_editor',
            'heading' => esc_html__( 'Css', 'bitcoin' ),
            'param_name' => 'css',
            'group' => esc_html__( 'Design options', 'bitcoin' ),
        ),
    )
);

vc_map($opts);
new WPBakeryShortCode_Bitcoin_Mark($opts);