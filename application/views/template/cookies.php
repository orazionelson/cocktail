<script>
//Set up your cookie bar here
$(document).ready(function(){
	$.cookieBar();
});

//Set up your cookies here
if(jQuery.cookieBar('cookies')){
	//<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
	window.ga=function(){ga.q.push(arguments)};ga.q=[];ga.l=+new Date;
	ga('create','UA-XXXXX-Y','auto');ga('send','pageview')	
}
</script>
<!--And any oter inclusion like this for Google Analytics-->
<script src="https://www.google-analytics.com/analytics.js" async defer></script>
