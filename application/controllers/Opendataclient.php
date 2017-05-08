<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Opendataclient extends BP_Controller {
	
/*
Possible options for opendata array:

source: gs|local
	gs -> points to a public google drive spreadsheed
	local -> points to a local folder (default: data/opendata/) and parses all csv files inside
 
mode: has different options in function of source
	gs->view|download|''(empty) 
		view: shows data, 
		download: shows links for download,
		'': leave empty to have both in one page
	
	local->''|filename
		'': leave empty to parse all csv in a directory
		filename: the complete filename (e.g. myfile.csv) you want to parse
	
sheetId: 
 	if gs: the google sheet Id, 
 	if local: the directory where you store files. 
		Leave empty to point to the default directory (data/opendata/). 
		Otherwise add a local path (must be readable).	
*/

	public $opendata = array(
			"source"=>'gs', 
			"mode"=>'', 
			"sheetId"=>'1Y0KfRCM1N1_Fv1ulMRoZOkUGB63DXrYuzklewhghSrE' 
		);
	
    public function index()
    {
        // Define Meta
        $this->title = "Open data client!";
        $this->description = "Show your open data, local or from public google drive sheets.";
        
		$toView = '';
    
        /*short cut to load->view("pages/page_name",$content,true)*/
        $this->build_content($toView);

        $this->render_page();
    }
    
    public function example(){
		// Define Meta
        $this->title = "Open Data Client: Example 1";
        $this->description = "Gets data from a public google spreadsheet, embeds in the page, then creates the grid with download links.";

//Just print for the sample        
$configuration='<pre><code>$opendata = array(
	"source"=>"gs", 
	"mode"=>"", 
	"sheetId"=>"1Y0KfRCM1N1_Fv1ulMRoZOkUGB63DXrYuzklewhghSrE"
);</code></pre>';

		$toView['conf'] = $configuration;
        
        //create and push to view
		$od=$this->createOpendata();
		
		$toView["opendata"] = $od;
        
        $this->content=$this->load->view("pages/odexample",$toView,true);

        $this->render_page();
        
		}
	
	public function example2(){
		// Define Meta
        $this->title = "Open Data Client: Example 2";
        $this->description = "Gets data from a public google spreadsheet then creates the grid with download links.";
                
        //Overwrite opedata configuration array
        $this->opendata['mode']='download';

//Just print for the sample
$configuration='<pre><code>$opendata = array(
	"source"=>"gs", 
	"mode"=>"download", 
	"sheetId"=>"1Y0KfRCM1N1_Fv1ulMRoZOkUGB63DXrYuzklewhghSrE"
);</code></pre>';
		$toView['conf'] = $configuration;	

		//create and push to view
		$od=$this->createOpendata();
				
		$toView["opendata"] = $od;
        
        $this->content=$this->load->view("pages/odexample",$toView,true);

        $this->render_page();
        
		}	
		
	public function example3(){
		// Define Meta
        $this->title = "Open Data Client: Example 3";
        $this->description = "Gets data from local csv: all the files in default directory.";
                
        //Overwrite configuration array
        $this->opendata['source']='local';
        $this->opendata['mode']='';
        $this->opendata['sheetId']='';

//Just print for the sample
$configuration="<pre><code>//Overwrite configuration array
\$this->opendata['source']='local';
\$this->opendata['mode']='';
\$this->opendata['sheetId']='';
</code></pre>";
        
		$toView['conf'] = $configuration;	        
        
		//create and push to view	
		$od=$this->createOpendata();
		$toView["opendata"] = $od;
        
        $this->content=$this->load->view("pages/odexample",$toView,true);

        $this->render_page();
        
		}	
	public function example4(){
		// Define Meta
        $this->title = "Open Data Client: Example 4";
        $this->description = "Gets data from local csv: only one file.";
                 
        //Overwrite configuration array
        $this->opendata['source']='local';
        $this->opendata['mode']='People.csv';
        $this->opendata['sheetId']='';

//Just print for the sample
$configuration="<pre><code>//Overwrite configuration array
\$this->opendata['source']='local';
\$this->opendata['mode']='People.csv';
\$this->opendata['sheetId']='';
</code></pre>";
        
		$toView['conf'] = $configuration;
        

		//create and push to view
		$od=$this->createOpendata();
	
		$toView["opendata"] = $od;
        
        $this->content=$this->load->view("pages/odexample",$toView,true);

        $this->render_page();
        
		}	
    
   
}
/*End of file*/
