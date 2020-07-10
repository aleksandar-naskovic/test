const form = document.getElementById('form');
const phone_numb = document.getElementById('phone_numb_text');
const errorElement = document.getElementById('error')


form.addEventListener('submit', (e) => {
  let messages = []
  //Phone number validation
  if(document.getElementById("phone_number_field").style.display==="block")
  {
    var phone_numb_text = document.getElementById("phone_numb_text").value;
    var phone_numb_check = /^\d{9}$/;
      if(!phone_numb_check.test(phone_numb_text)){
        messages.push('Phone number is invalid')
      }
  }
  else if (document.getElementById("email_field").style.display==="block")
  {
  //Email validation
    var email_text = document.getElementById("email_text").value;
    var email_check = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if(!email_check.test(email_text)){
      messages.push('Email is invalid')
    }
  }

  else {
    return false;
  }
    
  
  //Checkbox validation
  if (!document.getElementById('consent').checked) {
    messages.push('Please accept terms and conditions')
  } 
  

  if (messages.length > 0) {
    e.preventDefault()
    errorElement.innerText = messages.join(', ')
  }
}) 


  

//User can input only numbers
function validateNumber(event) {
    var key = window.event ? event.keyCode : event.which;
    if (event.keyCode === 8 || event.keyCode === 46) {
        return true;
    } else if ( key < 48 || key > 57 ) {
        return false;
    } else {
        return true;
    }
};

function showPhoneNumb(){
  document.getElementById("email_field").style.display="none";
  document.getElementById("phone_number_field").style.display="block";
  document.getElementById("submit_field").style.display="block";
  document.getElementById("form").style.display="block";
}

function showEmail(){
  document.getElementById("phone_number_field").style.display="none";
  document.getElementById("email_field").style.display="block";
  document.getElementById("submit_field").style.display="block";
  document.getElementById("form").style.display="block";
}