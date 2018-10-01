$(document).ready(function(){


	// $()
	//$ calls over jquery
	//the thing inside the parens is what you
	//want jq to act on
	//i call it a bucket

	$(".edit-link").click(function(e){
		e.preventDefault()
		//fadeIn() fadeOut() fadeToggle()
		//slideUp() slideDown() slideToggle()
		//hide() show() toggle()
		var theurl = $(this).attr("href");

		$(this).parents("li").find("#edit-form").load(theurl);
		//$(this).parent().parent().next().slideToggle(500);
		//$("p").fadeTo(1000,0); //time, target opacity
		//or use position abs
	});
		
	$("a[href=#top-add]").click(function(e){
		e.preventDefault()
		$(this).parent().next().slideToggle(500);
	});

	$("a[href=#change]").click(function(e){
		e.preventDefault()
		$(this).parent().next().slideToggle(500);
	});

});