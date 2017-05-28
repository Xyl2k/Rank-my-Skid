<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Strict//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd'>
<?php require('config.php'); ?>
<html>
   <head>
      <title>Rate My Lame</title>
      <link rel="stylesheet" media="screen" type="text/css" href="css/design.css" />
      <script src="js/jquery.js" type="text/javascript"></script>
      <script src="js/cover.js" type="text/javascript"></script>
      <script src="js/script.js" type="text/javascript"></script>
      <script type="text/javascript" src="highslide/highslide-with-gallery.js"></script>
      <link rel="stylesheet" type="text/css" href="highslide/highslide.css" />
      <link rel='shortcut icon' href='images/favicon.ico' type='image/x-icon' />
   </head>

   <body onload="search();">
      <script type="text/javascript">
         hs.graphicsDir = 'highslide/imgs/';
         hs.align = 'center';
         hs.transitions = ['expand', 'crossfade'];
         hs.wrapperClassName = 'dark borderless floating-caption';
         hs.fadeInOut = true;
         hs.dimmingOpacity = .75;
         
         // Add the controlbar
         if (hs.addSlideshow) hs.addSlideshow({
         	//slideshowGroup: 'group1',
         	interval: 1000,
         	repeat: false,
         	useControls: true,
         	fixedControls: 'fit',
         	overlayOptions: {
         		opacity: .6,
         		position: 'bottom center',
         		hideOnMouseOut: true
         	}
         });
      </script>
      <div id="header"></div>
      <div id="slogan">Le ridicule ne tue pas, mais il laisse des traces.</div>
      <div id="search">
         <label for="search">Search (nick/board): </label>
         <input type="text" id="input_search" value="Search..."/>
      </div>
      <div id="list_fail">
      </div>
   </body>
</html>