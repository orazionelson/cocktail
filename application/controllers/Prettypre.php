<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Prettypre extends BP_Controller {

    public function index()
    {
        /* Remember you can change the main template if you need!
        $this->template = "example-template";
        */

        // Define Meta
        $this->title = "Pretty-pre!";
        $this->description = "The .pretty-pre selector";

        //Somedata for the page.
        $toView["pretty"] = '';

        /*short cut to load->view("pages/page_name",$content,true)*/
        $this->build_content($toView);

        $this->render_page();
    }
}
/*End of file example.php*/
/*Location .application/controllers/example.php*/
