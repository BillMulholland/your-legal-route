// JavaScript Document 

jQuery(document).ready(function($) {

if ($(".inventive-gravity-tooltip").length > 1) $(".inventive-gravity-tooltip").first().remove();	
/*
$( ".gform_fields" ).find( "li" ).each(function() {
  alert($(this).attr("id"));
});
*/
$( ".gform_fields" ).find( ":input").hover(function(event){
	event.stopPropagation();
	var li = $(this).closest(".gfield").attr("id");
	var div = document.getElementById (li);

	$(this).closest(".gfield").find(".gfield_description").each(function() {


  if ($(this).html() != "") {
	  console.log(li);
	  $(".inventive-gravity-tooltip").appendTo("#"+li);
	  $(".inventive-tooltip-container").html($(this).html());
      $(".inventive-gravity-tooltip").stop().fadeIn();
	  
	  ///if tooltip is outside viewport, load it on top
	   var div = document.getElementById ("inventive-gravity-tooltip");
       if (div.getBoundingClientRect) {
       var rect = div.getBoundingClientRect();
	  if (rect.left < 0)
	  {
	  $("#inventive-gravity-tooltip").removeClass("inventive-gravity-tooltip-left").addClass("inventive-gravity-tooltip-down");
      $("#inventive-arrow").removeClass("inventive-arrow-right").addClass("inventive-arrow-up");
	  }
	  else
	  {
	  $("#inventive-gravity-tooltip").not("inventive-gravity-tooltip").removeClass("*").addClass("inventive-gravity-tooltip-left");
      $("#inventive-arrow").removeClass("*").addClass("inventive-arrow-right");  
	  }
	  
	   }
	  
	   
  }
});
	
});	
$( ".gform_fields" ).find( ":input").mouseleave(function(){
	$(".inventive-gravity-tooltip").stop().fadeOut();
	

	
});

  
});