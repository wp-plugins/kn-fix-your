<?php
$versi="1.0.1";
$kn_plugin="kn_fix_your_title";
$firststep=get_option( $kn_plugin.'_firststep' );
$version=get_option( $kn_plugin.'_version' );
$separator=get_option( $kn_plugin.'_separator' );
$plugin_url=WP_PLUGIN_URL.'/'.str_replace(basename( __FILE__),"",plugin_basename(__FILE__));
?>