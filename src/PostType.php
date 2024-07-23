<?php

namespace AdminInfoPlugin;

class PostType {

	public function register() {
		$labels = array(
			'name'          => __( 'Admin Info' ),
			'singular_name' => __( 'Admin Info' ),
		);

		$args = array(
			'labels'            => $labels,
			'public'            => false,
			'show_ui'           => true,
			'show_in_menu'      => true,
			'capability_type'   => 'post',
			'hierarchical'      => false,
			'supports'          => array( 'title', 'editor' ),
			'menu_position'     => 20,
			'show_in_admin_bar' => true,
			'show_in_rest'      => true,
		);

		register_post_type( 'admin_info', $args );
	}
}
