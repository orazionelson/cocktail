<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Homepage extends BP_Controller {
    
    public function __construct(){  
        parent::__construct();
    }

    public function index()
    {
		
		$this->title = "Cocktail Home Page";
		$this->description = "Coctail is a fast front end solution made mixing CodeIgniter, HTML5Boilerplate and Bootstrap.";
        /*Page dedicated JS - CSS - Google Fonts*/
        $this->GFont = array("Lily Script One","Oxygen","Cookie");

        /*Define single page content as usual*/
        $toView['page_content'] = date("H:i:s");
        $toView['other_data'] = "";
        
        /*short cut to load->view("pages/page_name",$content,true)*/
        $this->build_content($toView);

        $this->render_page();
    }
}

/*End of file homepage.php*/
/*Location .application/controllers/example.php*/
