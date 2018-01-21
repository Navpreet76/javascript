<!DOCTYPE html>
<html>
<head>
<title>JQuery FadeToggle</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
	$("button").click(function(){
		$("#div1").fadeTo("slow", 0.2);
		$("#div2").fadeTo("slow", 0.4);
		$("#div3").fadeTo("slow", 0.6);
	});
});	
</script>
</head>
<body>
<p>Demonstrate fadeTo() with different parameters.</p>

<button>Click to fade boxes.</button><br><br>

<div id="div1" style="width:80px;height:80px;background-color:red;"></div><br>
<div id="div2" style="width:80px;height:80px;background-color:green;"></div><br>
<div id="div3" style="width:80px;height:80px;background-color:blue;"></div><br>
</body>
</html>