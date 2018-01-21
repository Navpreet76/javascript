<!DOCTYPE html>
<html>
<head>
<title>Jquery Append</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
	$("#btn1").click(function(){
		$("p").append(" <b>Appended Text </b>.");
	});
	$("#btn2").click(function(){
		$("ol").append("<li>Appended Item</li>");
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

<button id="btn1">Append Text</button>
<button id="btn2">Append list Items</button>
</body>
</html>