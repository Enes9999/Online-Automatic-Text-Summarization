<!DOCTYPE html>
<html>

<head>
	<title>
		Online Automatic Text Summarization
	</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<link rel="icon" type="image//png" href="images/pencil.png">
	<script src="js/jquery-2.0.0.js"></script>
	<script src="js/GLOBALS.js"></script>
	<script src="js/readtxtfile.js"></script>
	<script src="js/replacements.js"></script>
	<script src="js/reveal_docs.js"></script>
	<script src="js/spin.js"></script>
	<script src="js/summarize.js"></script>

	<script>
		window.onerror = function(msg, url, linenumber) {
			alert('Error message: ' + msg + '\nURL: ' + url + '\nLine Number: ' + linenumber);
			return true;
		};

		window.onload = function() {

			// initialize all textareas
			document.getElementById("doc").value = readtxtfile("docs/doc.txt");
			for (var i = 2; i < GLOBALS.doc_count + 1; i++) {
				var new_doc = document.createElement("div");
				new_doc.innerText = "Doc" + i + "\n" + readtxtfile("docs/doc" + i + ".txt") + "\n\n";
				new_doc.id = "doc" + i;
				new_doc.style.background = "white";
				document.getElementById("other_docs").appendChild(new_doc);
				document.getElementById("other_docs").innerHTML += "<br>";
			}

		};
	</script>
</head>

<body id="mouse">

	<div class="topnav" id="myTopnav">
		<a href="login.php" class="active" style="padding: 14px;">Log In</a>
		</a>
		<a href="index.php"> <img src="images/pencil.png" width="60" height="60" style="border-radius: 50%; margin: 9px; margin-left: 20px;"></a>
	</div>

	<div class="generateButton1">
		<button id="close-image"><img src="images/translate.png" width="75" height="75"></button>
	</div>

	<br><br><br>

	<div class="generateButton">
		<button onclick="summarize()" id="close-image"><img src="images/rotate.png" width="75" height="75"></button>
	</div>

	<div class="userInput">
		<h1> <b>INSERT YOUR TEXT<b></h1>
		<textarea id="doc" rows="25" cols="80"></textarea>
	</div>

	

	<div class="summaryGenerated">
		<h1> <b>SUMMARY<b></h1>
		<h3> <b> KEYWORDS: </b> </h3>
		<h3>Compressed Text:<span id="countgenerated">0</span>/<span id="count">0</span></h3>

	

		<!-- veq let qellon qaty -->
		<div id="other_docs" style="display: none;"></div>
		<!-- veq let qellon qaty -->

		<!-- butoni per me modifiku perqindjen -->
		<button id="close-image" style="margin-left: 440px;" onclick="ShowAndHide()"><img src="images/discount.png" width="50" height="50"></button>
		
		<!-- butoni per me modifiku perqindjen -->

		<!-- butoni per me kerku keywordsa  -->
		<button id="close-image" onclick="HideAndShow()" style="margin-left: 0px;"><img src="images/highlighter.png" width="50" height="50"></button>

		<br>
		
		<input id="maxSentenceCount" type="range" min="1" max="100" value="50"style="width:50%; display: none; margin-left: 20%; color: yellow;">
	
		 



		<form style="display: none;margin-left: 30px;" id="keywordSection">
			<p style=" color: #808080;">Type the words:
				<input type="text" name="keywords" id ="txt1" size="20" style="border-radius: 10px; border-color:grey;border-top: none; border-left: none; border-right: none;"><input type="button" name="submit" onclick="findKeywords()" value="Go" style="width: 50px; height: 20px; border-radius: 30px; border-color: transparent; margin-left: 10px;">	</p>
				<br> <br>

				
		</form>
		<!-- butoni per me kerku keywordsa  -->

		<br>
		<textarea id="summary" rows="25" cols="80" readonly></textarea>
	</div>
	
	<!-- veq let qellon qaty -->
	<div id="organized_terms" style="background: white;"></div>
	<!-- veq let qellon qaty -->

	<footer style="text-align: center;  margin-top: 300px;color:#808080;border-top: 1px solid black; border-color: lightgrey; font-size: 14px; font-weight: normal; ">
		<p id="footer">
			© All rights reserved. January, 2021
		</p>
	</footer>

	<script type="text/javascript" src="js/buttonManipulations.js"> </script>
	<script src="findKeywords.js"></script>
	<script src="js/main.js"></script>
</body>

</html>