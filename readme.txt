This plugin was created to add color backgrounds to visually cue story status during the editing process at WUFT News in Gainesville, Fla.

It is designed to work in conjunction with the EditFlow plugin (https://wordpress.org/plugins/edit-flow/), which can create custom statuses.

To modify, add

table.wp-list-table tr.status-ready-for-first-edit {
		background-color: #ccffff;
	}

listings and change the second tr.status-XXXXXXXX to the slug on your new or existing status in WordPress
