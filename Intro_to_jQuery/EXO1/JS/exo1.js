var state = true;

$(function() {
    $('p').on('click', function() {
        if (state) {
			$(this).css("background-color", "yellow");
            $(this).css("font-size", "30px");
			state = false;
		} else {
			$(this).css("font-size", "15px");
            $(this).css("background-color", "white");
			state = true;
		}
        
    });
    $("p").hover(function(){
        $(this).css("font-style", "italic");
        }, function(){
        $(this).css("font-style", "normal");
    });
});