// flight search 

const flightfrom = document.getElementById("flightFrom")
const flightTo = document.getElementById("flightTo")
const flightFromOption = document.getElementById("flightFromOption")
const flightToOption = document.getElementById("flightToOption")


flightfrom.addEventListener("input", () => {
	if(flightfrom.value.length > 0){

	const data = JSON.stringify({
	  "request_type": "GET_AIRPORT_NAME_AUTOCOMPLETE",
	  "subType": "CITY,AIRPORT",
	  "keyword": flightfrom.value
	});

	const options = {
		method: 'POST',
		headers: {'Content-Type': 'application/json'},
		body: data
	  };
	  
	  fetch('http://localhost:3000/flight', options)
		.then(response => response.json())
		.then( (response) => {

			// console.log(flightFromOption);
		
			var len=flightToOption.options.length; 
			if(len > 0) {flightToOption.innerHTML = ''}

			response.forEach(function(k){
			
			// flightFromOption.innerHTML = `<option value="${k.name}">`

			newOption = document.createElement("option");
			newOption.value = k.name;  // assumes option string and value are the same
			newOption.text = k.name;  // assumes option string and value are the same
		
			try { 
				flightFromOption.add(newOption);  // this will fail in DOM browsers but is needed for IE
			}catch (e) {      
				flightFromOption.appendChild(newOption);      
			} 
	   
			})



			})
		.catch(err => console.error(err));


	}
})


//flight to autocomplete search
flightTo.addEventListener("input", () => {
	if(flightTo.value.length > 0){

	const data = JSON.stringify({
	  "request_type": "GET_AIRPORT_NAME_AUTOCOMPLETE",
	  "subType": "CITY,AIRPORT",
	  "keyword": flightTo.value
	});

	const options = {
		method: 'POST',
		headers: {'Content-Type': 'application/json'},
		body: data
	  };
	  
	  fetch('http://localhost:3000/flight', options)
		.then(response => response.json())
		.then( (response) => {

			// console.log(flightToOption);
			var len=flightToOption.options.length; 
			if(len > 0) {flightToOption.innerHTML = ''}

			response.forEach(function(k){
			
			// flightToOption.innerHTML = `<option value="${k.name}">`

			newList = document.createElement("option");
			newList.value = k.name;  // assumes option string and value are the same
			newList.text = k.name;  // assumes option string and value are the same
		
			try { 
				flightToOption.add(newList);  // this will fail in DOM browsers but is needed for IE
			}catch (e) {      
				flightToOption.appendChild(newList);      
			} 
	   
			})



			})
		.catch(err => console.error(err));


	}
})

//search flight details
