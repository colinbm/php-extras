<?php
/*
 * Given an array of equal sized arrays, convert so that 'columns' are rows.
 * 
 * array(
 *    array(1, 2),
 *    array(3, 4)
 * );
 *
 * becomes:
 * 
 * array(
 *    array(1, 3),
 *    array(2, 4)
 * );
 * 
 */
function array_rotate($array) {
	$new_array = array();
	foreach ($array as $el) {
		foreach($el as $i => $value) {
			if (!isset($new_array[$i])) $new_array[$i] = array();
			$new_array[$i][] = $value;
		}
	}
	return $new_array;
}