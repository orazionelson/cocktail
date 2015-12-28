<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Portfolio extends BP_Controller {
	var $hasDataTables=true;
	
    public function index()
    {
        /* Remember you can change the main template if you need!
        $this->template = "example-template";
        */

        // Define Meta
        $this->title = "Portfolio";
        $this->description = "portfolio template!";
        
        $portfolio = array(
			'navigation'=>'tabs', //set tabs or pills
			'columns'=>'4', //set 2,3 or 4 columns
			2013=>array(
					array( 	'label'=>'project_one',
							'name'=>'Project One',
							'description'=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae."),
				array('label'=>'project_two','name'=>'Project two','description'=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae."),
				array('label'=>'project_three','name'=>'Project 3','description'=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae."),
				array('label'=>'project_onebis','name'=>'Project OneBIS','description'=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae."),
				array('label'=>'project_twobis','name'=>'Project twobis','description'=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae."),
				array('label'=>'project_threebis','name'=>'Project 3bis','description'=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae."),
				array('label'=>'project_fourbis','name'=>'Project 4bis','description'=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae."),
				),
			2014=>array(
				array('label'=>'project_four','name'=>'Project 4','description'=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae."),
				array('label'=>'project_five','name'=>'Project 5','description'=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae."),
				array('label'=>'project_siz','name'=>'Project 6','description'=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae."),
				array('label'=>'project_seven','name'=>'Project 7','description'=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae."),
			)
		);
			

        //Create portfolio.
        $myportfolio=new BP_Portfolio;
        $myportfolio->portfolio=$portfolio;
        
        //Pass to the page the parsed portfolio
        $toView["portfolio"] = $myportfolio->createPortfolio();

        /*short cut to load->view("pages/page_name",$content,true)*/
        $this->build_content($toView);

        $this->render_page();
    }
    
}
/*End of file example.php*/
/*Location .application/controllers/example.php*/
