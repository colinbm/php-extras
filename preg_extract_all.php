<?php
/*
 * Same as preg_extract function but using preg_match_all.
 *
 */
function preg_extract_all($pattern, $subject, $flags=null, $offset=null) {
	$result = preg_match_all($pattern, $subject, $matches, $flags, $offset);
	if (isset($matches) and is_array($matches)) {
		array_shift($matches);
		return $matches;
	}
	return false;
}