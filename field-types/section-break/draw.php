<?php
	// There's already a break for callout-esque types
	if (!empty($bigtree["last_resource_type"]) && $bigtree["last_resource_type"] != "callouts") {
		echo '<hr />';
	}

	if (!empty($field["title"])) {
		echo '<h3>'.$field["title"].'</h3><br />';
	}
