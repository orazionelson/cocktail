<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Footnotes extends BP_Controller {

    public function index()
    {
        /* Remember you can change the main template if you need!
        $this->template = "example-template";
        */

        // Define Meta
        $this->title = "Nifty Footnotes";
        $this->description = "The footnotes builder";

        //Somedata for the page.
        $toView["fn"] = '';

        /*short cut to load->view("pages/page_name",$content,true)*/
        $this->build_content($toView);

        $this->render_page();
    }
}
/*End of file example.php*/
/*Location .application/controllers/example.php*/
