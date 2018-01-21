<!DOCTYPE html>
<html>
<head>
<title>Jquery add class</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
	$("button").click(function(){
		$("#div1").addClass("important blue");
	});
});	
</script>
<style>
.important {
	font-weight: bold;
	font-size: xx-large;
}	
.blue {
	color: blue;
}
</style>
</head>
<body>
<div id="div1">This is some Text.</div>
<div id="div2">This is some Text.</div>

<br>

<button>Add Classes to first div element</button>

</body>
</html>