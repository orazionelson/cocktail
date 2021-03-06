<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Datatables extends BP_Controller {
	var $hasDataTables=true;
	
    public function index()
    {
        /* Remember you can change the main template if you need!
        $this->template = "example-template";
        */

        // Define Meta
        $this->title = "DataTables";
        $this->description = "DataTables bundle!";

        // Define dataTables CSS and JS
        $this->css[] = "datatables.min.css";
		$this->javascript[] = 'vendor/jquery.dataTables.min.js';


        //set up the Data table configuration array
        $this->datatables=array(
			array(
			"driver"=>"file", //this should be 'array' or 'file'
			"id"=>"people",
			"class"=>"table table-striped table-bordered",
			"title"=>"Data Tables Dynamic <em>Client-side</em>", 
			"caption"=>"Table generated dynamically by a json file, client side import.",
			"fields"=>array("Name","Position","Office","Extn","Start","Salary")
				),
			array(
			"driver"=>"array", //this should be 'array' or 'file'
			"id"=>"people2",
			"class"=>"table table-striped table-bordered",
			"title"=>"Data Tables Dynamic <em>Server-side</em>", 
			"caption"=>"Table generated dynamically by a json file, server side import.",
			"fields"=>array("Name","Position","Office","Extn","Start","Salary")
				)	
			);
			

        //Somedata for the page.
        //$toView["day"] = strftime("%A",strtotime("today"));
        $toDt["data"] = $this->datatables;
        $toView["datatables"] = $this->load->view("template/datatables",$toDt,true);

        //$toView["datatables"] = $this->dataTables();

        /*short cut to load->view("pages/page_name",$content,true)*/
        $this->build_content($toView);

        $this->render_page();
    }
    
}
/*End of file*/

