<?php include_once("countChars.php"); ?>
<html>
<head>
	<title>Character Counter</title>
	<meta charset='UTF-8'/>
	<script src="presentData.js"></script>
	<script src="https://cdn.anychart.com/releases/8.9.0/js/anychart-base.min.js" type="text/javascript"></script>
</head>
<body>
	<div id='titlBar'>
		<h1>Character Counter</h1>
	</div>

	<div id='inputArea'>
		<form method='post'>
			<label for='strInput'>Text</label>
			<input type='text' id='strInput' name='strInput' placeholder='literally anything you want'/>
			<br/>
			<label for='strInput'>Exclude</label>
			<input type='text' id='excInput' name='excInput' placeholder='one char plz'/>
			<input type='submit' name='subButton' id='sub' value='Submit'/>
		</form>
		<?php countChars($inString, $inExcept); ?>

	</div>

	<div id='outputArea'>
		<h2>Analysis</h2>
			<div id="chart">
			</div>
			<table id="table">
				<tr>
					<th>Character</th>
					<th>Count</th>
				</tr>
			</table>
			<script>displayOutput();</script>
			<div>
		</div>
	</div>
</body>
</html>
