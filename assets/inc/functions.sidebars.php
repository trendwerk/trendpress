<?php

/**
 * @sidebars Register the sidebars
 */
function tp_register_sidebars() {
	new TP_Sidebar('home',array(
		'name' => __('Home','tp')
	));
	new TP_Sidebar('page',array(
		'name' => __('Page','tp')
	));
	new TP_Sidebar('blog',array(
		'name' => __('Blog','tp')
	));
	new TP_Sidebar('footerid',array(
		'name' => __('Footer','tp'),
		'before_widget' => '<div id="%1$s" class="widget threecol %2$s">',
		'after_widget'  => '</div>',
	));
}
add_action('init','tp_register_sidebars');