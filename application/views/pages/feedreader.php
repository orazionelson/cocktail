<div class="clearfix"></div>
<div class="container">
	<h2>Parse feeds</h2>
	<p>Cocktail embeds <a href="http://simplepie.org/">SimplePie</a> to parse rss or atom feeds.</p>
	<p>The library is compiled in one file: <code>application/libraries/SimplePie.php</code>.</p>
	<p>Here you can find an example of how easy is to import an external feed.</p>
	<p> Just set in your <b>controller</b> some variables:</p>
	<pre>
		<code>
//the limit of items read
protected $limit=5;
//feed source
protected $sources="https://github.com/orazionelson.atom";						
//feed date format
protected $rss_date_format="d/m/y";		
//rss cache, don't change unless it is not strictly necessary			
protected $rss_cache="rss_cache";
		</code>
	</pre> 
	<p>Then parse your feed following the examples on <a href="http://simplepie.org/wiki/">Simplepie wiki</a>.</p>
		<pre><code>
public function index()
{   

	// Define Meta
	$this->title = "Feedreader";
	$this->description = "A Feedreader for Cocktail";


	$feed = new SimplePie();
	$feed->set_feed_url($this->sources);
	$feed->set_cache_location($this->rss_cache);
	$feed->set_item_limit(5);
	$feed->init();
	$feed->handle_content_type();

	//Somedata for the page.
	$toView["date_format"] = $this->rss_date_format;
	$toView["title"] = $feed->get_title();
	$toView["items"] = $feed->get_items(0, $this->limit);

	/*short cut to load->view("pages/page_name",$content,true)*/
	$this->build_content($toView);

	$this->render_page();
}		
		</code>
	</pre>
	<p>At the end cycle the feed results in the <b>view</b>.</p>
	<pre class="pretty-pre">
	foreach ($items as $item){
	echo $item->get_date($date_format)."<br>";
	
	foreach ($item->get_authors() as $author)
		{
		echo $author->get_name()."<br>";
		//echo $author->get_email();
		}
	echo $item->get_title()."<br>";
	echo auto_link($item->get_permalink()); echo "<hr>";
	
	</pre>	
	<hr>
	<p>Here is an example from my github feed.</p>	
	<h3><?php echo $title;?></h3>
<?php
foreach ($items as $item){
	echo $item->get_date($date_format)."<br>";
	
	foreach ($item->get_authors() as $author)
		{
		echo $author->get_name()."<br>";
		//echo $author->get_email();
		}
	echo $item->get_title()."<br>";
	echo auto_link($item->get_permalink()); echo "<hr>";
}
?>
</div>
