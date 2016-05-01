<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<?php echo $head; ?>
	<body data-spy="scroll" data-target=".navbar" data-offset="50">
    <!--[if lt IE 7]>
        <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
    <![endif]-->
		<div id="main-container">
			<!--header>
			Cocktail
			</header-->
			<div id="sidebar" class="sidebar" role="sidebar">
				<?php
				/* codeigniter-boilerplate: main navigation *******************************/
				echo $nav
				?>
			</div>
			<div id="main" role="main">
			    <?php
			    /* codeigniter-boilerplate: content from single views *********************/
			    echo $content
			    ?>					
			</div>
			<div class="clearfix"></div>
<?php echo $footer; ?> 	
		</div> <!--! end of #main-container -->		
<?php 
echo $javascript; //here the js
echo $cookies; 
?>

	</body>
</html>
