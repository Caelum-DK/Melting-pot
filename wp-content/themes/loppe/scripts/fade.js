	    
$(document).ready(function() {
 
    $("#content").fadeIn(1000);
 
    $(".menu a").click(function(event){
        event.preventDefault();
        linkLocation = this.href;
        $("#content").fadeOut(1000, redirectPage);
    });
 
    function redirectPage() {
        window.location = linkLocation;
    }
});