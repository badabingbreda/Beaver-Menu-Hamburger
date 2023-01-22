<?php
namespace MenuHamburger\Integration;

class BeaverBuilder {

    public function __construct() {
        add_filter( 'fl_builder_mobile_menu_icon' , __CLASS__ . '::menu_icon' , 10, 1 );
    }
    
    /**
     * menu_icon
     * 
     * replace the menu icon by our selected animation icon
     *
     * @param  mixed $svg
     * @return void
     */
    public static function menu_icon( $svg ) {

        // change the used effect
        $effect = apply_filters( 'menuhamburger/effect' , 'elastic' );

        return <<<EOL
           <div class="menu-hamburger hamburger--{$effect}">
             <span class="hamburger-box">
               <span class="hamburger-inner"></span>
             </span>
           </div>
EOL;
    }
}