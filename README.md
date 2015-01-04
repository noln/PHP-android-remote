PHP-Android-Remote
==================

I smashed my Nexus 4 :*-(

The touchscreen input no longer works, but the phone seems fine apart from that. So I decided to see how easy it would be to control it remotely using the Android Debug Bridge (ADB), which lets you send commands to connected devices, and PHP.

The answer to that ponderance: very easy indeed.

Developed on OS X, using XAMPP as the local web server, with ADB configured as you would for normal Android development. As long as it's the only device (or emulator) connected to ADB it'll *just work*. Speaking of emulators, it should work for those too, again with the single connected device stipulation. Though I haven't tried that yet.

Currently an as-is, might write a blog post about it soon. Time permitting (as ever...).
