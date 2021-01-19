<!DOCTYPE html>
<html>
<head>
	<title>
		Online Automatic Text Summarization
	</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<link rel="icon" type="image//png" href="images/pencil.png">
</head>
<body>

<div class="topnav" id="myTopnav">
  <a href="login.php" class="active">Log In</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
  <a href="index.php"> <img src="images/pencil.png" width="60" height="60" style="border-radius: 50%; margin: 9px; margin-left: 20px;"></a>
</div>

<div class= "generateButton1">
<button id="close-image"><img src="images/translate.png" width="80" height="80"></button>
</div>

<br><br><br><br>

<div class= "generateButton">
<button id="close-image"><img src="images/rotate.png" width="100" height="100"></button>
</div>

<div class="userInput">
	<h1> <b>INSERT YOUR TEXT<b></h1>
<textarea rows="25" cols="80"></textarea>	
</div>



<div class="summaryGenerated">
	<h1> <b>SUMMARY<b></h1>
	<h3> <b> KEYWORDS: </b> </h3>

<button id="close-image" style="margin-left: 440px;"><img src="images/discount.png" width="50" height="50" ></button>
<button id="close-image"><img src="images/highlighter.png" width="50" height="50"></button>

<textarea rows="18" cols="80" readonly></textarea>	
</div>
</body>
</html>