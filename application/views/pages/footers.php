<div class="clearfix"></div>
<div class="container">
<h2>Footers</h2>
<p>Cocktail bundles 5 templates for page <em>footer</em>, the starting code from <a href="http://tutorialzine.com/2015/01/freebie-5-responsive-footer-templates/">this demo</a> has been ported to Bootstrap.</p>
<p>Set in <code>BP_Controller.php</code>:</p> 
	<ol>
		<li>the variable <code>$hasFooter = true;</code> (default)</li>
		<li>push the template to the main controller:
			<pre><code>
if($this->hasFooter){
	$toFooter['footer_id']='';
	$toTpl["footer"] = $this->load->view("template/<em>choose-your-footer</em>",$toFooter,true);
}		
		</code></pre></li>
	</ol>
<p>Choose between:</p>
<div id="bp-footers" class="tocfy" data-toc-side="top">
	<div class="container">
		<h3>footer-basic-centered</h3>
		<?php echo $footer_basic_centered; ?>
	</div>
	<div class="container" style="margin-top:60px">
		<h3>footer-distributed</h3>
		<?php echo $footer_distributed; ?>
	</div>
	<div class="container" style="margin-top:60px">
		<h3>footer-distributed-with-search</h3>
		<?php echo $footer_distributed_with_search; ?>
	</div>
	<div class="container" style="margin-top:60px">
		<h3>footer-distributed-with-contact-form</h3>
		<?php echo $footer_distributed_with_contact_form; ?>
	</div>
	<div class="container" style="margin-top:60px">
		<h3>footer-distributed-with-contact-addess-and-phones</h3>
		<?php echo $footer_distributed_with_address_and_phones; ?>
	</div>
</div>
</div>
