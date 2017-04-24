	
// alert('ya clicked.');

$(document).ready(function(){
	// var old_x = e.clientX;
	// var old_y = e.clientY;
	
	// var div_height = $(this).height();
	// var div_width = $(this).width();
    
    var div_height;
    var div_width;
    var old_x;
    var old_y;
    var is_clicked = false;

    var isDragging = false;
    $(".box > .js-resizer").mousedown(
    	function(e) {
        	isDragging = false;
        	div_height = $(this).parent().height();
			div_width = $(this).parent().width();
			old_x = e.clientX;
			old_y = e.clientY;
			is_clicked = true;
        }
    ).mouseup(
     	function() {
     		is_clicked = false;
    	}
    ).mousemove(
    	function(e) {
    		if (is_clicked) {
    			var new_x = e.clientX;
				var new_y = e.clientY;
				$(this).parent().width(div_width + (new_x - old_x));
				$(this).parent().height(div_height + (new_y - old_y));
    		}
     	}
     );


    $('.box').on (
    	'click',
    	function(e) {
    		console.log(window.location.href );
    	}
    )

})





