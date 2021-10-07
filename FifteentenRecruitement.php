<?php
   /**
   * Plugin Name: Fifteenten Recruitment - Initializer
   * Plugin URI: 
   * description:  Initializes FifteenTen Recriutment Site
   * Version: 1.2
   * Author: Will @ Fifteenten
   * Author URI: fifteenten.co.uk
   * License: GPL2
   */


// If this file is called directly, abort.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}



/**
 * The code that runs during plugin activation.
 */
function activate_fifteenten_recruitment() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/classes/FifteentenRecruitmentActivator.php';
	$fifteentenActivator = new FifteenTenRecruitmentActivator();  // correct
}

/**
 * The code that runs during plugin deactivation.
 */
function deactivate_fifteenten_recruitment() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/classes/FifteentenRecruitmentDeactivator.php';
	
    FifteenTenRecruitmentDeactivator::deactivate();
    
}

register_activation_hook( __FILE__, 'activate_fifteenten_recruitment' );
register_deactivation_hook( __FILE__, 'deactivate_fifteenten_recruitment' );


// Load Functions
require_once plugin_dir_path( __FILE__ ) . 'includes/functions/load.php';


// Plugin Instance
require_once plugin_dir_path( __FILE__ ) . 'includes/classes/FifteentenRecruitment.php';

$plugin = new FifteentenRecruitment();
