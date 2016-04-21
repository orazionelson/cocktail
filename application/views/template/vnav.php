<?php 
if($page_id=='homepage'){$anchor='';}
else {$anchor='homepage';}

if(isset($offcanvas)) {$offc_string = "data-offcanvas=\"".$offcanvas_pos."\"";}
else $offc_string='';
?>
<nav class="navbar" <?php echo $offc_string;?>>
	<div id="top-down-header" class="navbar-header navbar-default">
	  <button type="button" class="navbar-toggle collapsed btn-mobile" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
		<span class="sr-only">Toggle navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
	  </button>
	  <a class="navbar-brand" href="index.php">Cocktail</a>
	  <img src="images/bootstrap.png" class="img-circle" alt="logo" height="40" style="margin:5px;">
	</div>
	 <div class="navbar-default sidebar-menu-container" role="navigation">
		<div id="navbar" class="sidebar-nav navbar-collapse collapse">
		  <ul class="nav" id="side-menu">
	        <li class="<?php echo isActive($page_id,"homepage")?>"><a href="<?php echo  base_url()?>homepage">Home</a></li>
	        <li><a href="<?php echo $anchor; ?>#about">About</a></li>
	        <li><a href="<?php echo $anchor; ?>#config">Config</a></li>
	        <li>
	              <a class="collapsed" data-toggle="collapse" data-target="#samples" role="button" aria-haspopup="true" aria-expanded="false">Examples<span class="caret"></span></a>
	              <ul id="samples" class="nav nav-second-level collapse sorted">
					
	                <li class="<?php echo isActive($page_id,"datatables")?>"><a href="<?php echo base_url()?>datatables">DataTables</a></li>
	                <li class="<?php echo isActive($page_id,"gallery")?>"><a href="<?php echo base_url()?>gallery">Gallery</a></li>
	                <li class="<?php echo isActive($page_id,"footers")?>"><a href="<?php echo base_url()?>footers">Footers</a></li>
	                <li class="<?php echo isActive($page_id,"example")?>"><a href="<?php echo base_url()?>example">Base Example</a></li>                 
					<li class="<?php echo isActive($page_id,"vlayout")?>"><a href="<?php echo base_url()?>vlayout">Vertical Layout</a></li>                 
	                <li class="<?php echo isActive($page_id,"automatictoc")?>"><a href="<?php echo base_url()?>automatictoc">Automatic Toc</a></li> <li class="<?php echo isActive($page_id,"footnotes")?>"><a href="<?php echo base_url()?>footnotes">Nifty Footnotes</a></li>
	                <li class="<?php echo isActive($page_id,"automatictabs")?>"><a href="<?php echo base_url()?>automatictabs">Automatic Tabs</a></li>
	                <li class="<?php echo isActive($page_id,"portfolio")?>"><a href="<?php echo base_url()?>portfolio">Portfolio</a></li>
	                <li class="<?php echo isActive($page_id,"helpers")?>"><a href="<?php echo base_url()?>helpers">Helpers</a></li>
				</ul>
			</li>
	   	  </ul>
	   </div>
	</div><!--/.sidebar -->
</nav>
