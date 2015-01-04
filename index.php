<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>PHP Android Remote</title>
  <meta name="author" content="Matt Fenlon">

	<link rel="stylesheet" href="css/styles.css?v=1.0">

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js" ></script>

	<script>

	// A $( document ).ready() block.
	$( document ).ready(function() {
		
		$('#swipe_left').click(function() {
	  		$.get("input_swipe.php?x1=50&y1=0&x2=100&y2=500");
		});

		$('#swipe_right').click(function() {
	  		$.get("input_swipe.php?x1=50&y1=1920&x2=100&y2=0");
		});

		$('#refresh_screen').click(function() {
	  		refreshScreen();
		});

			//input_swipe.php?x1=50&y1=1920&x2=100&y2=0

		$('#screenbuffer').mousemove(function( event ) {
  			console.log( "moved: " + event.pageX + ", " + event.pageY);

  			var sb = $( "#screenbuffer" );
			var position = sb.position();

  			$('#pointer_x').html((event.pageX-position.left));
  			$('#pointer_y').html((event.pageY-position.top));
		});

		$('#screenbuffer').click(function ( event ){

			var sb = $( "#screenbuffer" );
			var position = sb.position();

  			var tapX = (event.pageX-position.left);
  			var tapY = (event.pageY-position.top);

			//alert("tap: " + tapX + "," + tapY);

			$.get("input_tap.php?x="+tapX+"&y=" + tapY)
			.done(function() {
    			$.get("refresh_screen.php")
    			.done(function() {
    				// use setTimeout() to execute
 					setTimeout(refreshScreen, 100)
    			});
  			});

		});

		function refreshScreen(){
			console.log("* Updating screen");
			$.get("refresh_screen.php").done(function(){
				var d = new Date();
					$('#screenbuffer').attr("src", "screenbuffer.png?"+d.getTime());
			});
		}

	});
	

  </script>

  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
</head>

<body>
  <script src="js/scripts.js"></script>

<div id="refresh_screen" class="button">Refresh Screen</div>
<div id="swipe_left" class="button">Swipe Left</div>
<div id="swipe_right" class="button">Swipe Rightt</div>

<div id="pointer_x"></div>
<div id="pointer_y"></div>

<img id="screenbuffer" src="screenbuffer.png"/>

</body>
</html>