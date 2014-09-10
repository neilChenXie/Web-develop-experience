/*jslint browser:true*/
/*node browser:true*/
/*global $*/

/*dynamic change check box attr*/
function allevent() {
	'use strict';
	$('.whoinvol').click(function () {
		if ($(this).attr('checked')) {
			$(this).removeAttr('checked');
		} else {
			$(this).attr('checked', 'checked');
		}
	});
}
/********check checkbox***********/
function checkinv() {
	'use strict';
	$('.whoinvol').each(function () {
		if ($(this).attr('Checked')) {
			whoinvol = true;
		}
	});
}
/**********************************/
$(document).ready(allevent);
