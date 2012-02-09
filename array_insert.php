<?php
/**
 * Insert one array into another at the specified position.
 *
 */
function array_insert($original=array(), $insert=array(), $position=0) {
	$half1 = array_slice($original, 0, $position, true);
	$half2 = array_slice($original, $position, null, true);
	return $half1 + $insert + $half2;
}