<?php 
/*
Plugin Name:  Erray plugin
Plugin URI: http://www.Erray.com
Description: je suis une apprenante a Youcode et c'est mon 1er plugin 
Version: 1.0
Author: Erray ABdellah
Author URI: http://www.Erray.com
*/

// Ajouter le menu du plugin dans l'administration
add_action('admin_menu', 'mon_plugin_menu');
function mon_plugin_menu() {
	add_menu_page('Erray plugin', 'Erray plugin', 'manage_options', 'mon-plugin', 'mon_plugin_page', 'dashicons-admin-plugins');
}

// Ajouter la page de paramètres du plugin
function mon_plugin_page() {
	?>
	<script src="https://cdn.tailwindcss.com"></script>
		<!-- ******************************************************* -->
	<div class="flex justify-center items-center w-screen h-screen bg-white">
        
        <div class="container mx-auto my-4 px-4 lg:px-20">
    
            <div class="w-full p-8 my-4 md:px-12 lg:w-9/12 lg:pl-20 lg:pr-40 mr-auto rounded-2xl shadow-2xl">
                <div class="flex">
                    <h1 class="font-bold uppercase text-5xl">Send us a <br /> message</h1>
                </div>                  
    
    
    
    <form action="" id="contact-form">
            
        <div class="grid grid-cols-1 gap-5 md:grid-cols-2 mt-5">
          <input class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"
            type="text" placeholder="First Name*" name="first_name"  />
      
          <input class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"
            type="text" placeholder="Last Name*" name="last_name"  />
      
          <input class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"
            type="email" placeholder="Email*" name="email"  />
        </div>
      
        <div class="my-4">
          <textarea placeholder="Message*" class="w-full h-32 bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline" name="message" ></textarea>
        </div>
      
        <div class="my-2 w-1/2 lg:w-1/4">
          <button class="uppercase text-sm font-bold tracking-wide bg-blue-900 text-gray-100 p-3 rounded-lg w-full focus:outline-none focus:shadow-outline" type="submit">
            Send Message
          </button>
        </div>
      
      </form>
	</div>
</div>
</div>
<!-- ******************************************************* -->
	<?php
}

// Ajouter le scripte js du plugin
add_action('admin_enqueue_scripts', 'mon_plugin_script');
function mon_plugin_script() {
	wp_enqueue_script('mon-plugin-script', plugins_url('/main.js', __FILE__));
}

// Ajouter la sécurité au plugin
add_action('plugins_loaded', 'mon_plugin_security');
function mon_plugin_security() {
	if(!current_user_can('manage_options')) {
		wp_die('Accès interdit.');
	}
}

// Ajouter l'intégration via shortcode
add_shortcode('mon_plugin', 'mon_plugin_shortcode');
function mon_plugin_shortcode() {
	ob_start();
	mon_plugin_page();
	return ob_get_clean();
}

// Créer la table du plugin dans l'activation
register_activation_hook(__FILE__, 'mon_plugin_activation');
function mon_plugin_activation()
{
    global $wpdb;

    $table_name = $wpdb->prefix . 'mon_plugin_messages';
    $charset_collate = $wpdb->get_charset_collate();

    $sql = "CREATE TABLE $table_name (
		id mediumint(9) NOT NULL AUTO_INCREMENT,
		nom varchar(255) NOT NULL,
		email varchar(255) NOT NULL,
		sujet varchar(255) NOT NULL,
		message text NOT NULL,
		date datetime NOT NULL,
		PRIMARY KEY (id)
	) $charset_collate;";

    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
}
//function pour supprimer la table du plugin 
register_deactivation_hook(__FILE__, 'mon_plugin_deactivation');
function mon_plugin_deactivation()
{
    global $wpdb;

    $table_name = $wpdb->prefix . 'mon_plugin_messages';

    $wpdb->query("DROP TABLE IF EXISTS $table_name");
}