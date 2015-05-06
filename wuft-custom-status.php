<?php
/**
 * Plugin Name: WUFT Color Status
  * Description: Custom Color status bars in Posts
 * Version: 0.1
 * Author: WUFT News, Matt Sheehan inspired by Daniel Bachhuber
 */


add_action( 'admin_head', 'efx_custom_status_css' );
function efx_custom_status_css() {
	global $pagenow;
	if ( 'edit.php' != $pagenow )
		return; ?>


<style>
	table.wp-list-table tr.status-ready-for-first-edit {
		background-color: #ccffff;
	}

	table.wp-list-table tr.status-ready-second-edit {
  	background-color: #ccffcc;
	}

	table.wp-list-table tr.status-to-slot {
		background-color: #99ff99;
	}

	table.wp-list-table tr.status-ready-to-publish {
  	background-color: #ccff99;
	}

	table.wp-list-table tr.status-futurepost {
  	background-color: #9999ff;
	}

	table.wp-list-table tr.status-reporter-questions {
		background-color: #ffcc66;
	}

		table.wp-list-table tr.status-spike {
			background-color: #ff0000;
		}
</style>
<?php
}
