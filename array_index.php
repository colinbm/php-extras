<?php
/*
 * array_index - Reindex an array of arrays, using a value of the 
 * sub array as the key.
 * 
 * array array_index ( array $array, string $key )
 *
 */
function array_index($array, $key) {
	$new_array = array();
	foreach ($array as $element) {
		if (is_array($element)) {
			$new_array[$element[$key]] = $element;
		} elseif (is_object($element)) {
			$new_array[$element->{$key}] = $element;
		}
	}
	return $new_array;
}