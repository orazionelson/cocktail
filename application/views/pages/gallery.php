<div class="clearfix"></div>

<div class="container">
	<h2>Static Galleries</h2>
	<p>You can obtain a static gallery just adding the javascript from the controller: <pre><code>$this->javascript = array('ekko-lightbox.min.js');</code></pre> Then template your markup in the view as explained at <a href="http://ashleydw.github.io/lightbox/">http://ashleydw.github.io/lightbox/</a>.</p>
	<div class="row">
		<div class="col-md-12">
			<div class="row">
				<a href="http://41.media.tumblr.com/f37ac708134914c471073e4c0b47328d/tumblr_mrn3dc10Wa1r1thfzo8_1280.jpg" data-toggle="lightbox" data-gallery="multiimages" data-title="People walking down stairs" class="col-sm-4">
					<img src="//41.media.tumblr.com/f37ac708134914c471073e4c0b47328d/tumblr_mrn3dc10Wa1r1thfzo8_1280.jpg" class="img-responsive img-thumbnail">
				</a>
				<a href="http://41.media.tumblr.com/838b44224e39c30cd43490deb11b919d/tumblr_mrn3dc10Wa1r1thfzo1_1280.jpg" data-toggle="lightbox" data-gallery="multiimages" data-title="Man getting wet" class="col-sm-4">
					<img src="//41.media.tumblr.com/838b44224e39c30cd43490deb11b919d/tumblr_mrn3dc10Wa1r1thfzo1_1280.jpg" class="img-responsive img-thumbnail">
				</a>
				<a href="http://41.media.tumblr.com/e06a3513b0b36843f54bee99aeac689a/tumblr_mrn3dc10Wa1r1thfzo2_1280.jpg" data-toggle="lightbox" data-gallery="multiimages" data-title="Someone lost their dress" class="col-sm-4">
					<img src="//41.media.tumblr.com/e06a3513b0b36843f54bee99aeac689a/tumblr_mrn3dc10Wa1r1thfzo2_1280.jpg" class="img-responsive img-thumbnail">
				</a>
			</div>
			<div class="row">
				<a href="http://41.media.tumblr.com/9d3e6a9c89a856a2ad0be3ab4ca598b2/tumblr_mrn3dc10Wa1r1thfzo4_1280.jpg" data-toggle="lightbox" data-gallery="multiimages" data-footer="Big ass waterfall- using footer instead of title" class="col-sm-4">
					<img src="//41.media.tumblr.com/9d3e6a9c89a856a2ad0be3ab4ca598b2/tumblr_mrn3dc10Wa1r1thfzo4_1280.jpg" class="img-responsive img-thumbnail">
				</a>
				<a href="http://41.media.tumblr.com/9d3e6a9c89a856a2ad0be3ab4ca598b2/tumblr_mrn3dc10Wa1r1thfzo4_1280.jpg" data-toggle="lightbox" data-gallery="multiimages" data-title="Cool bottle" data-footer="Now fill it with whiskey" class="col-sm-4">
					<img src="//41.media.tumblr.com/9d3e6a9c89a856a2ad0be3ab4ca598b2/tumblr_mrn3dc10Wa1r1thfzo4_1280.jpg" class="img-responsive img-thumbnail">
				</a>
				<a href="http://36.media.tumblr.com/de356cd6570d7c26e73979467f296f67/tumblr_mrn3dc10Wa1r1thfzo6_1280.jpg" data-toggle="lightbox" data-gallery="multiimages" class="col-sm-4">
					<img src="//36.media.tumblr.com/de356cd6570d7c26e73979467f296f67/tumblr_mrn3dc10Wa1r1thfzo6_1280.jpg" class="img-responsive img-thumbnail">
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
