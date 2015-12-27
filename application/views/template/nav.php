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
	  <ul class="nav navbar-nav">
        <li class="<?php echo isActive($page_id,"homepage")?>"><a href="<?php echo  base_url()?>homepage">Home</a></li>
        <li><a href="<?php echo $anchor; ?>#about">About</a></li>
        <li><a href="<?php echo $anchor; ?>#contacts">Contacts</a></li>
        <li class="<?php echo isActive($page_id,"example")?>"><a href="<?php echo base_url()?>example">Example</a></li>
        <li class="dropdown">
              <a href="<?php echo base_url()?>examples" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Examples<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="<?php echo base_url()?>datatables">DataTables</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
          </ul>
   	  </ul>
	</div><!--/.navbar-collapse -->
  </div>
</nav>
