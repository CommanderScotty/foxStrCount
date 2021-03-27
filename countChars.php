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
		$totalCount = 0;
		foreach($hashTab as $item) {
			$totalCount += $item;
		}

		$output = json_encode($hashTab);
		$countJSON = json_encode($totalCount);

		echo "<br>";
		echo "<p hidden id='countOutput'>$output</p>";
		echo "<p hidden id='totalCount'>$countJSON</p>";
	}

	if (isset($_POST["subButton"])) {
		$inString = $_POST['strInput'];
		$inExcept = $_POST['excInput'];
		countChars($inString, $inExcept);
	}
?>

