$(document).ready(function(){

    $(".display").slice(0, 8).show();
    $(".load-more").on("click", function(e){
      e.preventDefault();
      $(".display:hidden").slice(0, 4).slideDown();
      if($(".display:hidden").length == 0 ) {
        $(".load-more").css("display" , "none");
      }

     
    });

  })

