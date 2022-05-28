/*
	Nama : Jensri Joice Samosir
	NIM	 : 11421055
*/

var selectedRow = null

function onSubmit() {
	if (validate()) {
		var data = membacaForm();
		if (selectedRow == null)
			insertDataBaru(data);
		else
			update(data);
		resetForm();
	}
}

function membacaForm() {
	var data = {};
	data["produk"] = document.getElementById("produk").value;
	data["desc"] = document.getElementById("desc").value;
	data["harga"] = document.getElementById("harga").value;
	data["pct"] = document.getElementById("pct").value;
	return data;
}

function insertDataBaru(data) {
	var table = document.getElementById("list").getElementsByTagName('tbody')[0];
	var newRow = table.insertRow(table.length);
	cell1 = newRow.insertCell(0);
	cell1.innerHTML = data.produk;
	cell2 = newRow.insertCell(1);
	cell2.innerHTML = data.desc;
	cell3 = newRow.insertCell(2);
	cell3.innerHTML = data.harga;
	cell4 = newRow.insertCell(3);
	cell4.innerHTML = data.pct;
	cell5 = newRow.insertCell(4);
	cell5.innerHTML = `<button onClick="onEdit(this)">Edit</button>
						<button onClick="onDelete(this)">Delete</button>`;
}

function resetForm() {
	document.getElementById("produk").value = "";
	document.getElementById("desc").value = "";
	document.getElementById("harga").value = "";
	document.getElementById("pct").value = "";
	selectedRow = null;
}

function onEdit(td) {
	selectedRow = td.parentElement.parentElement;
	document.getElementById("produk").value = selectedRow.cells[0].innerHTML;
	document.getElementById("desc").value = selectedRow.cells[1].innerHTML;
	document.getElementById("harga").value = selectedRow.cells[2].innerHTML;
	document.getElementById("pct").value = selectedRow.cells[3].innerHTML;
}
function update(data) {
	selectedRow.cells[0].innerHTML = data.produk;
	selectedRow.cells[1].innerHTML = data.desc;
	selectedRow.cells[2].innerHTML = data.harga;
	selectedRow.cells[3].innerHTML = data.pct;
}

function onDelete(td) {
	if (confirm('Apakah kamu yakin akan menghapus ini ?')) {
		row = td.parentElement.parentElement;
		document.getElementById("list").deleteRow(row.rowIndex);
		resetForm();
	}
}

function validate() {
	validasi = true;
	if (document.getElementById("produk").value == "") {
		validasi = false;
		document.getElementById("validasinamaproduk").classList.remove("hide");
	}else {
		validasi = true;
		if (!document.getElementById("validasinamaproduk").classList.contains("hide"))
		document.getElementById("Validasinamaproduk").classList.add("hide");
	}
	return validasi;
}