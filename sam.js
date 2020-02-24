$(document).ready(function(){
	    
		function resetForm($form) {
    $form.find('input:text, input:password, input:file, select, textarea').val('');
		}	
		var i =1;

	$("#Right").click(function(){
	resetForm($('#upform'));
	$("#upform").fadeOut(500);
	$("#sam2").animate({
      left: '470px',  opacity: '0'}, "slow");
	  $("#sam2").hide(500);
	  $("#sam1").fadeIn(200);
		  $("#sam1").animate({
      left: '0px', opacity: '1'}, "slow");	
		  
		  
	  	

 	 
  });		
		
  $("#Left").click(function(){	 
		resetForm($('#inform'));
	  if (i >= 2)  {

	  $("#sam1").fadeOut(500);
	  $("#sam1").animate({
      right: '370px', opacity: '0'}, "slow");
	  $("#sam2").show();
	  $("#sam2").animate({
      left: '0px',  opacity:'1'}, "slow");  
	   $("#upform").fadeIn(500);	  
	  }
	 else {
		  $("#sam1").animate({
      right: '370px', opacity: '0'}, "slow");
	  $("#sam2").show();
	    i++;
	 }  
  });

});

