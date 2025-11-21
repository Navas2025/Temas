<?php
/*
Plugin Name: Oxygen - GPL Version
Author: Navas2025 Community
Description: Oxygen Theme - GPL v2 or later. All features unlocked.
Version: 4.9.3-GPL
License: GPL v2 or later
*/

// DISABLE ALL UPDATES
add_filter('automatic_updater_disabled', '__return_true');
add_filter('auto_update_plugin', '__return_false');

define("CT_VERSION", "4.9.3-GPL");
define("CT_FW_PATH", plugin_dir_path(__FILE__) . "component-framework");
define("CT_FW_URI", plugin_dir_url(__FILE__) . "component-framework");
define("CT_PLUGIN_MAIN_FILE", __FILE__);

// ENABLE ALL FEATURES BY DEFAULT
update_option('oxygen_vsb_enable_default_designsets', 'true');
update_option('oxygen_vsb_enable_3rdp_designsets', 'true');

require_once("component-framework/component-init.php");