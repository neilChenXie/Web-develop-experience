<?php
	require 'functions.php';
	//echo 'worked';
	$email = deal_input($_POST['email']);
	if(test_email($email)) {
		$con = mysql_connect('localhost','root','121');
		mysql_select_db('account');
		$sql = 'select * from User where Email = "'.$email.'"';
		$res = mysql_query($sql);
		$row = mysql_fetch_array($res);
		if($row) {
			echo 'Existed';
		}
	}elseif (!$email) {
		echo '*Cannot be empty';
	}else {
		echo '*Invalid format';
	}
?>
