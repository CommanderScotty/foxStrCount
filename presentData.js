function processData() {
	let data = JSON.parse(document.getElementById('countOutput').innerHTML);
	let toDisplay = [];
	for (let i = 0; i < data.length; ++i) {
		if (data[i]) {
			toDisplay.push({x: String.fromCharCode(i), value: data[i]});
		}
	}
	return toDisplay;
}

function generateChart(toDisplay) {
	var chart = anychart.column(toDisplay);
	chart.tooltip().title("Character Counts");
	chart.labels(true);
	chart.container('chart');
	chart.draw();
}

function generateTable(toDisplay) {
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
}

function displayOutput() {
	let toDisplay = processData();
	generateChart(toDisplay);
	generateTable(toDisplay);
}
