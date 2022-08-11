function getDetails(){
    var input = document.querySelector('#pincode');
   // var indicator = document.querySelector('.ri');
    // var city = document.querySelector('#city');
    var codelength = /^\d{6}$/

    input.addEventListener('keyup', () => {
        if (input.value.match(codelength)) {
            $.ajax({
                type: "GET",
                url: "https://api.postalpincode.in/pincode/" + input.value,

                    
                success: (response) => {
                    $('#city').val(response[0].PostOffice[0].District );
                    $('#state').val(response[0].PostOffice[0].State );
                    $('#country').val(response[0].PostOffice[0].Country );
      
                  
                }
            });

        }

        else {
           
            input.innerHTML = "Type valid zipcode";
        }

    }); 
}

