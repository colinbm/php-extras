<?php
/*
 * Shortcut to using preg_match and then parsing $matches.  Returns the
 * result in $matches, less the first element, which is the whole string.
 *
 */
function preg_extract($pattern, $subject, $flags=null, $offset=null) {
	$result = preg_match($pattern, $subject, $matches, $flags, $offset);
	if (isset($matches) and is_array($matches)) {
		array_shift($matches);
		return $matches;
	}
	return false;
}