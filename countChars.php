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

