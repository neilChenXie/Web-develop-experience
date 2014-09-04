/*jslint browser:true*/
/*node browser:true*/
/*global $*/
/*all event function here*/
function validate() {
	'use strict';
	var emailreg, phonereg, reg;
	emailreg = /^[_a-z0-9]+(\.[_a-z0-9]+)*@[a-z0-9]+(\.[a-z0-9]+)*(\.[a-z]{2,3})$/;
	phonereg = /^[0-9]{10,11}$/;
	/*reg validation*/
	if (reg.test()) {
		/*set flag true*/
		/*(append success msg)*/
	} else {
		/*set flag false*/
		/*append errmsg*/
	}
}
function sub() {
	'use strict';
	/*validate again*/
	/*return based on flags*/
}
function allevent() {
	'use strict';
	/*set false to all global flag*/
	/*all event*/
}
$(document).ready(allevent);
