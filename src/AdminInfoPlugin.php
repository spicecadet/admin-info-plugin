<?php

namespace AdminInfoPlugin;

use AdminInfoPlugin\PostType;
use AdminInfoPlugin\Widget;

class AdminInfoPlugin {

	public function init() {
		add_action( 'init', array( $this, 'registerPostType' ) );
		add_action( 'wp_dashboard_setup', array( $this, 'addDashboardWidgets' ) );
	}

	public function registerPostType() {
		$postType = new PostType();
		$postType->register();
	}

	public function addDashboardWidgets() {
		$widget = new Widget();
		$widget->register();
	}
}
