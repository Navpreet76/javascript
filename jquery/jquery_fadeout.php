<!DOCTYPE html>
<html>
<head>
<title>JQuery FadeOut</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
	$("button").click(function(){
		$("#div1").fadeOut();
		$("#div2").fadeOut("slow");
		$("#div3").fadeOut(3000);
	});
});	
</script>
</head>
<body>
<p>Demonstrate fadeOut() with different parameters.</p>

<button>Click to Fade Out boxes.</button><br><br>

<div id="div1" style="width:80px;height:80px;background-color:red;"></div><br>
<div id="div2" style="width:80px;height:80px;background-color:green;"></div><br>
<div id="div3" style="width:80px;height:80px;background-color:blue;"></div><br>
</body>
</html>