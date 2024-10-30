<?php
/*
Plugin Name: Content Sidebar
Author: Subrata Mondal
Version: 1.0
Description: This is a plugin by using which you can show your sidebars in your page, post contents.
*/
add_action('init','cs_register_shortcodes');
function cs_register_shortcodes(){
   add_shortcode('cs_sidebar','csf_sidebar');
}

function csf_sidebar($attr)
{
	if($attr['id'])
	{
		$sidebar_id=$attr['id'];
		if ( is_active_sidebar($sidebar_id) ) :
			dynamic_sidebar($sidebar_id);
		endif;
	}
}
?>