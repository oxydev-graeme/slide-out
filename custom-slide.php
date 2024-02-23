<?php
/*
Plugin Name: Custom Slide Out Plugin
Description: Adds a custom slide-out div with a form and mobile buttons.
Version: 1.0
Author: TopFire Media
*/

// Define plugin constants
define('SIDE_BUTTON_TEXT', 'Get Started Now');
define('MOBILE_BUTTON_1_TEXT', 'Button 1');
define('MOBILE_BUTTON_1_LINK', '#');
define('MOBILE_BUTTON_2_TEXT', 'Button 2');
define('MOBILE_BUTTON_2_LINK', '#');

// Enqueue scripts and styles
function custom_slide_out_enqueue_scripts() {
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css');
    wp_enqueue_style('custom-slide-out-style', plugin_dir_url(__FILE__) . 'style.css');
    wp_enqueue_script('custom-slide-out-script', plugin_dir_url(__FILE__) . 'script.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'custom_slide_out_enqueue_scripts');

// Add slide out div
function custom_slide_out_div() {
    ?>
    <div class="side-button"><?php echo SIDE_BUTTON_TEXT; ?></div>
    <div id="custom-slide-out">
        <div id="slide-out-content">
            <button class="close-button"><i class="fas fa-times"></i></button>
            <h2>Get Started</h2>
            <?php echo do_shortcode('[your_form_shortcode_here]'); ?>
        </div>
    </div>
    <div id="mobile-buttons">
        <a href="<?php echo MOBILE_BUTTON_1_LINK; ?>"><?php echo MOBILE_BUTTON_1_TEXT; ?></a>
        <a href="<?php echo MOBILE_BUTTON_2_LINK; ?>"><?php echo MOBILE_BUTTON_2_TEXT; ?></a>
    </div>
    <?php
}
add_action('wp_footer', 'custom_slide_out_div');
