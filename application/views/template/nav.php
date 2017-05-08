<?php 
if($page_id=='homepage'){$anchor='';}
else {
	$anchor='homepage';
	$anchor=base_url().$anchor;
	}
?>
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
	<div class="navbar-header">
	  <button type="button" class="navbar-toggle collapsed btn-mobile" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
		<span class="sr-only">Toggle navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
	  </button>
	  <img src="<?php echo base_url()?>images/bootstrap.png" class="img-circle" alt="logo" height="40" style="margin-top:5px; margin-right:5px;">
	</div>
	<div id="navbar" class="navbar-collapse collapse">
	  <ul class="nav scrollnav navbar-nav">
        <li class="<?php echo isActive($page_id,"homepage")?>"><a href="<?php echo  base_url()?>homepage">Home</a></li>
        <li><a href="<?php echo $anchor; ?>#about">About</a></li>
        <li><a href="<?php echo $anchor; ?>#config">Config</a></li>
        <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages&amp;Prototypes<span class="caret"></span></a>
              <ul class="dropdown-menu sorted">
				<li class="<?php echo isActive($page_id,"datatables")?>"><a href="<?php echo base_url()?>datatables">DataTables</a></li>
                <li class="<?php echo isActive($page_id,"gallery")?>"><a href="<?php echo base_url()?>gallery">Gallery</a></li>
                <li class="<?php echo isActive($page_id,"footers")?>"><a href="<?php echo base_url()?>footers">Footers</a></li>
				<li class="<?php echo isActive($page_id,"example")?>"><a href="<?php echo base_url()?>example">Base Example</a></li>                 
 				<li class="<?php echo isActive($page_id,"vlayout")?>"><a href="<?php echo base_url()?>vlayout">Vertical Layout</a></li>                 
                <li class="<?php echo isActive($page_id,"automatictoc")?>"><a href="<?php echo base_url()?>automatictoc">Automatic Toc</a></li> <li class="<?php echo isActive($page_id,"footnotes")?>"><a href="<?php echo base_url()?>footnotes">Nifty Footnotes</a></li>
                <li class="<?php echo isActive($page_id,"automatictabs")?>"><a href="<?php echo base_url()?>automatictabs">Automatic Tabs</a></li>
                <li class="<?php echo isActive($page_id,"portfolio")?>"><a href="<?php echo base_url()?>portfolio">Portfolio</a></li>
                <li class="<?php echo isActive($page_id,"helpers")?>"><a href="<?php echo base_url()?>helpers">Helpers</a></li>
                <li class="<?php echo isActive($page_id,"Feedreader")?>"><a href="<?php echo base_url()?>feedreader">Feedreader</a></li>
                <li class="<?php echo isActive($page_id,"Opendataclient")?>"><a href="<?php echo base_url()?>opendataclient">Open Data Client</a></li>
			</ul>
		</li>
   	  </ul>
	</div><!--/.navbar-collapse -->
  </div>
</nav>
