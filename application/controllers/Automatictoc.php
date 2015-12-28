<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Automatictoc extends BP_Controller {

    public function index()
    {
        /* Remember you can change the main template if you need!
        $this->template = "example-template";
        */

        // Define Meta
        $this->title = "Automatic Toc!";
        $this->description = "Get TOC by the page structure";

        // Define custom CSS
        $this->javascript = array("prettypre.jquery.js");

        //Somedata for the page.
        $toView["day"] = strftime("%A",strtotime("today"));

        /*short cut to load->view("pages/page_name",$content,true)*/
        $this->build_content($toView);

        $this->render_page();
    }
}
/*End of file example.php*/
/*Location .application/controllers/example.php*/
