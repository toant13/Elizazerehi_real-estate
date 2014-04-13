$(window).bind("load", function() { 
       
      var footerHeight = 0,
	   	  footerTop = 0,
	   	  $footer = $(".footright");
	   
       positionFooter();
       
       function positionFooter() {
       
                footerHeight = $footer.height();
                footerTop = ($(window).scrollTop()+$(window).height()-footerHeight)+"px";
       
               if ( ($(document.body).height()) < $(window).height()) {
                   $footer.css({
                        position: "absolute"
                   }).animate({
                        top: footerTop
                   })
               } else {
                   $footer.css({
                        position: "static"
                   })
               }
               
       }

       $(window)
               .scroll(positionFooter)
               .resize(positionFooter)
               
});


$(document).ready(function() {
	
	$('#myModal').modal(options)
	
});	



$('#thumbs1').delegate('img','click', function(){
		$('#largeImage1').attr('src',$(this).attr('src').replace('thumb','large'));
		$('#description1').html($(this).attr('alt'));
});
	
$('#thumbs2').delegate('img','click', function(){
	$('#largeImage2').attr('src',$(this).attr('src').replace('thumb','large'));
	$('#description2').html($(this).attr('alt'));
});

$('#thumbs3').delegate('img','click', function(){
	$('#largeImage3').attr('src',$(this).attr('src').replace('thumb','large'));
	$('#description3').html($(this).attr('alt'));
});

$(".carousel").carousel({
 	 interval: false
})
