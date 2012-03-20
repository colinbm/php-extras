<?php
/*
 * human_filesize - Take a size in bytes, and return a human
 * readable version.
 * 
 * string human_filesize( int filesize )
 *
 */
function human_filesize($size) {
	$filesizename = array(" Bytes", " KB", " MB", " GB", " TB", " PB", " EB", " ZB", " YB");
	return round($size/pow(1024, ($i = floor(log($size, 1024)))), 2) . $filesizename[$i];
}