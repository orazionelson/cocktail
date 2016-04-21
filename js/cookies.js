//Set up your cookie bar here
$(document).ready(function(){
	$.cookieBar();
});

//<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
if(jQuery.cookieBar('cookies')){
		window.ga=function(){ga.q.push(arguments)};ga.q=[];ga.l=+new Date;
        ga('create','UA-XXXXX-Y','auto');ga('send','pageview')	
	}
