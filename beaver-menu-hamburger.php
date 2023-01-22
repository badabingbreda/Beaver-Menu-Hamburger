<?php
/**
 * Beaver Menu Hamburger
 *
 * @package     MenuHamburger
 * @author      Badabingbreda
 * @license     GPL-2.0+
 *
 * @wordpress-plugin
 * Plugin Name: Beaver Menu Hamburger
 * Plugin URI:  https://www.badabing.nl
 * Description: Beaver Animated Menu Hamburger
 * Version:     1.0.0
 * Author:      Badabingbreda
 * Author URI:  https://www.badabing.nl
 * Text Domain: menu-hamburger
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */


use MenuHamburger\Autoloader;
use MenuHamburger\Init;

if ( defined( 'ABSPATH' ) && ! defined( 'MENUHAMBURGER_VERION' ) ) {
 register_activation_hook( __FILE__, 'MENUHAMBURGER_check_php_version' );

 /**
  * Display notice for old PHP version.
  */
 function MENUHAMBURGER_check_php_version() {
     if ( version_compare( phpversion(), '5.6', '<' ) ) {
        die( esc_html__( 'Beaver Menu Hamburger requires PHP version 5.6+. Please contact your host to upgrade.', 'menu-hamburger' ) );
    }
 }

  define( 'MENUHAMBURGER_VERSION'   , '1.0.0' );
  define( 'MENUHAMBURGER_DIR'     , plugin_dir_path( __FILE__ ) );
  define( 'MENUHAMBURGER_FILE'    , __FILE__ );
  define( 'MENUHAMBURGER_URL'     , plugins_url( '/', __FILE__ ) );

  define( 'CHECK_MENUHAMBURGER_PLUGIN_FILE', __FILE__ );

}

if ( ! class_exists( 'MenuHamburger\Init' ) ) {

 /**
  * The file where the Autoloader class is defined.
  */
  require_once 'inc/Autoloader.php';
  spl_autoload_register( array( new Autoloader(), 'autoload' ) );

 $menu_hamburger = new Init();
 // looking for the init hooks? Find them in the Check_Plugin_Dependencies.php->run() callback

}
