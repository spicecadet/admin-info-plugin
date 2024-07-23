<?php

namespace AdminInfoPlugin;

class Widget {

	public function register() {
		if ( current_user_can( 'manage_options' ) ) {
			wp_add_dashboard_widget(
				'admin_info_widget',
				__( 'NUS Admin Notices', 'admin-info-plugin' ),
				array( $this, 'displayWidget' )
			);
		}
	}

	public function displayWidget() {
		$args  = array(
			'post_type'      => 'admin_info',
			'posts_per_page' => -1,
		);
		$query = new \WP_Query( $args );

		if ( $query->have_posts() ) {
			echo '<ul>';
			while ( $query->have_posts() ) {
				$query->the_post();
				echo '<li><strong>' . get_the_title() . '</strong></li><li> ' . get_the_content() . '</li><br />';
			}
			echo '</ul>';
		} else {
			echo '<p>' . __( 'No admin info found.', 'admin-info-plugin' ) . '</p>';
		}

		wp_reset_postdata();
	}
}
