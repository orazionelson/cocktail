<div class="clearfix"></div>

<div class="container">
	<h2>Full page</h2>
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
</div>
