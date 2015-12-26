<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
	<div class="navbar-header">
	  <button type="button" class="navbar-toggle collapsed btn-mobile" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
		<span class="sr-only">Toggle navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
	  </button>
	  <img src="images/logo.png" alt="logo" height="40">
	</div>
	<div id="navbar" class="navbar-collapse collapse">
	  <ul class="nav navbar-nav">
        <li class="<?php echo isActive($page_id,"homepage")?>"><a href="<?php echo  base_url()?>homepage">Home</a></li>
        <li class="<?php echo isActive($page_id,"about")?>"><a href="<?php echo  base_url()?>homepage#about">About</a></li>
        <li class="<?php echo isActive($page_id,"contacts")?>"><a href="<?php echo  base_url()?>homepage#contacts">Contacts</a></li>
        <li class="<?php echo isActive($page_id,"example")?>"><a href="<?php echo base_url()?>example">Example</a></li>
   	  </ul>
	</div><!--/.navbar-collapse -->
  </div>
</nav>
