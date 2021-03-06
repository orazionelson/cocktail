<div class="clearfix"></div>
<div id="home" class="jumbotron fullpage">
	<div class="container text-center jumboheader">
	<h1>Cocktail <small>Version <?php echo $version;?></small></h1>
	<h2>Codeigniter + HTML5Boilerplate + Bootstrap</h2>
	</div>
	<!-- Three columns of text  -->
	<div class="container text-center">
      <div class="row">
        <div class="col-lg-4">
          <img class="img-circle" src="images/codeigniter.png" alt="Get the fuel from codeigniter" width="140" height="140">
          
          <p>Get the fuel with <a href="https://www.codeigniter.com/">Codeigniter</a> MVC framework.</p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="images/boilerplate.png" alt="Shake with HTML5Boilerplate best practices" width="140" height="140">
          
          <p>Shake with <a href="https://html5boilerplate.com/">HTML5Boilerplate</a> best practices.</p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="images/bootstrap.png" alt="Serve with Bootstrap" width="140" height="140">
          
          <p>Serve gracefully with <a href="http://getbootstrap.com/">Bootstrap</a> and more.</p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
      <div><p><a class="btn btn-default" href="https://github.com/orazionelson/cocktail/archive/master.zip" role="button">Download Cocktail</a> <a class="btn btn-default" href="https://github.com/orazionelson/cocktail" role="button">View on github</a></p></div>
	</div>
</div>
<div id="about" class="container">
	<article>
		<h2>About</h2>
		<p>Cocktail is a fast front-end builder. It takes the basic code by <a href="http://ariok.github.io/codeigniter-boilerplate/">Codeigniter-Boilerplate</a> but upgrades Codeigniter to version 3, HTML5Boileplate to v. 5. Then it adds Bootstrap (v.3) and bundles several scripts to improve your job.</p>
		<div class="well text-info">
			<p class="text-danger">New in 0.0.6 version, 2017!</p>
			<p>CodeIgniter upgrade to 3.1.4</p>
			<p>jQuery upgrade to 2.2.4</p>
			<p>Libraries: BP_Opendataclient.php</p>
			<p>Controllers: Opendataclient.php</p>
			<p>Json endpoint: Json.php</p>
			<p>Helpers: breadcrumbs_heplper.php (source: https://github.com/mmkjony/Codeigniter-Breadcrumb-Helper-for-Bootstrap/)</p>
			<p>Upgrades: new build for datatables js</p>
			<p>Some corrections in templates and views</p>
		</div>
		
		<p>Cocktail is NOT a end user product, at this stage is more or less a bucket of prototypes and scripts built on top of three solid frameworks.</p>
		<p>The most relevant bundled scripts are:</p>
		<ul>
		<li>A minification library to improve your performances in production environment</li>
		<li><a href="https://fortawesome.github.io/Font-Awesome/">Font Awesome 4.0.5</a></li>
		<li><a href="https://datatables.net/">DataTables</a></li>
		<li><a href="http://ashleydw.github.io/lightbox/">Bootstrap Lightbox</a></li>
		<li><a href="http://www.primebox.co.uk/projects/jquery-cookiebar/">Jquery CookieBar</a></li>
		<li><a href="http://simplepie.org/">SimplePie 1.4</a> to read and create rss/atom feeds</li>
		</ul>
		<p>Moreover there are some 'ad hoc' templates, helpers and functions for page rendering:</p>
		<ul>
		<li>Automatic Toc</li>
		<li>Automatic Tabs</li>
		<li>Nifty Footnotes</li>
		<li>Templates for horizontal and vertical layout</li>
		<li>Five footer templates</li>
		<li>A Portfolio template</li>
		<li>An Open Data Client with a json endpoint</li>
		<li>Some nice helpers</li>
		</ul>
		<h3>Versions</h3>
		<ul>
		<li>Codeigniter 3.1.4</li>
		<li>Bootstrap 3.3.6</li>
		<li>HTML5Boilerplate 5.0.3</li>
		<li>jQuery 2.2.4</li>
		</ul>
		</article>
</div>	
<div id="config" class="container">
	<article>
		<h2>Configurations</h2>		
		<div class="well">
			<h3>CI Configurations</h3>
			<p>Codeigniter configuration for Boilerplate starts with:</p>
			<ul>
				<li>Autoload: url and breadcrumbs helper</li>
				<li>Autoload: 'BP_Portfolio', 'BP_Opendata', 'SimplePie(Rss feed)' and 'Minifier' libraries</li>
				<li>Routes: default_controller = "homepage"</li>
				<li>Index.php: subclass_prefix = "BP_"</li>
				<li>Base url: http://localhost/cocktail</li>
			</ul>	
		</div>
		<div class="well">
			<h3>Cocktail Configurations</h3>			
			<p>Set up main configs for your application in: <code>application/core/BP_controller.php</code></p>
			<pre><code>
//Start here your config    
//Status: Set 0 for development or 1 for production
//the production environment combines and 
//minify the css and js		    
protected $status=0; //0=devel, 1=production
	
//Set your default template 
//cocktail bundles two standard templates: main and vmain
protected $template = "main";

//Set true if you want a navbar
protected $hasNav = true;
//Set the default navbar template
//cocktail bundles two standard templates: nav and vnav
protected $nav = "nav";

//Set if you want to see or not breadcrumbs 
protected $hasBreadcrumbs=true;

//If you use the vertical navigator layout
//set here the offcanvas : bool(true|false)
protected $offcanvas=false;
protected $offcanvas_pos='left';
  
//Page Meta
public $title = false;
public $description = false; 
	
//Page contents
public $javascript = array('vendor/jquery-2.2.4.min.js','vendor/bootstrap.min.js');
public $appjs = array('plugins.js','main.js');
public $css = array('bootstrap.min.css', 'bootstrap-theme.css','font-awesome.min.css');
public $appcss=array('main.css');
public $GFont = array('Oxygen','Cookie');
public $content = false;
    
//Set true if you want a footer   
protected $hasFooter = true;

//Set true to activate cookieLaw plugin
// and cookie.js file
protected $cookieLaw = true; 
protected $cookies = "cookies";
			</code></pre>
		</div>
		<div class="well">
			<h3>Controller Configurations</h3>
			<p>Set specific config of any page in its controller, example: <code>application/controllers/Homepage.php</code></p>
<pre><code>
// Define Meta
// Define section title
$this->title = "Example!";
// Define section description
$this->description = "A Codeigniter-Boilerplate example";

// Define custom CSS
$this->css[] = "bp_homepage.css";
$this->css[] = "bp_example.css";

// Define custom JS
$this->javascript[] = 'vendor/jquery.dataTables.min.js';
$this->javascript[] = 'vendor/dataTables.bootstrap.min.js';

// Import Google Font Lobster and Puritan
$this->GFont = array("Lobster","Puritan");

</code></pre>	
		</div>
<div class="well">
<h3><strong>Be careful, this is important for: css, js and GoogleFont management.</strong></h3>
<ul>
<li>This APPENDS data to <code>BP_Controller</code> array:
<pre>
$this->javascript[] = 'vendor/jquery.dataTables.min.js';
</pre>
</li>
<li>This OVERWRITES the data of<code>BP_Controller</code> array:
<pre>
$this->GFont = array("Lobster","Puritan");
</pre></li>
</ul>
</div>			
	</article>
	
</div>
