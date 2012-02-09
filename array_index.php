<?php
/*
 * array_index - Reindex an array of arrays, using a value of the 
 * sub array as the key.
 * 
 * array array_index ( array $array, string $key )
 *
 */
function array_index($array, $key) {
	if (!is_array($array)) return false;
	$new_array = array();
	foreach ($array as $element) {
		$new_array[$element[$key]] = $element;
	}
	return $new_array;
}