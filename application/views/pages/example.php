<div class="clearfix"></div>
<div class="container">
<h2>Example of <span><?php echo $day?></span></h2>

<h3>Code to produce this page</h3>
<pre>
class Example extends BP_Controller {

    public function index()
    {

        $this->title = "Example!";
        $this->description = "A Codeigniter-Boilerplate example";
        $this->css[] = "BP/homepage.css";
        $this->css[] = "BP/example.css";
        $this->GFont = array("Lobster","Puritan");
        $toView["day"] = strftime("%A",strtotime("today"));

        $this->build_content($toView);
        $this->render_page();
    }
}
</pre>

<img src="<?php echo base_url()?>images/BP/logo.png" id="logo"/>
</div>
