<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Feedreader extends BP_Controller {

	protected $limit=5;
	protected $sources="https://github.com/orazionelson.atom";						
	protected $rss_date_format="d/m/y";					
	protected $rss_cache="rss_cache";

    public function index()
    {   

        // Define Meta
        $this->title = "Feedreader";
        $this->description = "A Feedreader for Cocktail";


		$feed = new SimplePie();
		$feed->set_feed_url($this->sources);
		$feed->set_cache_location($this->rss_cache);
		$feed->set_item_limit(5);
		$feed->init();
		$feed->handle_content_type();
	
        //Somedata for the page.
        $toView["date_format"] = $this->rss_date_format;
        $toView["title"] = $feed->get_title();
        $toView["items"] = $feed->get_items(0, $this->limit);

        /*short cut to load->view("pages/page_name",$content,true)*/
        $this->build_content($toView);

        $this->render_page();
    }
}
/*End of file example.php*/
/*Location .application/controllers/example.php*/
