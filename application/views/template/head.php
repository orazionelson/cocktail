	<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
<?php /* codeigniter-boilerplate: Page Title *******************************/ ?>
<?php if($title):?>
<?php /* Page title: used if the page object has a title */?>
		<title><?php echo $title?></title>
<?php else:?>
<?php /* Generic site title: used if the page object has not a title */?>
		<title>__YOUR SITE TITLE HERE__</title>
<?php endif;?>		
<?php /* codeigniter-boilerplate: Page Description**************************/ ?>
<?php if($description):?>
<?php /* Page description: used if the page object has a description */?>
		<meta name="description" content="<?php echo $description?>">
<?php else:?>
<?php /* Generic site description: used if the page object has not a description */?>
		<meta name="description" content="__SITE DESCRIPTION HERE__">
<?php endif;?>		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" href="favicon.ico">
		<link rel="apple-touch-icon" href="apple-touch-icon.png">
<?php echo $css; //Here all the css ?>
		<script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
		
		  <?php /* codeigniter-boilerplate: Google Fonts ****************************/ ?>
		  <?php foreach($GFont as $f):?>
		<link  href="http://fonts.googleapis.com/css?family=<?php echo rawurlencode($f)?>" rel="stylesheet" type="text/css" >
		  <?php endforeach;?>
		  
	</head>
