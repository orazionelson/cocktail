<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * BP_Controller
 * Provides a basic extension of CI_Controller to implement codeigniter-boilerplate
 * logics. 
 *
 * Extend this class to create a page.
 *
 * @package		codeigniter-boilerplate
 * @author		Yari D'areglia yari@jumpzero.com
 * 
 * Extended in 2016
 * 
 * @package cocktail
 * @author Alfredo Cosco alfredo.cosco@gmail.com
 */
class BP_Controller extends CI_Controller{
    //Page info
    
    //Don't touch
    protected $version='0.0.6 alpha';
    protected $page_id = false;
    protected $view = false;
     
    //Start here your config    
	//Status: Set 0 for development or 1 for production
	//the production environment combines and 
	//minify the css and js		    
    protected $status=0; //0=devel, 1=production
        
    //Set your default template 
    //cocktail bundles two standard templates: main and vmain
    protected $template = "main";
    
	//Set true if you want a navbar
    protected $hasNav = true;
    //Set the default navbar template
    //cocktail bundles two standard templates: nav and vnav
    protected $nav = "nav";
    
    //Set if you want to see or not breadcrumbs 
    protected $hasBreadcrumbs=true;
    
    //If you use the vertical navigator layout
    //set here the offcanvas : bool(true|false)
    protected $offcanvas=false;
    protected $offcanvas_pos='left';
      
    //Page Meta
    public $title = false;
    public $description = false; 
        
    //Page contents
    public $javascript = array('vendor/jquery-2.2.4.min.js','vendor/bootstrap.min.js');
    public $appjs = array('plugins.js','main.js');
    public $css = array('bootstrap.min.css', 'bootstrap-theme.css','font-awesome.min.css');
    public $appcss=array('main.css');
    public $GFont = array('Oxygen','Cookie');
    public $content = false;
	    
	//Set true if you want a footer   
	protected $hasFooter = true;
	
	//Set true to activate cookieLaw plugin
	// and cookie.js file
    protected $cookieLaw = true; 
    protected $cookies = "cookies";
    
	//More, don't touch
	public $datatables = array();
	public $controller;
	        

    /**
     * @desc build and setup basic info
     */
    public function __construct(){
        parent::__construct();
        $this->page_id = strToLower(get_class($this));
        $this->view = "pages/".$this->page_id;
        $this->controller=strtolower(get_class($this));
        $this->compiledcss='_cache_'.$this->controller.'.css';
        $this->compiledjs='_cache_'.$this->controller.'.js';
    }

    /**
     * @desc render the final page composed on template and page content
     */
    public function render_page(){
	
        //Setup template content
	//$breadcrumbs=new Breadcrumbs();
	    //A.C.: Append here any js related to cookies if cookieLaw is true
		if($this->cookieLaw){
		$this->appjs[]='vendor/jquery.cookiebar.js';
		//$this->appjs[]='cookies.js';
		$toCookies['google']='1';
		$toTpl["cookies"] = $this->load->view("template/cookies",$toCookies,true);	
		}
		else $toTpl['cookies']='';
        
        //A.C.: Create jacascript and css strngs, compiled or not       
        
        $toHead["title"] = $this->title;
        $toHead["description"] = $this->description;
        $toHead["css"] = $this->get_script_string();
        $toHead["GFont"] = $this->GFont;
        $toHead["version"] = $this->version;
        
        $toTpl["head"] = $this->load->view("template/head",$toHead,true);

        $toTpl["content"] = $this->content;
        $toTpl["javascript"] = $this->get_script_string('js');
        $toTpl["cookieLaw"] = $this->cookieLaw;
        
        
        /* Menu: to avoid use boilerplate menu set hasNav to false
         * and remove $menu reference from templates (i.e. from views/template/main.php)*/
        if($this->hasNav){
            $this->load->helper("nav");
            $toMenu["page_id"] = $this->page_id;
            
            if($this->offcanvas) { 
				$toMenu["offcanvas"] = $this->offcanvas;
				$toMenu["offcanvas_pos"] = $this->offcanvas_pos;
				}
            
            $toTpl["nav"] = $this->load->view("template/".$this->nav,$toMenu,true);
        }
        /*eo menu*/
        
        /*Breadcrumbs*/
        /*Link: https://github.com/mmkjony/Codeigniter-Breadcrumb-Helper-for-Bootstrap*/
        $toTpl["breadcrumbs"]='';
         if($this->hasBreadcrumbs){
	        $this->load->helper("breadcrumb");
			if($this->get_page_id()!='homepage'){
				$toTpl["breadcrumbs"]=ci_breadcrumb();
				}
			//else $toTpl["breadcrumbs"]='';
		}
		
        
        
        /* Footer: to avoid use a footer hasFooter to false
         * and remove $footer reference from templates (i.e. from views/template/main.php)*/
        if($this->hasFooter){
            $toFooter['footer_id']='';
            $toTpl["footer"] = $this->load->view("template/footer-cocktail",$toFooter,true);
        }
        /*eo footer*/

        //Finally render the page :)
        $this->load->view("template/".$this->template,$toTpl);
    }
    
    /**
     * @desc Create content for the current page
     */
    public function build_content($page_content=""){
        $this->content = $this->load->view($this->view,$page_content,true);
    }
      
    /**
     * @desc get function for page_id
     */
    public function get_page_id(){  
        return $this->page_id;
    }
    
    /**
     * @desc get function for view
     */
    public function get_view(){  
        return $this->view;
    }
    
    /**
     * @desc get function for template
     */
    public function get_template(){  
        return $this->template;
    }
    
    /*@desc get the css o js string, by A.C. 2016*/
    private function get_script_string($type='css'){
		switch($type){
			case 'css':
				$farray=array_merge($this->css,$this->appcss);
				$opentag = "\t\t<link rel=\"stylesheet\" href=\"";
				$closetag = "\">\n";
				$cache_file=$this->compiledcss;

			break;
			case 'js':
				$farray=array_merge($this->javascript,$this->appjs);
				$opentag="\t\t<script src=\""; 	
				$closetag="\"></script>\n";
				$cache_file=$this->compiledjs;

			break;				
			}
		
		$script_string='';
		if($this->status==0){ 
			foreach($farray as $f){
				if (filter_var($f, FILTER_VALIDATE_URL) === FALSE) {
					$script_string.=$opentag.base_url().$type."/".$f.$closetag;
				}			
				else {					
					$script_string.=$opentag.$f.$closetag;
					}
			}
		}
		elseif($this->status==1){
			//minify just local js/css, remote/CDN js have to be added directly on main template
			foreach($farray as $k=>$f){
				if (filter_var($f, FILTER_VALIDATE_URL) === FALSE) {
					$local[]=$f;
				}
				else {
					//$remote[]=$f;
					}
			}	

			$minify = new Minifier();
			$minify->compress($local, $type."_cache/".$cache_file,$type);
			$script_string=$opentag.base_url().$type."_cache/".$cache_file.$closetag;	 
		}
	return $script_string;			
	}
	


	
	public function createOpendata(){
		$myopendata=new BP_Opendataclient;
		$myopendata->opendata=$this->opendata;
		$opendata=$myopendata->opendata;
		
		$source=$opendata['source'];
		$mode=$opendata['mode'];
		$sheetId=$opendata['sheetId'];
		//var_dump($opendata);
		$result='';
		switch($source){
			case "local":
				$this->css[] = "datatables.min.css";
				$this->javascript[] = 'vendor/jquery.dataTables.min.js';  
				
				if(strlen(trim($sheetId)==0)){
					$sheetId="data/opendata";
					}
				
				if(strlen(trim($mode)==0) AND !is_file($sheetId."/".$mode)){
					$mode='*.csv';
					}
				$result.=$myopendata->localGetView($sheetId,$mode);
			break;
			case "gs":				 
				 switch($opendata['mode']){
					case "view":
						$result.=$myopendata->gsGetMainInfo($sheetId);
						$result.=$myopendata->gsGetView($sheetId);
						$result.="</div>";
					break;
					case "download":
						$info=$myopendata->getInfo($sheetId);
						$result.=$myopendata->gsGetMainInfo($sheetId);
						$result.="</div>";
						$result.=$myopendata->gsGetDownloadEntire($sheetId);
						$result.=$myopendata->gsGetDownloadSingleSheet($info['sheets']);
						
					break;
					default:
						$info=$myopendata->getInfo($sheetId);
						$result.=$myopendata->gsGetMainInfo($sheetId);
						$result.=$myopendata->gsGetView($sheetId);
						$result.="</div>";
						$result.=$myopendata->gsGetDownloadEntire($sheetId);
						$result.=$myopendata->gsGetDownloadSingleSheet($info['sheets']);
					break;
				}
			}
		return $result;
		}	
	
			
}

/*End of file BP_Controller.php*/
/*Location .application/core/BP_Controller.php*/
