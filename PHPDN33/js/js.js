  $(window).resize(function () {
    if ($(this).width() < 1024) {
                    //An|Hien|Add|Remove class cho menu-right khi thay doi kich thuoc man hinh
                    $("#right").hide();
                    $("div#product").removeClass("col-sm-9");
                    $("div#product").addClass("col-sm-12");

                    //An|Hien|Add|Remove class cho menu-right khi thay doi kich thuoc man hinh
                    $("#service").hide();
                    $("div#slide-show-hot").removeClass("col-sm-9");
                    $("div#slide-show-hot").addClass("col-sm-12");

                    $("#search").hide();
                } else
                {
                    $("#right").show();
                    $("div#product").removeClass("col-sm-12");
                    $("div#product").addClass("col-sm-9");

                    $("#service").show();
                    $("div#slide-show-hot").removeClass("col-sm-12");
                    $("div#slide-show-hot").addClass("col-sm-9");

                    $("#search").show();
                }
            });
  

  window.onscroll = function() {myFunction()};

  var header = document.getElementById("myHeader");
  var sticky = header.offsetTop;

  function myFunction() {
    if (window.pageYOffset > sticky) {
        header.classList.add("sticky");
    } else {
        header.classList.remove("sticky");
    }
}
$(document).ready(function() {
    $("#loginLink").click(function( event ){
        event.preventDefault();
        $(".overlay").fadeToggle("fast");
    });
    
    $(".overlayLink").click(function(event){
        event.preventDefault();
        var action = $(this).attr('data-action');
        
        $.get( "ajax/" + action, function( data ) {
            $( ".login-content" ).html( data );
        }); 
        
        $(".overlay").fadeToggle("fast");
    });
    
    $(".close").click(function(){
        $(".overlay").fadeToggle("fast");
    });
    
    $(document).keyup(function(e) {
        if(e.keyCode == 27 && $(".overlay").css("display") != "none" ) { 
            event.preventDefault();
            $(".overlay").fadeToggle("fast");
        }
    });
});