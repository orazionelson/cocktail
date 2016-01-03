<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Footers extends BP_Controller {

    public function index()
    {
        /* Remember you can change the main template if you need!
        $this->template = "example-template";
        */

        // Define Meta
        $this->title = "Footers";
        $this->description = "Five footer templates";

        //Somedata for the page.
        $toFooter='';
        $toView["footer_basic_centered"] = $this->load->view("template/footer-basic-centered",$toFooter,true);
        $toView["footer_distributed"] = $this->load->view("template/footer-distributed",$toFooter,true);
        $toView["footer_distributed_with_search"] = $this->load->view("template/footer-distributed-with-search",$toFooter,true);
        $toView["footer_distributed_with_contact_form"] = $this->load->view("template/footer-distributed-with-contact-form",$toFooter,true);
        $toView["footer_distributed_with_address_and_phones"] = $this->load->view("template/footer-distributed-with-address-and-phones",$toFooter,true);
        //$toView["day"] = strftime("%A",strtotime("today"));

        /*short cut to load->view("pages/page_name",$content,true)*/
        $this->build_content($toView);

        $this->render_page();
    }
}
/*End of file example.php*/
/*Location .application/controllers/example.php*/
