function results(event) 
{
	event.preventDefault();

var formm = document.getElementById('myForm').style.display = "none";
var divv = document.getElementById('results').style.display = "block";

	var name = document.getElementById("name").value;
	var last_name = document.getElementById("lastname").value;
	var results = document.getElementById("results");
	results.innerText = "Dobrodošao: " + name + " " + last_name + "!";
}
