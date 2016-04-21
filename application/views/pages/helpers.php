<div class="clearfix"></div>

<div class="container">
	<div id="helpers" class="tocfy" data-toc-side="right" data-toc-position="fixed">
		<h2>.fullpage</h2>
		<p>The <code>.fullpage</code> selector sets an element <code>min-height</code> at 100% of the page.</p>
		<p>To use the selector just add it to the class attribute of the element to resize.</p>
			<pre class="pretty-pre">
				<div id="home" class="jumbotron fullpage">
					...
				</div>						
			</pre>
		<p>You can pass a delta param if you have other fixed elements in the page and you don't want that the fullpaged element results oversized, for example with a top fixed navigation bar:</p>
		<ol>
			<li>Calculate the delta:
				<pre><code>var delta = $('.navbar:first').height();</code></pre>
			</li>
			<li>Call the function in your javascript code:
			<pre><code>$().fullpage(delta);</code></pre>
			</li>
		</ol>
	
		<h2>.pretty-pre</h2>
		<p>The <code>pre</code> element doesn't parse the mark-up. Just use the <code>.pretty-pre</code> class in the element to see the tags.</p>
		<pre class="pretty-pre">
		<div>
			<h2>Title (h2) 1</h2>
			<p>Content 1</p>
			<h3>Subtitle (h3) 1.1</h3>
			<p>Content 1.1</p>
			<h3>Subtitle (h3) 1.2</h3>
			<p>Content 1.2</p>
			<p>...</p>
		</div>
		</pre>
		
		<h2>.sorted</h2>
		<p>Use the <code>.sorted</code> class to sort a list</p>
		<pre class="pretty-pre">
			<ul class="sorted">
				<li>Zebra</li>
				<li>Alpaca</li>
				<li>Lion</li>
				<li>Monkey</li>
			</ul>
		</pre>
		<ul class="sorted">
			<li>Zebra</li>
			<li>Alpaca</li>
			<li>Lion</li>
			<li>Monkey</li>
		</ul>
	</div>	
</div>
