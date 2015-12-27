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

//Lightbox
	// delegate calls to data-toggle="lightbox"
	$(document).delegate('*[data-toggle="lightbox"]:not([data-gallery="navigateTo"])', 'click', function(event) {
		event.preventDefault();
		return $(this).ekkoLightbox({
			onShown: function() {
				if (window.console) {
					return console.log('Checking our the events huh?');
				}
			},
			onNavigate: function(direction, itemIndex) {
				if (window.console) {
					return console.log('Navigating '+direction+'. Current item: '+itemIndex);
				}
			}
		});
	});

	//Programatically call
	$('#open-image').click(function (e) {
		e.preventDefault();
		$(this).ekkoLightbox();
	});
	$('#open-youtube').click(function (e) {
		e.preventDefault();
		$(this).ekkoLightbox();
	});

	// navigateTo
	$(document).delegate('*[data-gallery="navigateTo"]', 'click', function(event) {
		event.preventDefault();

		var lb;
		return $(this).ekkoLightbox({
			onShown: function() {

				lb = this;

				$(lb.modal_content).on('click', '.modal-footer a', function(e) {

					e.preventDefault();
					lb.navigateTo(2);

				});

			}
		});
	});


});
