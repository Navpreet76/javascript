<!DOCTYPE html>
<html>
<head>
<title>JQuery Before After</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
	$("#btn1").click(function(){
		$("img").before("<b>Before</>");
	});

	$("#btn2").click(function(){
		$("img").after("<b><i>After</i></b>");
	});
});	
</script>
</head>
<body>
<img src="space5.jpg" alt="space5" width="200" height="240"><br><br>

<button id="btn1">Insert Before</button>
<button id="btn2">Insert After</button>

</body>
</html>