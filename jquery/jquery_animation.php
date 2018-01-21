<!DOCTYPE html>
<html>
<head>
<title>Jquery Animation</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
	$("button").click(function(){
		var div = $("div");
		$("div").animate({left: '200px'}, "slow");
		$("div").animate({fontSize: '3em', opacity: 0.7}, "slow");
	});
});
</script>
</head>
<body>
<button>Start Animation</button>
<p>By Default, HTML elements have a static position, and cannot be moved. To manipulate the position, remember to first set the CSS position property of the element to relative, fixed or absolute!</p>

<div style="background:red;height:100px;width:200px;position:absolute;">HELLO</div>
</body>
</html>