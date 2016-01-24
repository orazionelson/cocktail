<?php 
if($page_id=='homepage'){$anchor='';}
else {$anchor='homepage';}
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
	  <img src="images/bootstrap.png" class="img-circle" alt="logo" height="40" style="margin-top:5px; margin-right:5px;">
	</div>
	<div id="navbar" class="navbar-collapse collapse">
	  <ul class="nav scrollnav navbar-nav">
        <li class="<?php echo isActive($page_id,"homepage")?>"><a href="<?php echo  base_url()?>homepage">Home</a></li>
        <li><a href="<?php echo $anchor; ?>#about">About</a></li>
        <li><a href="<?php echo $anchor; ?>#config">Config</a></li>
        <li class="dropdown">
              <a href="<?php echo base_url()?>examples" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Examples<span class="caret"></span></a>
              <ul class="dropdown-menu">
				<li class="dropdown-header">Components</li>  
                <li class="<?php echo isActive($page_id,"datatables")?>"><a href="<?php echo base_url()?>datatables">DataTables</a></li>
                <li class="<?php echo isActive($page_id,"gallery")?>"><a href="<?php echo base_url()?>gallery">Gallery</a></li>
                <li class="<?php echo isActive($page_id,"footers")?>"><a href="<?php echo base_url()?>footers">Footers</a></li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">Pages</li> 
				<li class="<?php echo isActive($page_id,"example")?>"><a href="<?php echo base_url()?>example">Base Example</a></li>                 
                <li class="<?php echo isActive($page_id,"automatictoc")?>"><a href="<?php echo base_url()?>automatictoc">Automatic Toc</a></li>
                <li class="<?php echo isActive($page_id,"automatictabs")?>"><a href="<?php echo base_url()?>automatictabs">Automatic Tabs</a></li>
                <li class="<?php echo isActive($page_id,"portfolio")?>"><a href="<?php echo base_url()?>portfolio">Portfolio</a></li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">Helpers</li>
                <li class="<?php echo isActive($page_id,"prettypre")?>"><a href="<?php echo base_url()?>prettypre">Pretty-pre</a></li>
                <li class="<?php echo isActive($page_id,"fullpage")?>"><a href="<?php echo base_url()?>fullpage">Fullpage</a></li>
                <!--li><a href="#">One more separated link</a></li-->
			</ul>
		</li>
   	  </ul>
	</div><!--/.navbar-collapse -->
  </div>
</nav>
