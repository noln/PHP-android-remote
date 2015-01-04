<?php

	$x = $_GET['x'];
	$y = $_GET['y'];
	
	exec("/Users/matt/Development/android/sdk/platform-tools/adb shell input tap $x $y");

?>