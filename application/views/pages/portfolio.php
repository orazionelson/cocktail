<div class="clearfix"></div>

<div class="container">
	<h2>Portfolio</h2>
	<p>Create a configuration array like this:</p>
	<pre>
$portfolio = array(
			'navigation'=>'tabs', //set tabs or pills
			'columns'=>'4', //set 2,3 or 4 columns
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
	</pre>
	<p>Call the <code>BP_Portfolio</code> class to build the portfolio.</p>
	<pre>
        //Create portfolio.
        $myportfolio=new BP_Portfolio;
        $myportfolio->portfolio=$portfolio;
        
        //Pass to the page the parsed portfolio
        $toView["portfolio"] = $myportfolio->createPortfolio();	
	</pre>
<?php
echo $portfolio;
?>
</div>	
