<div class="clearfix"></div>
<div class="container">
	<h2>DataTables Bundle</h2>
	
	
	<div class="container">
		<h3>This is a common table</h3>
		<p>A common <code>table</code> themed with bootstrap classes</p>
		<table class="table table-striped table-hover">
			<thead>
				<tr>
			        <th>Firstname</th>
			        <th>Lastname</th>
			        <th>Email</th>
		      </tr>
		    </thead>
			<tbody>
				<tr class="success">
					<td>John</td>
					<td>Doe</td>
					<td>john@example.com</td>
				</tr>
			    <tr class="danger">
					<td>Mary</td>
					<td>Moe</td>
					<td>mary@example.com</td>
			    </tr>
				<tr>
					<td>July</td>
					<td>Dooley</td>
					<td>july@example.com</td>
				</tr>
			</tbody>
	  </table>
	</div>
	<div class="container">
		<h3>Data Table Bundle</h3>
		<p>Just add the <code>.bp-data-table</code> class to the <code>table</code>.</p>
		<table  id="example" class="table table-striped table-hover bp-data-table">
			<thead>
				<tr>
					<th>Firstname</th>
					<th>Lastname</th>
					<th>Email</th>
				</tr>
			</thead>
			<tbody>
				<tr class="success">
					<td>John</td>
					<td>Doe</td>
					<td>john@example.com</td>
				</tr>
				<tr class="danger">
					<td>Mary</td>
					<td>Moe</td>
					<td>mary@example.com</td>
				</tr>
				<tr>
					<td>July</td>
					<td>Dooley</td>
					<td>july@example.com</td>
				</tr>
			</tbody>
		</table>
	</div>
<?php
echo $datatables;
?>

	<pre>
	class Example extends BP_Controller {
	
	    public function index()
	    {
	
	        $this->title = "Example!";
	        $this->description = "A Codeigniter-Boilerplate example";
	        $this->css = array("BP/homepage.css","BP/example.css");
	        $this->GFont = array("Lobster","Puritan");
	        $toView["day"] = strftime("%A",strtotime("today"));
	
	        $this->build_content($toView);
	        $this->render_page();
	    }
	}
	</pre>
	
	<img src="<?php echo base_url()?>images/BP/logo.png" id="logo"/>
</div>	
