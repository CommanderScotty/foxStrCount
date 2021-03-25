<html>
<head>
	<title>Character Counter</title>
	<meta charset='UTF-8'/>
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
		<?php
			function countChars($inString, $inExcept) {
				$hashTab = array_fill(0, 128, 0);
				$inputArr = str_split($inString);
				$inputExc = str_split($inExcept);

				foreach($inputArr as $item) {
					++$hashTab[ord($item)];
				}
				foreach($inputExc as $item) {
					$hashTab[ord($item)] = 0;
				}

				$output = json_encode($hashTab);

				echo "<br>";
				echo "<p hidden id='countOutput'>$output</p>";

			}

			if (isset($_POST["subButton"])) {
				$inString = $_POST['strInput'];
				$inExcept = $_POST['excInput'];
				countChars($inString, $inExcept);
			}
		?>

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
			<script>
				let data = JSON.parse(document.getElementById('countOutput').innerHTML);
				let toDisplay = [];
				for (let i = 0; i < data.length; ++i) {
					if (data[i]) {
						toDisplay.push({x: String.fromCharCode(i), value: data[i]});
					}
				}
				var chart = anychart.column(toDisplay);
				chart.tooltip().title("Character Counts");
				chart.labels(true);
				chart.container('chart');
				chart.draw();

				let table = document.getElementById('table');
				for (let i = 0; i < toDisplay.length; ++i) {
					let tr = document.createElement('tr');
					let td0 = document.createElement('td');
					let td1 = document.createElement('td');
					
					td0.innerHTML = toDisplay[i].x;
					td1.innerHTML = toDisplay[i].value;
					tr.appendChild(td0);
					tr.appendChild(td1);
					table.appendChild(tr);
				}
			</script>
			<div>
		</div>
	</div>
</body>
</html>
