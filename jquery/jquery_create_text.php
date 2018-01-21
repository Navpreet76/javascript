<!DOCTYPE html>
<html>
<head>
<title>Jquery create text</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
function appendText(){
	var txt1 = "<p>Text created by HTML</p>"; //Create text with HTML
	var txt2 = $("<p></p>").text("This is created by JQuery"); //Create text with JQuery
	var txt3 = document.createElement("p"); //Create text with JavaScript
	txt3.innerHTML = "Text created by DOM";  //Create text with DOM
	$("body").append(txt1, txt2, txt3); //Append new Elements
}	
</script>
</head>
<body>

<p>This is a paragraph that is here to test the functionality of the application.</p>
<button onclick="appendText()">Append Text</button>
</body>
</html>