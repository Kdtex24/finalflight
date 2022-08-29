const baseurl =  "http://localhost:3000/"

async function flightSearch(payload){
        
        const options = {
            method: 'POST',
            headers: {'Content-Type': 'application/json'},
            body: payload
          };
          
          fetch(`${baseurl}flight`, options)
            .then(response => response.json())
            .then( (response) => { 
                return response
            })
            .catch(err => console.error(err));

    }


const hotelSearch = async(payload) =>{

}

// alert(baseurl)
