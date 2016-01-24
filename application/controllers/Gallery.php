<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gallery extends BP_Controller {
	var $hasDataTables=true;
	
    public function index()
    {
        /* Remember you can change the main template if you need!
        $this->template = "example-template";
        */

        // Define Meta
        $this->title = "Gallery";
        $this->description = "Bootstrap libghtbox bundle.";

        // Define custom JS
		$this->javascript[] = 'vendor/ekko-lightbox.min.js';
       
        $this->gallery=array(
				'name'=>'pozzuoli',
				'columns'=>'3'); //set at 2, 3 or 4
				
        $toGal["gallery"] = $this->gallery;
		$toView["gallery"] = $this->load->view("template/gallery",$toGal,true);
		
        /*short cut to load->view("pages/page_name",$content,true)*/
        $this->build_content($toView);

        $this->render_page();
    }
    
}
/*End of file example.php*/
/*Location .application/controllers/example.php*/
