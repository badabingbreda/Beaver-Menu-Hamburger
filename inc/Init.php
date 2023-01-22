<?php
namespace MenuHamburger;

use MenuHamburger\Helpers\ScriptStyle;
use MenuHamburger\Integration\BeaverBuilder;

class Init {

    public function __construct() {
        new ScriptStyle();
        new BeaverBuilder();
        
    }
}