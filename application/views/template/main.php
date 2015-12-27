<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <?php /* codeigniter-boilerplate: Page Title *******************************/ ?>
  <?php if($title):?>
  <?php /* Page title: used if the page object has a title */?>
  <title><?php echo $title?></title>
  <?else:?>
  <?php /* Generic site title: used if the page object has not a title */?>
  <title>__YOUR SITE TITLE HERE__</title>
  <?php endif;?>

  <?php /* codeigniter-boilerplate: Page Description**************************/ ?>
  <?php if($description):?>
  <?php /* Page description: used if the page object has a description */?>
  <meta name="description" content="<?php echo $description?>">
  <?else:?>
  <?php /* Generic site description: used if the page object has not a description */?>
  <meta name="description" content="__SITE DESCRIPTION HERE__">
  <?php endif;?>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="favicon.ico">
  <link rel="apple-touch-icon" href="apple-touch-icon.png">
  <link rel="stylesheet" href="<?php echo base_url()?>css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url()?>css/bootstrap-theme.css">
  <?php /* codeigniter-boilerplate: Styles **********************************/ ?>
  <!--link rel="stylesheet" href="<?php echo base_url()?>css/normalize.css">
  <link rel="stylesheet" href="<?php echo base_url()?>css/style.css"-->
  <?php foreach($css as $c):?>
  <link rel="stylesheet" href="<?php echo base_url()?>css/<?php echo $c?>">
  <?php endforeach;?>
  <link rel="stylesheet" href="<?php echo base_url()?>css/main.css">
  <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>

  <?php /* codeigniter-boilerplate: Google Fonts ****************************/ ?>
  <?php foreach($GFont as $f):?>
  <link  href="http://fonts.googleapis.com/css?family=<?php echo $f?>" rel="stylesheet" type="text/css" >
  <?php endforeach;?>
  <link rel="stylesheet" href="css/font-awesome.min.css">
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">
    <!--[if lt IE 7]>
        <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
    <![endif]-->

<div id="container">
    <header>
    <?php
    /* codeigniter-boilerplate: main navigation *******************************/
    echo $nav
    ?>
    </header>
    <div id="main" role="main">
    <?php
    /* codeigniter-boilerplate: content from single views *********************/
    echo $content
    ?>
    </div>
    <footer>
		<div class="container">
		<div class="row">
			<div class="col-md-4">
				<h2>Footer content Nav</h2>
			</div>
			<div class="col-md-4">
				<h2>map</h2>
			</div>
			<div class="col-md-4">
				<h2>Info</h2>
			</div>
		</div>
		</div>
    </footer>
  </div> <!--! end of #container -->


  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="<?php echo base_url()?>js/vendor/jquery-1.11.2.js"><\/script>')</script>
  <script src="<?php echo base_url()?>js/vendor/bootstrap.min.js"></script>

  <?php /* cocktail: Scripts *********************************/?>
  <?php foreach($javascript as $js):?>
  <script src="<?php echo base_url()?>js/vendor/<?php echo $js?>"></script>
  <?php endforeach;?>
  
  <!-- scripts concatenated and minified via ant build script-->
  <script src="<?php echo base_url()?>js/plugins.js"></script>
  <script src="<?php echo base_url()?>js/main.js"></script>
  <!-- end scripts-->
      <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
      <script>
          var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
          (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
          g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
          s.parentNode.insertBefore(g,s)}(document,'script'));
      </script>
    </body>
</html>
