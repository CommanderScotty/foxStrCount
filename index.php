<?php include_once("countChars.php"); ?>
<html>
<head>
	<title>Character Counter</title>
	<meta charset='UTF-8'/>
	<link rel="stylesheet" type="text/css" href="style.css"/>
	<script src="presentData.js"></script>
	<script src="https://cdn.anychart.com/releases/8.9.0/js/anychart-base.min.js" type="text/javascript"></script>
</head>
<body>
	<div id='titleBar'>
		<h1>Character Counter</h1>
	</div>

	<div id='inputArea'>
		<form method='post'>
			<input type='text' id='strInput' name='strInput' placeholder="Type the text you wish to analyze"/>
			<br/>
			<input type='text' id='excInput' name='excInput' placeholder="Type any characters you wish to exclude from analysis"/>
			<br/>
			<input type='submit' name='subButton' id='sub' value='Submit'/>
		</form>
		<?php countChars($inString, $inExcept); ?>
	</div>

	<div id='outputArea'>
		<h2>Analysis</h2>
			<div id="chart"></div>
			<div id="total"></div>
			<br/>
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
	<div id='credits'>
		<p id='ghlink'>See the sourcecode on <a href='https://github.com/commanderscotty/foxstrcount.git'>GitHub</a>!</p>
	</div>
</body>
</html>
