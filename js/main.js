$("ul.nav li a[href^='#']").on('click', function(e) {

   // prevent default anchor click behavior
   e.preventDefault();

   // store hash
   var hash = this.hash;

   //create and define the target
   var target;
   if(hash=='#home') target=0;
   else target = $(hash).offset().top;
   
   // animate
   $('html, body').animate({
       scrollTop: target
     }, 1000, function(){
       // when done, add hash to url
       // (default click behaviour)
       window.location.hash = hash;
     });

});

$(document).ready(function() {
	
	//set the jumbotron to 100% of page
	var wh = $(window).height();
	var nh = $('.navbar:first').height();
	$('.jumbotron').css('min-height',(wh-nh));

	//class to bundle DataTable
	if($('table.bp-data-table')[0]){
		console.log('ciao');
		$('table.bp-data-table').DataTable();
		}
		
	if($('table.bp-file-data-table')[0]){
		$("table.bp-file-data-table[id]")         // find spans with ID attribute
		.map(function() { 
			$('#'+this.id).DataTable( {
			"ajax": "data/"+this.id+".json"
			}); 
			});
		}
		
	if($('table.bp-array-data-table')[0]){		
		$("table.bp-array-data-table[id]")         // find spans with ID attribute
		.map(function() {
			var dataset=$('#'+this.id+'data').text();
			var jsonDataSet = jQuery.parseJSON(dataset);
			$('#'+this.id).DataTable( {
			"data": jsonDataSet
			}); 
			});
		}
});
