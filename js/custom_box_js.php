<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js">
	
	$(document).ready(function(){
		$('.box').onclick = function(e) {
			alert('ya clicked.');
			// var offs = $('.box').offset();
   //  		alert((e.clientX - offs.left) + ' ' + (e.clientY - offs.top));
		}
	}

</script>