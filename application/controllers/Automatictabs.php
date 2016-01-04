<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Automatictabs extends BP_Controller {

    public function index()
    {
        /* Remember you can change the main template if you need!
        $this->template = "example-template";
        */

        // Define Meta
        $this->title = "Automatic Tabs!";
        $this->description = "Get TABS by the page structure";

        //Somedata for the page.
        $toView = '';

        /*short cut to load->view("pages/page_name",$content,true)*/
        $this->build_content($toView);

        $this->render_page();
    }
}
/*End of file example.php*/
/*Location .application/controllers/example.php*/
