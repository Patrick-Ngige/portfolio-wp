<?php

/**
 * @package portfolio plugin
 */

/*
Plugin Name: portfolio
Plugin URI: http://...
Description: A tpersonal portfolio
Version: 1.0.0
Author: Patrick
Author URI: http://...
License: GPLv2 or Later
Text Domain: pms plugin
*/

//Security Check 

defined('ABSPATH') or die("Caught you hacker");

//Require once the Composer Autoload
if(file_exists(dirname(__FILE__).'/vendor/autoload.php')){
    require_once dirname(__FILE__).'/vendor/autoload.php';
}

use Inc\Base;
function activate_portfolio_plugin(){
    Base\Activate::activate();
    // $create_table = new \Inc\Pages\CreateTable();
    // $create_table->register();
}
register_activation_hook(__FILE__, 'activate_portfolio_plugin');

function deactivate_portfolio_plugin(){
    Base\Deactivate::deactivate();
}

register_deactivation_hook(__FILE__, 'deactivate_portfolio_plugin');

// if(class_exists('Inc\\Init')){
//     Inc\Init::register_services();
// }
