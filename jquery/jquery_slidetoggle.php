<!DOCTYPE html>
<html>
<head>
<title>Jquery Slide down</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
	$("#flip").click(function(){
		$("#panel").slideToggle("slow");
	});
});
</script>
<style>
#panel {
	padding: 50px;
	text-align: center;
	background-color: orange;
	border: 1px solid #c3c3c3;
	
}
#flip {
	padding: 5px;
	text-align: center;
	background-color: lightblue;
	border: 1px solid black;

}
</style>
</head>
<body>
<div id="flip"><h4>Click to Slide Panel up and down</h4></div>
<div id="panel">Hello World!!!!</div>
</body>
</html>