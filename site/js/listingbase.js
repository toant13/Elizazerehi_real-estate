// JavaScript Document
$('#thumbs').delegate('img','click', function(){
		$('#largeImage1').attr('src',$(this).attr('src').replace('thumb','large'));
		$('#description1').html($(this).attr('alt'));
});