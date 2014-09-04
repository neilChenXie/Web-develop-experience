<?php
require 'functions.php';
$errmsg = '';
/*deal with input*/
$input = deal_input($_POST['input']);
/*use function/database to validation*/
/*based on errmsg to echo*/
if(!$errmsg) {
	echo 'Pass valid';
} else {
	echo $errmsg;
}
?>
