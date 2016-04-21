$(document).ready(function() {
	$('.pretty-pre').prettyPre();
	//tocfy
	$('.tocfy').tocfy();
	$('.tabfy').tabfy('h2');

	//set an element min-height at 100% of page	
	var delta = $('.navbar:first').height();
	$().fullpage(delta);
	
	

	//var wh = $(window).height();
	//var nh = $('.navbar:first').height();
	//$('.jumbotron').css('min-height',(wh-nh));

	//class to bundle DataTable
	if($('table.bp-data-table')[0]){
		$('table.bp-data-table').DataTable();
		}
		
	if($('table.bp-file-data-table')[0]){
		$("table.bp-file-data-table[id]")
		.map(function() { 
			$('#'+this.id).DataTable( {
			"ajax": "data/"+this.id+".json"
			}); 
			});
		}
		
	if($('table.bp-array-data-table')[0]){		
		$("table.bp-array-data-table[id]")
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

//Scroller
$().scroller(".scrollnav",delta);
//Footnotes
$().footnotes();


//Offcanvas
if($('[data-offcanvas]')[0]){
	$('#top-down-header button').hide();
	
	$('#navbar').removeClass('navbar-collapse collapse');
	
	var offcanvasButton = '<div id="offcanvas-button-container"><button type="button" class="offcanvas-button btn-mobile" data-toggle="offcanvas"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button></div>';
	
	$('[data-offcanvas]').each(function () {
		var toggle = $(this).data('offcanvas');
		//toggle = 'offcanvas-'+toggle;
		$(this).closest( '#main-container' )
		.addClass("row-offcanvas row-offcanvas-"+toggle)
		.find('#main')
		.prepend(offcanvasButton)
		.find('.offcanvas-button')
		.css('float',toggle);
		
		$(this).closest('#sidebar').addClass('sidebar-offcanvas');
		
		});

		$('[data-toggle="offcanvas"]').click(function () {
			$('.row-offcanvas').toggleClass('active')
	});					
}
//else console.log('non ci sta');

//sort list
$('.sorted').each(function(){
	var mylist=$(this);
	var listitems = $(this).find('li').get();
	
	listitems.sort(function(a, b) {
   return $(a).text().toUpperCase().localeCompare($(b).text().toUpperCase());
	})	
	//console.log(listitems);
	$.each(listitems, function(idx, itm) { 
		console.log(mylist);
		mylist.append(itm); });
});
//var mylist = $('.sorted');
//var listitems = mylist.find('li').get();
//console.log(listitems);

});
