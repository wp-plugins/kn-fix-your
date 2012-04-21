<?php
function install_kn_fix_your_title() {
	$kn_plugin="kn_fix_your_title";
	add_option( $kn_plugin.'_firststep', '0', '', 'yes' );
	add_option( $kn_plugin.'_version', '1.0.1', '', 'yes' );
	add_option( $kn_plugin.'_separator', '|', '', 'yes' );
}
function uninstall_kn_fix_your_title() {
	$kn_plugin="kn_fix_your_title";
	delete_option( $kn_plugin.'_firststep' );
	delete_option( $kn_plugin.'_version' );
	delete_option( $kn_plugin.'_separator' );
}
function kn_fix_your_title(){
	include "var.php";
	include "fixed.php";
}
if ( is_admin() ){
	add_action('admin_menu', 'kn_fix_your_title_menu');
		function kn_fix_your_title_menu() {
			add_menu_page('Fix &lt;title&gt;', 'Fix &lt;title&gt;', 'administrator', 'kn_fix_your_title_settings', 'kn_fix_your_title_page', WP_PLUGIN_URL.'/'.str_replace(basename( __FILE__),"",plugin_basename(__FILE__)).'images/kaki.png');
			add_action( 'admin_init', 'register_kn_fix_your_title_settings' );
		}
}
function register_kn_fix_your_title_settings() {
	register_setting( 'kn_fix_your_title_group', 'kn_fix_your_title_firststep' );
	register_setting( 'kn_fix_your_title_group', 'kn_fix_your_title_version' );
	register_setting( 'kn_fix_your_title_group', 'kn_fix_your_title_separator' );
}
function kn_fix_your_title_page() {
	include "var.php";
	include "settings.php";
}
?>