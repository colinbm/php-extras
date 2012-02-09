<?php
/*
 * Given a number, return the correct suffix (st, nd, rd, th)
 *
 */
function ordinal($number) {
	if ($number >= 4 and $number <=20) return 'th';
	switch (substr($number, -1)) {
		case '1':
			return 'st';
		case '2':
			return 'nd';
		case '3':
			return 'rd';
		default:
			return 'th';
	}
}