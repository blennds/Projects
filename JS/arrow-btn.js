$(".arrow-btn" ).hide();  
$(document).ready(function(){
  $(window).scroll(function(){
  	var arrow = $(window).scrollTop();
	  if (arrow > 300) {
	    $(".arrow-btn").show();
	  }

	  else{
		  $(".arrow-btn" ).hide(); 
		  
	  }
  })
})