<?php
/*
Plugin Name: Calories Burned Calculator by Calculator.iO
Plugin URI: https://www.calculator.io/calories-burned-calculator/
Description: Discover how many calories you burn during exercise. Our free Calories Burned Calculator gives accurate estimates based on activity, weight, and duration.
Version: 1.0.0
Author: www.calculator.io / Calories Burned Calculator
Author URI: https://www.calculator.io/
License: GPLv2 or later
Text Domain: calcio_calories_burned_calculator
*/

if (!defined('ABSPATH')) exit;

if (!function_exists('add_shortcode')) return "No direct call for Calories Burned Calculator by www.calculator.io";

function calcio_calories_burned_calculator_shortcode(){
    $page = 'index.html';
    return '<h2><img src="' . esc_url(plugins_url('assets/images/icon-48.png', __FILE__ )) . '" width="48" height="48">Calories Burned Calculator</h2><div><iframe style="background:transparent; overflow: scroll" src="' . esc_url(plugins_url($page, __FILE__ )) . '" width="100%" frameBorder="0" allowtransparency="true" onload="this.style.height = this.contentWindow.document.documentElement.scrollHeight + \'px\';" id="calcio_calories_burned_calculator_iframe"></iframe></div>';
}


add_shortcode( 'calcio_calories_burned_calculator', 'calcio_calories_burned_calculator_shortcode' );