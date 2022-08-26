// flight search 

const flightfrom = document.getElementById("flightFrom")

flightfrom.addEventListener("keyup", () => {
	if(flightfrom.value.length == 3){
		
	const data = JSON.stringify({
	  "request_type": "GET_AIRPORT_NAME_AUTOCOMPLETE",
	  "subType": "CITY,AIRPORT",
	  "keyword": "MUC"
	});

	const xhr = new XMLHttpRequest();
	xhr.withCredentials = true;

	xhr.addEventListener("readystatechange", function () {
	  if (this.readyState === this.DONE) {
	    console.log(this.responseText);
	  }
	});

	xhr.open("GET", "api/flight");
	xhr.setRequestHeader("Content-Type", "application/json");

	xhr.send(data);


	}
})