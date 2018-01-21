<?php include 'connection.php' ?>
<!DOCTYPE html>
<html>
<head>
<title>JQuery Click</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
<script>
$(document).ready(function(){
	$("p").click(function(){
		$(this).hide();
	});
});	
</script>



<p>If you Click me , I will Dissappear!</p>
<p>Me First I wanna vanish First!!!</p>
<p>Me Too Click me!!!</p>
</body>
</html>