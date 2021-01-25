<!DOCTYPE html>
<html>

<head>
	<title>
		Online Automatic Text Summarization
	</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- css links -->
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<link rel="icon" type="image//png" href="images/pencil.png">
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<!-- css links -->



	<!--js scripts  -->
	<script src="../Summarizer/Content/js/GLOBALS.js"></script>
	<script src="../Summarizer/Content/js/readtxtfile.js"></script>
	<script src="../Summarizer/Content/js/replacements.js"></script>
	<script src="../Summarizer/Content/js/reveal_docs.js"></script>
	<script src="js/spin.js"></script>
	<script src="../Summarizer/TextSummarization/js/summarize.js"></script>

	<script>
		window.onerror = function(msg, url, linenumber) {
			alert('Error message: ' + msg + '\nURL: ' + url + '\nLine Number: ' + linenumber);
			return true;
		};
	</script>
	<!--js scripts  -->

	<!--signup css  -->
	<style type="text/css">
		.signUp100-form-btn:hover {
			background-color: blue;
		}
	</style>
	<!--signup css  -->

</head>



<body id="mouse">

	<?php
	require_once "./nav.php";
	?>