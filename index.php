<html>
<head>
	<title>Character Counter</title>
	<meta charset='UTF-8'/>
</head>
<body>
	<div id='titlBar'>
		<h1>Character Counter</h1>
	</div>

	<div id='inputArea'>
		<form method='post'>
			<input type='text' id='strInput' name='strInput' placeholder='literally anything you want'/>
			<input type='text' id='excInput' name='excInput' placeholder='one char plz'/>
			<input type='submit' name='subButton' id='sub'/>
		</form>
		<?php
			function countChars($inString, $inExcept) {
				echo $inString;
				echo $inExcept;
			}

			if (isset($_POST["subButton"])) {
				$inString = $_POST['strInput'];
				$inExcept = $_POST['excInput'];
				countChars($inString, $inExcept);
			}
		?>

	</div>

	<div id='outputArea'>
		<h2>analysis</h2>
	</div>

</body>
</html>
