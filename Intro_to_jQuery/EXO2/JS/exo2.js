$(function() {
  
    var $green, $hide, $unhide, $increase, $box, $reset;
    $green = $('#green');
    $hide = $('#hide');
    $unhide = $('#unhide');
    $increase = $('#increase');
    $box = $('#rectangle');
    $reset = $('#reset');
    
    $box.css("background-color", "yellow");
        
    $green.on('click', function() {
        $box.css("background-color", "green");
    });
    
    $hide.on('click', function() {
        $box.css("visibility", "hidden");
    });
    
    $unhide.on('click', function() {
        $box.css("visibility", "visible");
    });
    
    $increase.on('click', function() {
        // The parseInt() function parses a string argument and returns an integer
        var height = parseInt($box.css("height"));
        var add = parseInt("10px");
        $box.css({
            "height": height += add
        });

    });
    
    $reset.on('click', function() {
        $box.css("height", "30px");
        $box.css("background-color", "yellow");
    });
});