<div class="clearfix"></div>

<div class="container">
	<h2>Static Tables and DataTables</h2>
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
		<p>You can extend table functionalities with DataTables</p>
		<p>Add the js and the css to the controller</p>
		<pre>
// Define custom CSS
$this->css = array("dataTables.bootstrap.min.css");
$this->javascript = array('jquery.dataTables.min.js','dataTables.bootstrap.min.js');		
		</pre>
		<p>Then just add the <code>.bp-data-table</code> class to the <code>table</code> in your view.</p>
		<br>
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
	<h2>Dynamic DataTables</h2>
	<p>Your can also build DataTables using a configuration array and a json file.</p>
	<p>First save your json file in the <code>data/</code> directory, the file has to be formatted according to the DataTables standard (<a href="https://www.datatables.net/examples/data_sources/ajax.html">more info</a>).</p>
	<p>Then add a configuration array to your controller, like this:</p>
	<pre>
$this->datatables=
	array(
			array(
			"driver"=>"file", //this should be 'array' or 'file'
			"id"=>"people", //this has to be the same of json file name
			"class"=>"table table-striped table-bordered", 
			"title"=>"Table title", 
			"caption"=>"table caption.",
			"fields"=>array("Name","Position","Office","Extn","Start","Salary")
				),
	);	
	</pre>
	<p class="well">Be careful: the <code>driver</code> is a very important option for your rendering. Set it to <code>array</code> to parse the json file with php and then pass it to DataTables javascript. Set the driver to <code>file</code> if you want to pass directly the json file to DataTables.</p>
	<p class="well">Be careful: this array is multidimesional, so you can render a cluster of tables.</p>
	<p>Then, render the result by passing your data to the DataTables template.</p>
	<pre>
$toDt["data"] = $this->datatables;
$toView["datatables"] = $this->load->view("template/datatables",$toDt,true);
	</pre>
	
<?php
echo $datatables;
?>
</div>	
