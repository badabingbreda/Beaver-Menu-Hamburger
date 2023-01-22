<?php
namespace MenuHamburger\Helpers;

class ScriptStyle {

    public function __construct() {
        
        add_action( 'wp_enqueue_scripts' , __CLASS__ . '::style' , 90 , 1 );
    }

    public static function style() {
        wp_enqueue_style( 'hamburgers', MENUHAMBURGER_URL . 'css/hamburgers.min.css' , null, MENUHAMBURGER_VERSION, 'all' );

    }
}