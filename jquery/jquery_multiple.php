<!DOCTYPE html>
<html>
<head>
<title>Jquery on Multiple</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
	$("p").on({
		mouseenter: function(){
			$(this).css("background-color", "lightgray");
		},
		mouseleave: function(){
			$(this).css("background-color", "lightblue");
		},
		click: function(){
			$(this).css("background-color", "red");
		}
	});
});	
</script>
</head>
<body>
<p>Click or move the mouse pointer over this paragraph! This is Dummy text to test this website and nothing more but filler!!</p>
</body>
</html>