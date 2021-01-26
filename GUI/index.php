<?php
require_once "./header.php";


$error = false;
if (isset($_REQUEST['action'])) {
	switch ($_REQUEST['action']) {
		case 'history':
			require_once "../UserData/UserDetails/History.php";
			$valid = History::create($_POST);
			if (!$valid) {
				$error = 'History failed.';
			}
			break;
	}
}
?>
<script>
	window.onload = function() {

		// initialize all textareas
		document.getElementById("doc").value = readtxtfile("../docs/doc.txt");
		for (var i = 2; i < GLOBALS.doc_count + 1; i++) {
			var new_doc = document.createElement("div");
			new_doc.innerText = "Doc" + i + "\n" + readtxtfile("../docs/doc" + i + ".txt") + "\n\n";
			new_doc.id = "doc" + i;
			new_doc.style.background = "white";
			document.getElementById("other_docs").appendChild(new_doc);
			document.getElementById("other_docs").innerHTML += "<br>";
		}

	};
</script>


<div id="main">


	<br><br>



	<div class="generateButton" id="main">
		<button onclick="summarize()" id="close-image"><img src="images/rotate.png" width="100" height="100" type="submit" name="submit"></button>
	</div>

	<div class="userInput">
		<h1> <b>INSERT YOUR TEXT<b></h1>
		<textarea id="doc" rows="25" cols="80"></textarea>
	</div>




	<div class="summaryGenerated">
		<h1> <b>SUMMARY<b></h1>
		<h3> <b> KEYWORDS: </b> </h3><br>
		<textarea rows="2" cols="1" readonly id="iputi" onmouseover="Keywordss()" style="margin-left: 100px;"></textarea> <br>
		<h3>Compressed Text:<span id="countgenerated">0</span>/<span id="count">0</span></h3>



		<!-- veq let qellon qaty -->
		<div id="other_docs" style="display: none;"></div>
		<!-- veq let qellon qaty -->

		<!-- butoni per me modifiku perqindjen -->
		<button id="close-image" style="margin-left: 440px;" onclick="ShowAndHide()"><img src="images/discount.png" width="50" height="50"></button>

		<!-- butoni per me modifiku perqindjen -->

		<!-- butoni per me kerku keywordsa  -->
		<button id="close-image" onclick="HideAndShow()" style="margin-left: 0px;"><img src="images/highlighter.png" width="50" height="50"></button>

		<br><br>

		<input id="maxSentenceCount" type="range" min="1" max="100" value="50" style="width:50%; display: none; margin-left: 20%; color: yellow;">

		<br>
		<form style="display: none;margin-left: 30px;" id="keywordSection">
			<br>
			<p style=" color: #808080; margin-left: 84px;">Type the words:
				<input type="text" name="keywords" id="txt1" size="20" style="border:1px solid black; margin-left: 10px;"><button type="button" name="submit" onclick="findKeywords()" value="Go" style="width: 50px; height: 20px; border-radius: 30px; background-color: blue; text-align: center; margin-left: 20px;">Go</button>
			</p>
			<br> <br>


		</form>
		<!-- butoni per me kerku keywordsa  -->

		<br>
		<form method="POST" action="index.php?action=history" style="margin-left: 20px; margin-right: 50px;">

			<textarea name="history" id="summary" rows="18" cols="50" readonly></textarea>
			<br><br><br><br><br><br><br><br>


		<!--composition pattern - design paterni-->
			<?php if (Auth::isLoggedIn()) : ?>
				<button type="submit" name="submit" class="butonihistori" id="historyButton">Save to history</button>
			<?php else : ?>
				
			<?php endif; ?>
		<!--composition pattern - design paterni-->

		</form>

	</div>
	<br><br><br><br><br><br><br><br><br><br><br><br>
	<script type="text/javascript" src="js/buttonManipulations.js"> </script>

	<!-- veq let qellon qaty -->
	<div id="organized_terms" style="background: white;"></div>
	<!-- veq let qellon qaty -->

	<script src="../Summarizer/Content/js/countwords.js"></script>
	<script type="text/javascript" src="C:\Users\Arta\Desktop\xampp\htdocs\OATS1\Summarizer\TextSummarization\js\summarize.js"></script>

	<?php
	require_once "./footer.php";
	?>