<div class="clearfix"></div>

<div class="container">
	<h2>Portfolio</h2>
	<p>In the page controller create a configuration array like this:</p>
	<pre><code>
$portfolio = array(
			'navigation'=>'tabs', //set tabs or pills
			'columns'=>'4', //set 2,3 or 4 columns
			'imgfolder'=>'path/to/my/folder/'; //this is optional if you don't set it the default folder is 'images/portfolio/'
			2013=>array(
					array( 	'label'=>'project_one',
						'name'=>'Project One',
						'description'=>"Lorem ipsum dolor ..."),
				array('label'=>'project_two','name'=>'Project two','description'=>"Lorem ipsum dolor ..."),
				array('label'=>'project_three','name'=>'Project 3','description'=>"Lorem ipsum dolor ..."),
				array('label'=>'project_onebis','name'=>'Project OneBIS','description'=>"Lorem ipsum dolor sit ..."),
				array('label'=>'project_twobis','name'=>'Project twobis','description'=>"Lorem ipsum dolor sit ..."),
				array('label'=>'project_threebis','name'=>'Project 3bis','description'=>"Lorem ipsum dolor sit ..."),
				array('label'=>'project_fourbis','name'=>'Project 4bis','description'=>"Lorem ipsum dolor sit ..."),
				),
			2014=>array(
				array('label'=>'project_four','name'=>'Project 4','description'=>"Lorem ipsum dolor sit amet..."),
				array('label'=>'project_five','name'=>'Project 5','description'=>"Lorem ipsum dolor sit amet..."),
				array('label'=>'project_siz','name'=>'Project 6','description'=>"Lorem ipsum dolor sit amet..."),
				array('label'=>'project_seven','name'=>'Project 7','description'=>"Lorem ipsum dolor sit amet..."),
			)
		);
	</code></pre>
	<p>Call the <code>BP_Portfolio</code> class to build the portfolio.</p>
	<pre><code>
        //Create portfolio.
        $myportfolio=new BP_Portfolio;
        $myportfolio->portfolio=$portfolio;
        
        //Pass to the page the parsed portfolio
        $toView["portfolio"] = $myportfolio->createPortfolio();	
	</code></pre>
<?php
echo $portfolio;
?>
</div>	
<div class="container">
	<h2>Use a <code>json</code> file as source</h2>
	<p>You can also build the portfolio starting by a json file, as example you can find the projects.json file in the <code>data/</code> folder.</p>
	<pre><code>
	$json_file = file_get_contents('data/projects.json');
	// convert the string to a json object
	$projects = json_decode($json_file, TRUE);
	//Create portfolio.
	$myprojects=new BP_Portfolio;
	$myportfolio->portfolio=$projects;
	//Push to view	
	$toView["projects"] = $myportfolio->createPortfolio();	
	</code></pre>
<?php
echo $projects;
?>
</div>
