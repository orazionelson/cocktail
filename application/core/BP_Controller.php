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
    protected $status=0; //0=devel, 1=production
    protected $page_id = false;
    protected $view = false;
    protected $template = "main";
    protected $hasNav = true;
    protected $hasFooter = true;
    protected $cookieLaw = true;
    
    //Page contents
    public $javascript = array('vendor/jquery-1.11.2.js','vendor/bootstrap.min.js');
    public $appjs = array('plugins.js','main.js');
    public $css = array('bootstrap.min.css', 'bootstrap-theme.css','font-awesome.min.css');
    public $appcss=array('main.css');
    public $GFont = array('Oxygen','Cookie');
    public $content = false;
    //Page Meta
    public $title = false;
    public $description = false;

	//More
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
	
	    //A.C.: Append here any js related to cookies if cookieLaw is true
		if($this->cookieLaw){
		$this->appjs[]='vendor/jquery.cookiebar.js';
		$this->appjs[]='cookies.js';
		}
        
        //A.C.: Create jacascript and css strngs, compiled or not
        $toTpl["javascript"] = $this->get_script_string('js');
        $toTpl["css"] = $this->get_script_string();
        
        $toTpl["content"] = $this->content;
        $toTpl["title"] = $this->title;
        $toTpl["description"] = $this->description;
        $toTpl["GFont"] = $this->GFont;
        
        $toTpl["cookieLaw"] = $this->cookieLaw;
        
        /* Menu: to avoid use boilerplate menu set hasNav to false
         * and remove $menu reference from templates (i.e. from views/template/main.php)*/
        if($this->hasNav){
            $this->load->helper("nav");
            $toMenu["page_id"] = $this->page_id;
            $toTpl["nav"] = $this->load->view("template/nav",$toMenu,true);
        }
        /*eo menu*/
        
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
    
    /*@desc get the css o js string by A.C. 2016*/
    private function get_script_string($type='css'){
		switch($type){
			case 'css':
				$farray=array_merge($this->css,$this->appcss);
				$opentag = "\t\t<link rel=\"stylesheet\" href=\"".base_url();
				$closetag = "\">\n";
				$cache_file=$this->compiledcss;

			break;
			case 'js':
				$farray=array_merge($this->javascript,$this->appjs);
				$opentag="\t\t<script src=\"".base_url(); 	
				$closetag="\"></script>\n";
				$cache_file=$this->compiledjs;

			break;				
			}
		
		$script_string='';
		if($this->status==0){ 
			foreach($farray as $f){
				$script_string.=$opentag.$type."/".$f.$closetag;
			}
		}
		elseif($this->status==1){
			$minify = new Minifier();
			$minify->compress($farray, $type."_cache/".$cache_file,$type);
			$script_string=$opentag.$type."_cache/".$cache_file.$closetag;	 
		}
	return $script_string;			
	}		
}

/*End of file BP_Controller.php*/
/*Location .application/core/BP_Controller.php*/
