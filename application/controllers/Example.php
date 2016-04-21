<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Example extends BP_Controller {

    public function index()
    {   

        // Define Meta
        $this->title = "Example!";
        $this->description = "A Codeigniter-Boilerplate example";

        // Define custom CSS
        $this->css[] = "bp_example.css";

        // Import Google Font Lobster and Puritan
        $this->GFont = array("Lobster","Puritan");

        //Somedata for the page.
        $toView["day"] = strftime("%A",strtotime("today"));

        /*short cut to load->view("pages/page_name",$content,true)*/
        $this->build_content($toView);

        $this->render_page();
    }
}
/*End of file example.php*/
/*Location .application/controllers/example.php*/
