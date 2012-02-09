<?php
/*
 * Return first non-null value
 *
 */
function coalesce() {
	$args = func_get_args();
	foreach($args as $arg) {
		if ($arg !== null) return $arg;
	}
	return null;
}