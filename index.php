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
			<label for='strInput'>input</label>
			<input type='text' id='strInput' placeholder='literally anything you want'/>
			<label for='excInput'>exclude</label>
			<input type='text' id='excInput' placeholder='one char plz'/>
			<input type='submit' name='test' id='test' value='run'/>
		</form>
		<?php
			function foo() {
		   		echo "results";
		   	}

			if(array_key_exists('test',$_POST)) {
				foo();
		   	}
		?>
	</div>

	<div id='outputArea'>
		<h2>analysis</h2>
	</div>

</body>
</html>
