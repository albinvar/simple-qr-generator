<?php

session_start();

if (isset($_POST['submit'])) {
	include 'modules/qrcode.php';
	$d = $_POST['text'];
	$wm = $_POST['wm'];
	$sf = $_POST['sf'];
	$s = "qr";
	$f = "png";
	
	$result = "modules/qrcode.php?f=" . $f ."&s=" . $s . "&d=" . $d . "&wm=" . $wm . "&sf=" . $sf ;
	
	} else {
	
	$msg = "An error occurred...!!!";
	}

?>