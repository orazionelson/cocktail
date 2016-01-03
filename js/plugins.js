// Avoid `console` errors in browsers that lack a console.
(function() {
    var method;
    var noop = function () {};
    var methods = [
        'assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error',
        'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log',
        'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd',
        'timeline', 'timelineEnd', 'timeStamp', 'trace', 'warn'
    ];
    var length = methods.length;
    var console = (window.console = window.console || {});

    while (length--) {
        method = methods[length];

        // Only stub undefined methods.
        if (!console[method]) {
            console[method] = noop;
        }
    }
}());

// Place any jQuery/helper plugins in here.
/*****
 * Make a pretty 'pre' for your code
 * by Alfredo Cosco 2015
 * @orazio_nelson
 * alfredo.cosco@gmail.com
 * source of inspiration 
 * http://stackoverflow.com/questions/4631646/how-to-preserve-whitespace-indentation-of-text-enclosed-in-html-pre-tags-exclu
 * https://perishablepress.com/perfect-pre-tags/
 * */
(function ( $ ) {

	$.fn.prettyPre = function (){
		var preEl = $(this);
		for (var i = 0; i < preEl.length; i++)
			{	
			var content = $(preEl[i]).html()
					.replace(/[<>]/g, function(m) { return {'<':'&lt;','>':'&gt;'}[m]})
					;						
			var tabs_to_remove = '';
			//console.log(content.indexOf('\t'));
			while (content.indexOf('\t') == '0')
			{			
			  tabs_to_remove += '\t';
			  content = content.substring(1);			  
			}
			var re = new RegExp('\n' + tabs_to_remove, 'g');
			content = content.replace(re, '\n');              
			$(preEl[i]).html(content);
			}	
		};

}( jQuery ));

/***********************
 * Tocfy plugin
 * by Alfredo Cosco 2015
 * @orazio_nelson
 * alfredo.cosco@gmail.com
 **********************/
(function ( $ ) {
	$.fn.tocfy = function (){
		var s = $('.tocfy').data('tocSide');
	if(!s) s='';
	
	if(s=='right'){var pull='pull-right';}
	else {var pull='';}
	
	if(s=='top') {var col1='12'; var col2='12';}
	else  {var col1='9'; var col2='3';}

	
	var p = $('.tocfy').data('tocPosition');
	var fixed='';
	if(p=='fixed') fixed=' data-spy = "affix"';
	
	//console.log(a);
	$('.tocfy').wrap( '<div class="row"></div>' )
	.before('<nav class="toc list-group hidden-print hidden-xs hidden-sm"'+fixed+' />')
	.wrap('<div class="col-md-'+col1+'" role="main" />');
	
	$('.toc').wrap('<div class="col-md-'+col2+' '+pull+'" role="complementary" />');
	//$('.tocfy').find(':header' ).clone().appendTo('.toc');
	var i=1;
	
	$('.tocfy').find(':header' ).each(function() {
		var id = $(this).closest( ".tocfy" ).attr('id');
		$(this).attr('id', id+i++);
		$(this).addClass('toc-item');
		});//.clone().appendTo('.toc');
	var selector = '.toc-item';
	var all = $(selector);
	var nodes = []; 
	for(var i = all.length; i--; nodes.unshift(all[i]));
	var result = document.createElement("ul");
	buildRec(nodes, result, 2);
	$(result).addClass('nav nav-stacked');
	$(".toc").append(result);
	};
	
	/**
	 * Build Toc
	 * buildRec() http://jsfiddle.net/fA4EW/
	 * **/
	function buildRec(nodes, elm, lv) {
	    var node;
	    // filter
	    do {
	        node = nodes.shift();
	    } while(node && !(/^h[123456]$/i.test(node.tagName)));
	    // process the next node
	    
	    if(node) {
	        var ul, li, cnt;
	        var curLv = parseInt(node.tagName.substring(1));
	        
		        if(curLv == lv) { // same level append an il
		            cnt = 0;
		        } else if(curLv < lv) { // walk up then append il
		            cnt = 0;
		            do {
						//console.log(elm);
		                elm = elm.parentNode.parentNode;
		                cnt--;
		            } while(cnt > (curLv - lv));
		        } else if(curLv > lv) { // create children then append il
		            cnt = 0;
		            do {
		                li = elm.lastChild;
		                if(li == null)
		                    li = elm.appendChild(document.createElement("li"));
		                elm = li.appendChild(document.createElement("ul"));
		                cnt++;
		            } while(cnt < (curLv - lv));
		        }
		        li = elm.appendChild(document.createElement("li"));
		        
		        // replace the next line with archor tags or whatever you want
		        li.innerHTML = '<a href="#'+node.id+'" role="menuitem">'+node.innerHTML+'</a>';
		        // recursive call
		        buildRec(nodes, elm, lv + cnt);
	    }
	}	
}( jQuery ));

/*********************
 * Scroller
 * by Alfredo Cosco 2015
 * @orazio_nelson
 * alfredo.cosco@gmail.com
 ********************/
(function ( $ ) {
	$.fn.scroller = function (selector,correction){
		var selector="ul.nav li a[href^='#']";
		var correction=50;

		$(selector).on('click', function(e) {
	
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
	       scrollTop: target-correction
	     }, 1000, function(){
	       // when done, add hash to url
	       // (default click behaviour)
	       window.location.hash = hash;
	     });
	
		});

	};
}( jQuery ));
