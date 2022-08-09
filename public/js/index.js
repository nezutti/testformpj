


const postcode = document.getElementById('postcode');
const address = document.getElementById('address');
const building_name = document.getElementById('building_name');
const opinion = document.getElementById('opinion');
const email = document.getElementById('email');


document.addEventListener('DOMContentLoaded', () => {
  'use strict'
  const email = document.getElementById('email');
  email.addEventListener('input', function () {
  const error = document.getElementById('error');
 
    if (!email.value.includes('@')) {
      error.style.display = "block";
      
    } else {
      error.style.display = "none";
    }
   

  
    
  }
  )
}


);

//1,まず'DOMContentLoaded'を指定　2,'const fullnameは１の中に定義//