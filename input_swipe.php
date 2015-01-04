<?php

	$x1 = $_GET['x1'];
	$y1 = $_GET['y1'];
	$x2 = $_GET['x2'];
	$y2 = $_GET['y2'];

	exec("/Users/matt/Development/android/sdk/platform-tools/adb shell input swipe $x1 $y1 $x2 $y2");

?>