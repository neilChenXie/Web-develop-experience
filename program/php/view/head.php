<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<!--extension-->
	<script src="/extend/jquery-1.11.1.min.js" type='text/javascript'></script>
	<link rel="stylesheet" href="/extend/jquerymobile/jquery.mobile-1.4.3.min.css" type='text/css'>
	<script src="/extend/jquerymobile/jquery.mobile-1.4.3.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--all js-->
	<?php foreach($jsfile as $key => $value) {?>
		<script type='text/javascript' src='/template/<?php echo $value;?>'></script>
	<?php } ?>
	<!--all css-->
	<link href='template/source/general.css' type='text/css' rel='stylesheet'/>
	<?php foreach($cssfile as $key => $value) {?>
		<link href='/template/<?php echo $value;?>' type='text/css' rel='stylesheet'/>
	<?php } ?>
	<title><?php echo $title;?></title>
</head>
<!--load helper-->
<?php
$this->load->helper('form');
$this->load->helper('url');
?>
