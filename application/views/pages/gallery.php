<div class="clearfix"></div>

<div class="container">
	<h2>Static Galleries</h2>
	<p>You can obtain a static gallery just adding the javascript from the controller: <pre><code>$this->javascript = array('ekko-lightbox.min.js');</code></pre> Then template your markup in the view as explained at <a href="http://ashleydw.github.io/lightbox/">http://ashleydw.github.io/lightbox/</a>.</p>
	<div class="row">
		<div class="col-md-12">
			<div class="row">
				<a href="images/pozzuoli/land1.jpg" data-toggle="lightbox" data-gallery="multiimages" data-title="Pozzuoli Harbour" class="col-sm-4">
					<img src="images/pozzuoli/land1.jpg" class="img-responsive img-thumbnail">
				</a>
				<a href="images/pozzuoli/land2.jpg" data-toggle="lightbox" data-gallery="multiimages" data-title="Pozzuoli Harbour 2" class="col-sm-4">
					<img src="images/pozzuoli/land2.jpg" class="img-responsive img-thumbnail">
				</a>
			</div>
			<div class="row">
				<a href="images/pozzuoli/land3.jpg" data-toggle="lightbox" data-gallery="multiimages" data-footer="Pozzuoli harbour 3" class="col-sm-4">
					<img src="images/pozzuoli/land3.jpg" class="img-responsive img-thumbnail">
				</a>
				<a href="images/pozzuoli/land4.jpg" data-toggle="lightbox" data-gallery="multiimages" data-title="Pozzuoli Harbour 4" data-footer="The sunset" class="col-sm-4">
					<img src="images/pozzuoli/land4.jpg" class="img-responsive img-thumbnail">
				</a>
			</div>
		</div>
	</div>
	<h2>Dynamic Galleries</h2>
	<p>You can also dynamically render a gallery.</p>
		<ol>
			<li>Add your folder with pictures to <code>images/</code>.</li>
			<li>After the javascript call (see above), set up a configuration array in your controller and pass it to the <code>gallery</code> template.</li>
		</ol>
		<pre><code>
$this->gallery=array(
		'name'=>'foldername',
		'columns'=>'4'); //set at 2, 3 or 4
		
$toGal["gallery"] = $this->gallery;
$toView["gallery"] = $this->load->view("template/gallery",$toGal,true);
		</code></pre>
	<div>
		<?php
		echo $gallery;
		?>	
	</div>
</div>
