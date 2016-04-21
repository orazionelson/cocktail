<div class="clearfix"></div>

<div class="container">
	<h2>Nifty Footnotes</h2>
	<p>Cocktail provides an easy way to create nifty footnotes for a text. Use a structure like this:</p>
	<pre class="pretty-pre">
		<div>
			<h2>Title (h2) 1</h2>
			<p>Content 1, bla bla bla <a class="bs-footnote" href="#bs-footnote-1">1</a>. 
			Bla bla bla<a class="bs-footnote" href="#bs-footnote-2">2</a>. 
			Bla bla bla etc etc...</p>
			<hr>
			<div id="footnotes">
				<div id="bs-footnote-1">
					<p><span>1</span>
					Lorem Ipsum, Aliquam porttitor lorem ipsum, 
					ac venenatis tellus maximus nec.
					</p>
				</div>
				<div id="bs-footnote-2">
					<p><span>1</span>
					Sed aliquet volutpat sollicitudin.
					</p>
				</div>
			</div>
		</div>
	</pre>
	<p>Trigger the footnotes plugin:</p>
	<pre><code>$().footnotes();</code></pre>
	<p>and <strong>Cocktail</strong> will format the footnotes rendering numbers in <code>&lt;sup&gt;</code> tag, and building the back-links from note to text.</p>
	<p>The notes can appear in a popover, and shall be viewed at the bottom of the page. A smooth scrolling is applied for browsing text and notes, a gentle fading effect highlights the clicked note.</p>
	<p>You can trigger the Nifty Footnotes in <code>main.js</code> and override some options:</p>
	<pre><code>
$().footnotes({
	//Show the notes at the bottom of the page
	//options: true,false,'collapse'
		viewNotes: true, 		        
	//Show the note in a popover
		popover: true,	
	//If the notes are collapsed
	//edit the button label here
		buttonLabel: "See footnotes",		
	//Add a delta between the anchor and the
	//scroller target
		delta: 70,
	//The page container to scan 
		container: 'body',		
	//These settings affects the popover
	//as in the bootstrap popover configuration.
	// Allow HTML in the popover
		html : true,
	//Trigger: 'click' or 'hover'
		trigger: "hover",
	//Popover position
		placement: "auto bottom"
});		
	</code></pre>
<hr>	
<div class="row">
	<div class="col-md-6 col-md-offset-2 text-justify">		
		<article>
			<h2 class="text-center">Lorem ipsum dolor sit amet.</h2>
			<p>Maecenas sit amet dolor odio. Quisque aliquet leo arcu, vel vulputate ipsum fringilla et. Donec ex lacus, feugiat vel auctor eget, faucibus sit amet elit.<a class="bs-footnote" href="#bs-footnote-1">1</a> Sed consequat lacus id massa consectetur imperdiet. Proin nec enim dapibus, semper dui et, pharetra urna. Sed finibus purus quam, nec laoreet risus eleifend nec. Sed velit quam, condimentum a tincidunt sed, imperdiet nec nunc. Nullam non euismod ligula. Praesent viverra ante ac magna lobortis, sed molestie nulla ornare.<a class="bs-footnote" href="#bs-footnote-2">2</a> Sed commodo ut felis condimentum ornare. Nullam semper purus cursus leo posuere, at bibendum nulla consequat. Sed hendrerit ornare malesuada. Nam porttitor sit amet massa quis volutpat. Pellentesque lobortis laoreet odio sed imperdiet.<a class="bs-footnote" href="#bs-footnote-3">3</a> Quisque dictum faucibus lorem sed egestas.</p>
	
			<p>Integer faucibus varius accumsan. Nullam et quam sit amet elit commodo egestas vitae in urna. Nullam eget finibus nunc. Donec ultricies scelerisque diam,<a class="bs-footnote" href="#bs-footnote-4">4</a> in imperdiet leo maximus ac. Mauris ut pharetra justo, pharetra gravida nisi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Phasellus sodales purus non tortor ultricies, id viverra eros aliquet. Donec at libero eget urna tempus tristique. Phasellus commodo<a class="bs-footnote" href="#bs-footnote-5">5</a> eros ut hendrerit pellentesque.</p>
	
			<p>In hac habitasse platea dictumst.<a class="bs-footnote" href="#bs-footnote-6">6</a> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec feugiat nunc eu purus aliquam suscipit. Aenean orci erat, finibus ac ante vitae, venenatis fringilla dui. Nulla et dignissim purus, sit amet tempus mauris. Praesent dignissim odio diam, eu volutpat risus gravida a. Nulla nec consequat purus. Praesent vestibulum nisl et lorem dignissim, nec laoreet orci semper. Cras mi enim, maximus vitae vehicula sed, iaculis sed nibh<a class="bs-footnote" href="#bs-footnote-7">7</a>.	
			</p>
			<hr>
			<div id="footnotes">
				<div id="bs-footnote-1">
					<p><span>1</span>
					Lorem Ipsum, Aliquam porttitor lorem ipsum, ac venenatis tellus maximus nec. Sed aliquet volutpat sollicitudin.</p>
				</div>
				<div id="bs-footnote-2">
					<p><span>2</span>
					Curabitur pellentesque urna vel ipsum auctor elementum.</p>
				</div>
				<div id="bs-footnote-3">
					<p><span>3</span>
					Quisque euismod ullamcorper mi vitae efficitur. In hac habitasse platea dictumst. Vestibulum rutrum suscipit libero, vestibulum aliquet eros varius nec. Maecenas tristique augue ex. Duis blandit ac felis vel posuere.</p>
				</div>
				<div id="bs-footnote-4">
					<p><span>4</span>
					Integer nec nibh libero. Aenean eu urna ullamcorper, hendrerit eros vel, gravida augue. Etiam vel quam in odio laoreet tempus fringilla eu quam. Phasellus a sem varius neque pharetra faucibus a finibus risus. Etiam sodales dapibus libero eu imperdiet. Nunc eu risus quis ex ornare vestibulum. Etiam fermentum tortor vitae tellus sollicitudin, in porttitor lorem malesuada.</p>
				</div>
				<div id="bs-footnote-5">
					<p><span>5</span>
					Imperdiet nec nunc.
					</p>
				</div>
				<div id="bs-footnote-6">
					<p><span>6</span>
					Nullam non euismod ligula. Praesent viverra ante ac magna lobortis, sed molestie nulla ornare. Sed commodo ut felis condimentum ornare. Nullam semper purus cursus leo posuere, at bibendum nulla consequat. Sed hendrerit ornare malesuada. Nam porttitor sit amet massa quis volutpat. Pellentesque lobortis laoreet odio sed imperdiet. Quisque dictum faucibus lorem sed egestas.
					</p>
				</div>
				<div id="bs-footnote-7">
					<p><span>7</span>
					Nullam elementum ligula diam, ut porta purus molestie a. Sed congue lacus id sollicitudin faucibus. Nullam sodales euismod nulla, vel luctus libero tincidunt nec. In id ante ante. Sed erat lorem, convallis vel interdum at, eleifend eu metus. Curabitur sem enim, porta nec nulla non, commodo varius urna. Morbi varius nunc eget purus condimentum, sit amet posuere nibh pharetra. Vivamus tristique erat ligula, at condimentum justo varius et. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. In in augue venenatis, sollicitudin tortor vitae, sagittis metus. Morbi ut scelerisque enim. Phasellus sed velit vitae velit luctus finibus quis vel sapien. Donec commodo, lorem aliquam lobortis maximus, arcu leo molestie tellus, et bibendum quam mi in tortor.
					</p>
				</div>
		</article>
	</div>
</div>
</div>
