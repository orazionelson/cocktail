<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Vlayout extends BP_Controller {

    public function index()
    {
        /* Remember you can change the main template if you need!*/
        $this->template = "vmain";
        /*Overwrite nav menu*/
        $this->nav = "vnav";
        
        /*set off-canvas*/
        $this->offcanvas=true;
        
        /*set sliding direction*/
        $this->offcanvas_pos='right';
        

        // Define Meta
        $this->title = "Vertical Layout";
        $this->description = "Override page organization";
		$this->css[] = "vlayout.css";
        
        
        //Somedata for the page.
        $toView["day"] = strftime("%A",strtotime("today"));

        /*short cut to load->view("pages/page_name",$content,true)*/
        $this->build_content($toView);

        $this->render_page();
    }
}
/*End of file example.php*/
/*Location .application/controllers/example.php*/
