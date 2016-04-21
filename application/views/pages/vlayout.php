<div class="clearfix"></div>
<h2>Vertical menu</h2>
<p>Ovverride settings at page controller level is easy. Just add in your controller code:</p>
<pre>
	<code>
/*Override main template*/
$this->template = "custom_main_template";
/*Overwrite nav menu*/
$this->nav = "custom_navigator";
	</code>
</pre>
<p>Cocktail provides two templates: <code>vmain.php</code> and <code>vnav.php</code> (see <code>application/view/templates/</code>)</p>

<p>In this case combining the first as main template, and the second as navigator template, you can reorganize the page on the fly in a two columns structure. <strong>(NB: Of course you can use the templates vmain and vnav at BP_Controller level to affect all the pages.)</strong></p>

<div class="well">
<p>For MOBILE resolutions the <code>vnav.php</code> template has two options, the default is a top-down sliding menu.</p>
<p><img src="images/default_vertical_layout.png" alt="Default Mobile Vertical Layout" class="img-responsive center-block">
</p>
<p>You can display an off-canvas menu just editing/overriding two option, in your controller add:</p>
<pre><code>
/*set off-canvas*/	
$this->offcanvas=true; //bool: true|false
/*set sliding direction*/
$this->offcanvas_pos='right'; //options: left|rigth
</code></pre>
<img src="images/offcanvas_vertical_layout.png" alt="Offcanvas Mobile Vertical Layout" class="img-responsive center-block">
</div>
<h3>Example</h3>
<pre>
class Vmenu extends BP_Controller {

    public function index()
    {
        /* Remember you can change the main template if you need!*/
        $this->template = "vmain";
        /*Overwrite nav menu*/
        $this->nav = "vnav";
        
        /*set off-canvas*/
        $this->offcanvas=true;
        
        /*set sliding direction*/
        $this->offcanvas_pos='right';
        

        // Define Meta
        $this->title = "Vertical Layout";
        $this->description = "Override page organization";
		$this->css[] = "vlayout.css";
        
        
        //Somedata for the page.
        $toView["day"] = strftime("%A",strtotime("today"));

        /*short cut to load->view("pages/page_name",$content,true)*/
        $this->build_content($toView);

        $this->render_page();
    }
}
</pre>

<p>
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vestibulum quis nibh vitae viverra. Donec sit amet aliquam ligula, non suscipit erat. Morbi cursus sit amet erat a cursus. Praesent dui nibh, eleifend nec vulputate vel, auctor sed quam. Aenean massa magna, fermentum et sagittis at, fringilla at sapien. Mauris bibendum lectus nibh, at consectetur nulla viverra eu. Quisque aliquet neque vitae convallis placerat. Etiam et commodo sapien, vel consectetur felis. Sed iaculis rutrum pulvinar. Interdum et malesuada fames ac ante ipsum primis in faucibus. In interdum eget tortor sit amet mattis. Curabitur non eros ligula. Duis nibh mauris, tincidunt sed commodo ac, lobortis sit amet orci. Maecenas rhoncus neque nec vestibulum tincidunt. Morbi ex neque, luctus sit amet nibh sed, ornare imperdiet nisl. Praesent venenatis gravida mollis. Duis nec maximus sem, non efficitur velit. Fusce dictum dolor cursus, vehicula neque sed, venenatis augue. Donec non turpis pharetra, aliquam ante et, volutpat sapien. Sed ornare, erat et faucibus dictum, libero urna sagittis ex, eget consequat felis tellus id risus. Aliquam et posuere tortor. Nullam convallis cursus porttitor. Aliquam auctor eget tortor sit amet auctor.
</p>
