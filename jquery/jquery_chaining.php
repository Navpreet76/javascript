<!DOCTYPE html>
<html>
<head>
<title>JQuery Chaining statements</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
	$("button").click(function(){
		$("#p1").css("color", "red")
			.slideUp(2000)
			.slideDown(2000);
	});
});	
</script>
</head>
<body>
<p id="p1">JQuery is Amazing!!!</p>

<button>Click Me</button>
</body>
</html>