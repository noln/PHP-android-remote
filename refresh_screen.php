<?php
	
	exec("/Users/matt/Development/android/sdk/platform-tools/adb shell screencap -p /mnt/sdcard/screenbuffer.png");
	exec("/Users/matt/Development/android/sdk/platform-tools/adb pull /mnt/sdcard/screenbuffer.png");

?>