<!DOCTYPE html>
<html>
<head>
<title>Jquery Prepend</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
	$("#btn1").click(function(){
		$("p").prepend(" <b>Prepended Text </b>.");
	});
	$("#btn2").click(function(){
		$("ol").prepend("<li>Prepended Item</li>");
	});
});
</script>
</head>
<body>
<p>This is a Paragraph.</p>
<p>This is another Paragraph.</p>

<ol>
	<li>List Item</li>
	<li>List Item</li>
	<li>List Item</li>
</ol>

<button id="btn1">Prepend Text</button>
<button id="btn2">Prepend list Items</button>
</body>
</html>