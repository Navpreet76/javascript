<!DOCTYPE html>
<html>
<head>
<title>Jquery Toggle class</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
	$("button").click(function(){
		$("h1, h2, p").toggleClass("orange");
	});
});
</script>
<style>
.orange {
	color: orange;
}
</style>
</head>
<body>

<h1>Heading 1</h1>
<h1>Heading 2</h1>

<p>This is a Paragraph.</p>
<p>This is another Paragraph.</p>
<h4><i>This heading should not change.</i></h4>

<button>Toggle Class</button>
</body>
</html>