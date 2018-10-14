function name_fun()
{
	 var elem = document.getElementById('name');
	 var msg = document.getElementById('name_msg');

      if(elem)
      {    
		  if(elem.value.length == 0)
		  {
			elem.style.borderColor = '#FF1B00';
			$('#name').css('-webkit-filter', 'drop-shadow(1px 1px 1px #FF1B00)');
			$('#name').css('filter', 'drop-shadow(1px 1px 1px #E40000)');
			$('#name').css('border-color', '#FFFFFF');
			$('#submit').css('display', 'none'); 
			$('#submit').css('opacity', '0.65'); 
			$('#submit').css('cursor', 'not-allowed');
			msg.innerHTML = "Enter Name";
			return false;
		  }
		  else if(elem.value.length != 0 && elem.value.search(/^[a-zA-Z]*$/) == 0)
		  {
			elem.style.borderColor = '#03A700';
			$('#name').css('-webkit-filter', 'drop-shadow(1px 1px 1px #03A700)');
			$('#name').css('filter', 'drop-shadow(1px 1px 1px #03A700)');
			$('#name').css('border-color', '#FFFFFF');
			$('#submit').css('display', ''); 
			$('#submit').css('opacity', '0.9'); 
			$('#submit').css('cursor', '');
			return false;
		  }
		  else
		  {
			elem.style.borderColor = '#FF1B00';
			$('#name').css('-webkit-filter', 'drop-shadow(1px 1px 1px #FF1B00)');
			$('#name').css('filter', 'drop-shadow(1px 1px 1px #E40000)');
			$('#name').css('border-color', '#FFFFFF');
			$('#submit').css('display', 'none'); 
			$('#submit').css('opacity', '0.65'); 
			$('#submit').css('cursor', 'not-allowed'); 
			msg.innerHTML = "Enter Valid Name";
			return false;
		  }
      }
}

function fname_fun()
{
	 var elem = document.getElementById('fname');
	 var msg = document.getElementById('fname_msg');


      if(elem)
      {    
		  if(elem.value.length == 0)
		  {
			elem.style.borderColor = '#FF1B00';
			$('#fname').css('-webkit-filter', 'drop-shadow(1px 1px 1px #FF1B00)');
			$('#fname').css('filter', 'drop-shadow(1px 1px 1px #E40000)');
			$('#fname').css('border-color', '#FFFFFF');
			$('#submit').css('display', 'none'); 
			$('#submit').css('opacity', '0.65'); 
			$('#submit').css('cursor', 'not-allowed');
			msg.innerHTML = "Enter First Name";
			return false;
		  }
		  else if(elem.value.length != 0 && elem.value.search(/^[a-zA-Z]*$/) == 0)
		  {
			elem.style.borderColor = '#03A700';
			$('#fname').css('-webkit-filter', 'drop-shadow(1px 1px 1px #03A700)');
			$('#fname').css('filter', 'drop-shadow(1px 1px 1px #03A700)');
			$('#fname').css('border-color', '#FFFFFF');
			$('#submit').css('display', ''); 
			$('#submit').css('opacity', '0.9'); 
			$('#submit').css('cursor', '');
			return false;
		  }
		  else
		  {
			elem.style.borderColor = '#FF1B00';
			$('#fname').css('-webkit-filter', 'drop-shadow(1px 1px 1px #FF1B00)');
			$('#fname').css('filter', 'drop-shadow(1px 1px 1px #E40000)');
			$('#fname').css('border-color', '#FFFFFF');
			$('#submit').css('display', 'none'); 
			$('#submit').css('opacity', '0.65'); 
			$('#submit').css('cursor', 'not-allowed');
			msg.innerHTML = "Enter Valid First Name"; 
			return false;
		  }
      }
}


function mname_fun()
{
	 var elem = document.getElementById('mname');
	 var msg = document.getElementById('mname_msg');

      if(elem)
      {    
		  if(elem.value.length == 0)
		  {
			elem.style.borderColor = '#FF1B00';
			$('#mname').css('-webkit-filter', 'drop-shadow(1px 1px 1px #FF1B00)');
			$('#mname').css('filter', 'drop-shadow(1px 1px 1px #E40000)');
			$('#mname').css('border-color', '#FFFFFF');
			$('#submit').css('display', 'none'); 
			$('#submit').css('opacity', '0.65'); 
			$('#submit').css('cursor', 'not-allowed');
			msg.innerHTML = "Enter Middle Name";
			return false;
		  }
		  else if(elem.value.length != 0 && elem.value.search(/^[a-zA-Z]*$/) == 0)
		  {
			elem.style.borderColor = '#03A700';
			$('#mname').css('-webkit-filter', 'drop-shadow(1px 1px 1px #03A700)');
			$('#mname').css('filter', 'drop-shadow(1px 1px 1px #03A700)');
			$('#mname').css('border-color', '#FFFFFF');
			$('#submit').css('display', ''); 
			$('#submit').css('opacity', '0.9'); 
			$('#submit').css('cursor', '');
			return false;
		  }
		  else
		  {
			elem.style.borderColor = '#FF1B00';
			$('#mname').css('-webkit-filter', 'drop-shadow(1px 1px 1px #FF1B00)');
			$('#mname').css('filter', 'drop-shadow(1px 1px 1px #E40000)');
			$('#mname').css('border-color', '#FFFFFF');
			$('#submit').css('display', 'none'); 
			$('#submit').css('opacity', '0.65'); 
			$('#submit').css('cursor', 'not-allowed');
			msg.innerHTML = "Enter Valid Middle Name"; 
			return false;
		  }
      }
}

function lname_fun()
{
	 var elem = document.getElementById('lname');
	 var msg = document.getElementById('lname_msg');

      if(elem)
      {    
		  if(elem.value.length == 0)
		  {
			elem.style.borderColor = '#FF1B00';
			$('#lname').css('-webkit-filter', 'drop-shadow(1px 1px 1px #FF1B00)');
			$('#lname').css('filter', 'drop-shadow(1px 1px 1px #E40000)');
			$('#lname').css('border-color', '#FFFFFF');
			$('#submit').css('display', 'none'); 
			$('#submit').css('opacity', '0.65'); 
			$('#submit').css('cursor', 'not-allowed');
			msg.innerHTML = "Enter Last Name";
			return false;
		  }
		  else if(elem.value.length != 0 && elem.value.search(/^[a-zA-Z]*$/) == 0)
		  {
			elem.style.borderColor = '#03A700';
			$('#lname').css('-webkit-filter', 'drop-shadow(1px 1px 1px #03A700)');
			$('#lname').css('filter', 'drop-shadow(1px 1px 1px #03A700)');
			$('#lname').css('border-color', '#FFFFFF');
			$('#submit').css('display', ''); 
			$('#submit').css('opacity', '0.9'); 
			$('#submit').css('cursor', '');
			return false;
		  }
		  else
		  {
			elem.style.borderColor = '#FF1B00';
			$('#lname').css('-webkit-filter', 'drop-shadow(1px 1px 1px #FF1B00)');
			$('#lname').css('filter', 'drop-shadow(1px 1px 1px #E40000)');
			$('#lname').css('border-color', '#FFFFFF');
			$('#submit').css('display', 'none'); 
			$('#submit').css('opacity', '0.65'); 
			$('#submit').css('cursor', 'not-allowed');
			msg.innerHTML = "Enter Valid Last Name"; 
			return false;
		  }
      }
}


function uname_fun()
{
	 var elem = document.getElementById('uname');
	 var msg = document.getElementById('uname_msg');

    if(elem)
      {    
		  if(elem.value.length == 0)
		  {
			elem.style.borderColor = '#FF1B00';
			$('#uname').css('-webkit-filter', 'drop-shadow(1px 1px 1px #FF1B00)');
			$('#uname').css('filter', 'drop-shadow(1px 1px 1px #E40000)');
			$('#uname').css('border-color', '#FFFFFF');
			$('#submit').css('display', 'none'); 
			$('#submit').css('opacity', '0.65'); 
			$('#submit').css('cursor', 'not-allowed');
			msg.innerHTML = "Enter Username";
			return false;
		  }
		  else if(elem.value.length != 0 && elem.value.search(/\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*/) == 0)
		  {
			elem.style.borderColor = '#03A700';
			$('#uname').css('-webkit-filter', 'drop-shadow(1px 1px 1px #03A700)');
			$('#uname').css('filter', 'drop-shadow(1px 1px 1px #03A700)');
			$('#uname').css('border-color', '#FFFFFF');
			$('#submit').css('display', ''); 
			$('#submit').css('opacity', '0.9'); 
			$('#submit').css('cursor', '');
			return false;
		  }
		  else
		  {
			elem.style.borderColor = '#FF1B00';
			$('#uname').css('-webkit-filter', 'drop-shadow(1px 1px 1px #FF1B00)');
			$('#uname').css('filter', 'drop-shadow(1px 1px 1px #E40000)');
			$('#uname').css('border-color', '#FFFFFF');
			$('#submit').css('display', 'none'); 
			$('#submit').css('opacity', '0.65'); 
			$('#submit').css('cursor', 'not-allowed');
			msg.innerHTML = "Enter Valid Username"; 
			return false;
		  }
      }
}


function email_fun()
{
	 var elem = document.getElementById('email');
	 var msg = document.getElementById('email_msg');

    if(elem)
      {    
		  if(elem.value.length == 0)
		  {
			elem.style.borderColor = '#FF1B00';
			$('#email').css('-webkit-filter', 'drop-shadow(1px 1px 1px #FF1B00)');
			$('#email').css('filter', 'drop-shadow(1px 1px 1px #E40000)');
			$('#email').css('border-color', '#FFFFFF');
			$('#submit').css('display', 'none'); 
			$('#submit').css('opacity', '0.65'); 
			$('#submit').css('cursor', 'not-allowed');
			msg.innerHTML = "Enter E-Mail";
			return false;
		  }
		  else if(elem.value.length != 0 && elem.value.search(/\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*/) == 0)
		  {
			elem.style.borderColor = '#03A700';
			$('#email').css('-webkit-filter', 'drop-shadow(1px 1px 1px #03A700)');
			$('#email').css('filter', 'drop-shadow(1px 1px 1px #03A700)');
			$('#email').css('border-color', '#FFFFFF');
			$('#submit').css('display', ''); 
			$('#submit').css('opacity', '0.9'); 
			$('#submit').css('cursor', '');
			return false;
		  }
		  else
		  {
			elem.style.borderColor = '#FF1B00';
			$('#email').css('-webkit-filter', 'drop-shadow(1px 1px 1px #FF1B00)');
			$('#email').css('filter', 'drop-shadow(1px 1px 1px #E40000)');
			$('#email').css('border-color', '#FFFFFF');
			$('#submit').css('display', 'none'); 
			$('#submit').css('opacity', '0.65'); 
			$('#submit').css('cursor', 'not-allowed');
			msg.innerHTML = "Enter Valid E-Mail"; 
			return false;
		  }
      }
}


function confirmpass_fun()
{
	 var elem = document.getElementById('password');
	 var elem1 = document.getElementById('con_password');
	 var msg = document.getElementById('password_msg');

    if(elem1)
      {    
		  if(elem1.value.length == 0)
		  {
			elem1.style.borderColor = '#FF1B00';
			$('#con_password').css('-webkit-filter', 'drop-shadow(1px 1px 1px #FF1B00)');
			$('#con_password').css('filter', 'drop-shadow(1px 1px 1px #E40000)');
			$('#con_password').css('border-color', '#FFFFFF');
			$('#submit').css('display', 'none'); 
			$('#submit').css('display', 'none'); 
			$('#submit').css('opacity', '0.65'); 
			$('#submit').css('cursor', 'not-allowed');
			msg.innerHTML = "Enter Matching Password";
			return false;
		  }
		  else if(elem1.value.length != 0 && elem1.value.length == elem.value.length)
		  {
			elem1.style.borderColor = '#03A700';
			$('#con_password').css('-webkit-filter', 'drop-shadow(1px 1px 1px #03A700)');
			$('#con_password').css('filter', 'drop-shadow(1px 1px 1px #03A700)');
			$('#con_password').css('border-color', '#FFFFFF');
			$('#submit').css('display', ''); 
			$('#submit').css('opacity', '0.9'); 
			$('#submit').css('cursor', '');
			
			return false;
		  }
		  else
		  {
			elem1.style.borderColor = '#FF1B00';
			$('#con_password').css('-webkit-filter', 'drop-shadow(1px 1px 1px #FF1B00)');
			$('#con_password').css('filter', 'drop-shadow(1px 1px 1px #E40000)');
			$('#con_password').css('border-color', '#FFFFFF');
			$('#submit').css('display', 'none'); 
			$('#submit').css('opacity', '0.65'); 
			$('#submit').css('cursor', 'not-allowed'); 
			msg.innerHTML = "Enter Matching Password";
			return false;
		  }
      }
}


//company info -address,faq -answer,feedback -message,gallary -description,package -description,service -description
function address_fun()
{
   var elem = document.getElementById('address');
   var msg = document.getElementById('address_msg');

    if(elem)
      {    
      if(elem.value.length == 0)
      {
      elem.style.borderColor = '#FF1B00';
      $('#address').css('-webkit-filter', 'drop-shadow(1px 1px 1px #FF1B00)');
      $('#address').css('filter', 'drop-shadow(1px 1px 1px #E40000)');
      $('#address').css('border-color', '#FFFFFF');
      $('#submit').css('display', 'none'); 
      $('#submit').css('opacity', '0.65'); 
      $('#submit').css('cursor', 'not-allowed');
      msg.innerHTML = "Enter Address";
      return false;
      }
      else if(elem.value.length != 0 && elem.value.search(/^[a-zA-Z0-9]/) == 0)
      {
      elem.style.borderColor = '#03A700';
      $('#address').css('-webkit-filter', 'drop-shadow(1px 1px 1px #03A700)');
      $('#address').css('filter', 'drop-shadow(1px 1px 1px #03A700)');
      $('#address').css('border-color', '#FFFFFF');
      $('#submit').css('display', ''); 
      $('#submit').css('opacity', '0.9'); 
      $('#submit').css('cursor', '');
      return false;
      }
      else
      {
      elem.style.borderColor = '#FF1B00';
      $('#address').css('-webkit-filter', 'drop-shadow(1px 1px 1px #FF1B00)');
      $('#address').css('filter', 'drop-shadow(1px 1px 1px #E40000)');
      $('#address').css('border-color', '#FFFFFF');
      $('#submit').css('display', 'none'); 
      $('#submit').css('opacity', '0.65'); 
      $('#submit').css('cursor', 'not-allowed'); 
      msg.innerHTML = "Enter Valid Address";
      return false;
      }
      }
}


function placebirth_fun()
{
	 var elem = document.getElementById('place_of_birth');
	 var msg = document.getElementById('placebirth_msg');

      if(elem)
      {    
		  if(elem.value.length == 0)
		  {
			elem.style.borderColor = '#FF1B00';
			$('#place_of_birth').css('-webkit-filter', 'drop-shadow(1px 1px 1px #FF1B00)');
			$('#place_of_birth').css('filter', 'drop-shadow(1px 1px 1px #E40000)');
			$('#place_of_birth').css('border-color', '#FFFFFF');
			$('#submit').css('display', 'none'); 
			$('#submit').css('opacity', '0.65'); 
			$('#submit').css('cursor', 'not-allowed');
			msg.innerHTML = "Enter Place_Of_Birth";
			return false;
		  }
		  else if(elem.value.length != 0 && elem.value.search(/^[a-zA-Z]*$/) == 0)
		  {
			elem.style.borderColor = '#03A700';
			$('#place_of_birth').css('-webkit-filter', 'drop-shadow(1px 1px 1px #03A700)');
			$('#place_of_birth').css('filter', 'drop-shadow(1px 1px 1px #03A700)');
			$('#place_of_birth').css('border-color', '#FFFFFF');
			$('#submit').css('display', ''); 
			$('#submit').css('opacity', '0.9'); 
			$('#submit').css('cursor', '');
			return false;
		  }
		  else
		  {
			elem.style.borderColor = '#FF1B00';
			$('#place_of_birth').css('-webkit-filter', 'drop-shadow(1px 1px 1px #FF1B00)');
			$('#place_of_birth').css('filter', 'drop-shadow(1px 1px 1px #E40000)');
			$('#place_of_birth').css('border-color', '#FFFFFF');
			$('#submit').css('display', 'none'); 
			$('#submit').css('opacity', '0.65'); 
			$('#submit').css('cursor', 'not-allowed'); 
			msg.innerHTML = "Enter Valid Place_Of_Birth";
			return false;
		  }
      }
}

function age_fun()
{
	 var elem = document.getElementById('age');
	 var msg = document.getElementById('age_msg');
	 var age = 18;

      if(elem)
      {    
		  if(elem.value.length == 0)
		  {
			elem.style.borderColor = '#FF1B00';
			$('#age').css('-webkit-filter', 'drop-shadow(1px 1px 1px #FF1B00)');
			$('#age').css('filter', 'drop-shadow(1px 1px 1px #E40000)');
			$('#age').css('border-color', '#FFFFFF');
			$('#submit').css('display', 'none'); 
			$('#submit').css('opacity', '0.65'); 
			$('#submit').css('cursor', 'not-allowed');
			msg.innerHTML = "Enter Age";
			return false;
		  }
		  else if(elem.value.length != 0 && elem.value.search(/^[0-9]*$/) == 0 && elem.value >= age)
		  {
			elem.style.borderColor = '#03A700';
			$('#age').css('-webkit-filter', 'drop-shadow(1px 1px 1px #03A700)');
			$('#age').css('filter', 'drop-shadow(1px 1px 1px #03A700)');
			$('#age').css('border-color', '#FFFFFF');
			$('#submit').css('display', ''); 
			$('#submit').css('opacity', '0.9'); 
			$('#submit').css('cursor', '');
			return false;
		  }
		  else
		  {
			elem.style.borderColor = '#FF1B00';
			$('#age').css('-webkit-filter', 'drop-shadow(1px 1px 1px #FF1B00)');
			$('#age').css('filter', 'drop-shadow(1px 1px 1px #E40000)');
			$('#age').css('border-color', '#FFFFFF');
			$('#submit').css('display', 'none'); 
			$('#submit').css('opacity', '0.65'); 
			$('#submit').css('cursor', 'not-allowed');
			msg.innerHTML = "Enter Valid Age"; 
			return false;
		  }
      }
}


function mobile_fun()
{
	 var elem = document.getElementById('mobile');
	 var msg = document.getElementById('mobile_msg');

    if(elem)
      {    
		  if(elem.value.length == 0)
		  {
			elem.style.borderColor = '#FF1B00';
			$('#mobile').css('-webkit-filter', 'drop-shadow(1px 1px 1px #FF1B00)');
			$('#mobile').css('filter', 'drop-shadow(1px 1px 1px #E40000)');
			$('#mobile').css('border-color', '#FFFFFF');
			$('#submit').css('display', 'none'); 
			$('#submit').css('opacity', '0.65'); 
			$('#submit').css('cursor', 'not-allowed');
			msg.innerHTML = "Enter Mobile No";
			return false;
		  }
		  else if(elem.value.length != 0 && elem.value.search(/^[0-9]*$/) == 0 && elem.value.length == 10)
		  {
			elem.style.borderColor = '#03A700';
			$('#mobile').css('-webkit-filter', 'drop-shadow(1px 1px 1px #03A700)');
			$('#mobile').css('filter', 'drop-shadow(1px 1px 1px #03A700)');
			$('#mobile').css('border-color', '#FFFFFF');
			$('#submit').css('display', ''); 
			$('#submit').css('opacity', '0.9'); 
			$('#submit').css('cursor', '');
			return false;
		  }
		  else
		  {
			elem.style.borderColor = '#FF1B00';
			$('#mobile').css('-webkit-filter', 'drop-shadow(1px 1px 1px #FF1B00)');
			$('#mobile').css('filter', 'drop-shadow(1px 1px 1px #E40000)');
			$('#mobile').css('border-color', '#FFFFFF');
			$('#submit').css('display', 'none'); 
			$('#submit').css('opacity', '0.65'); 
			$('#submit').css('cursor', 'not-allowed');
			msg.innerHTML = "Contact Must be 10 Digits";
			return false;
		  }
      }
}



function pincode_fun()
{
	 var elem = document.getElementById('pincode');
	 var msg = document.getElementById('phone_msg');

    if(elem)
      {    
		  if(elem.value.length == 0)
		  {
			elem.style.borderColor = '#FF1B00';
			$('#pincode').css('-webkit-filter', 'drop-shadow(1px 1px 1px #FF1B00)');
			$('#pincode').css('filter', 'drop-shadow(1px 1px 1px #E40000)');
			$('#pincode').css('border-color', '#FFFFFF');
			$('#submit').css('display', 'none'); 
			$('#submit').css('opacity', '0.65'); 
			$('#submit').css('cursor', 'not-allowed');
			msg.innerHTML = "Enter Phone No";
			return false;
		  }
		  else if(elem.value.length != 0 && elem.value.search(/^[0-9]*$/) == 0 && elem.value.length == 6)
		  {
			elem.style.borderColor = '#03A700';
			$('#pincode').css('-webkit-filter', 'drop-shadow(1px 1px 1px #03A700)');
			$('#pincode').css('filter', 'drop-shadow(1px 1px 1px #03A700)');
			$('#pincode').css('border-color', '#FFFFFF');
			$('#submit').css('display', ''); 
			$('#submit').css('opacity', '0.9'); 
			$('#submit').css('cursor', '');
			return false;
		  }
		  else
		  {
			elem.style.borderColor = '#FF1B00';
			$('#pincode').css('-webkit-filter', 'drop-shadow(1px 1px 1px #FF1B00)');
			$('#pincode').css('filter', 'drop-shadow(1px 1px 1px #E40000)');
			$('#pincode').css('border-color', '#FFFFFF');
			$('#submit').css('display', 'none'); 
			$('#submit').css('opacity', '0.65'); 
			$('#submit').css('cursor', 'not-allowed');
			msg.innerHTML = "Contact Must be 10 Digits";
			return false;
		  }
      }
}


function education_fun()
{
	 var elem = document.getElementById('education');
	 var msg = document.getElementById('education_msg');

      if(elem)
      {    
		  if(elem.value.length == 0)
		  {
			elem.style.borderColor = '#FF1B00';
			$('#education').css('-webkit-filter', 'drop-shadow(1px 1px 1px #FF1B00)');
			$('#education').css('filter', 'drop-shadow(1px 1px 1px #E40000)');
			$('#education').css('border-color', '#FFFFFF');
			$('#submit').css('display', 'none'); 
			$('#submit').css('opacity', '0.65'); 
			$('#submit').css('cursor', 'not-allowed');
			msg.innerHTML = "Enter Education Details";
			return false;
		  }
		  else if(elem.value.length != 0 && elem.value.search(/^[a-zA-Z]*$/) == 0)
		  {
			elem.style.borderColor = '#03A700';
			$('#education').css('-webkit-filter', 'drop-shadow(1px 1px 1px #03A700)');
			$('#education').css('filter', 'drop-shadow(1px 1px 1px #03A700)');
			$('#education').css('border-color', '#FFFFFF');
			$('#submit').css('display', ''); 
			$('#submit').css('opacity', '0.9'); 
			$('#submit').css('cursor', '');
			return false;
		  }
		  else
		  {
			elem.style.borderColor = '#FF1B00';
			$('#education').css('-webkit-filter', 'drop-shadow(1px 1px 1px #FF1B00)');
			$('#education').css('filter', 'drop-shadow(1px 1px 1px #E40000)');
			$('#education').css('border-color', '#FFFFFF');
			$('#submit').css('display', 'none'); 
			$('#submit').css('opacity', '0.65'); 
			$('#submit').css('cursor', 'not-allowed'); 
			msg.innerHTML = "Enter Valid Education Detail";
			return false;
		  }
      }
}

function url_fun()
{
   var elem = document.getElementById('url');
   var msg = document.getElementById('url_msg');

    if(elem)
      {    
      if(elem.value.length == 0)
      {
      elem.style.borderColor = '#FF1B00';
      $('#url').css('-webkit-filter', 'drop-shadow(1px 1px 1px #FF1B00)');
      $('#url').css('filter', 'drop-shadow(1px 1px 1px #E40000)');
      $('#url').css('border-color', '#FFFFFF');
      $('#submit').css('display', 'none'); 
      $('#submit').css('opacity', '0.65'); 
      $('#submit').css('cursor', 'not-allowed');
      msg.innerHTML = "Enter Url";
      return false;
      }
      else if(elem.value.length != 0 && elem.value.search(/^[a-zA-Z0-9]/) == 0)
      {
      elem.style.borderColor = '#03A700';
      $('#url').css('-webkit-filter', 'drop-shadow(1px 1px 1px #03A700)');
      $('#url').css('filter', 'drop-shadow(1px 1px 1px #03A700)');
      $('#url').css('border-color', '#FFFFFF');
      $('#submit').css('display', ''); 
      $('#submit').css('opacity', '0.9'); 
      $('#submit').css('cursor', '');
      return false;
      }
      else
      {
      elem.style.borderColor = '#FF1B00';
      $('#url').css('-webkit-filter', 'drop-shadow(1px 1px 1px #FF1B00)');
      $('#url').css('filter', 'drop-shadow(1px 1px 1px #E40000)');
      $('#url').css('border-color', '#FFFFFF');
      $('#submit').css('display', 'none'); 
      $('#submit').css('opacity', '0.65'); 
      $('#submit').css('cursor', 'not-allowed');
      msg.innerHTML = "Enter Valid Url"; 
      return false;
      }
      }
}
function question_fun()
{
   var elem = document.getElementById('question');

    if(elem)
      {    
      if(elem.value.length == 0)
      {
      elem.style.borderColor = '#FF1B00';
      $('#question').css('-webkit-filter', 'drop-shadow(1px 1px 1px #FF1B00)');
      $('#question').css('filter', 'drop-shadow(1px 1px 1px #E40000)');
      $('#question').css('border-color', '#FFFFFF');
      $('#submit').css('display', 'none'); 
      $('#submit').css('opacity', '0.65'); 
      $('#submit').css('cursor', 'not-allowed');
      return false;
      }
      else if(elem.value.length != 0 && elem.value.search(/^[a-zA-Z0-9]/) == 0)
      {
      elem.style.borderColor = '#03A700';
      $('#question').css('-webkit-filter', 'drop-shadow(1px 1px 1px #03A700)');
      $('#question').css('filter', 'drop-shadow(1px 1px 1px #03A700)');
      $('#question').css('border-color', '#FFFFFF');
      $('#submit').css('display', ''); 
      $('#submit').css('opacity', '0.9'); 
      $('#submit').css('cursor', '');
      return false;
      }
      else
      {
      elem.style.borderColor = '#FF1B00';
      $('#question').css('-webkit-filter', 'drop-shadow(1px 1px 1px #FF1B00)');
      $('#question').css('filter', 'drop-shadow(1px 1px 1px #E40000)');
      $('#question').css('border-color', '#FFFFFF');
      $('#submit').css('display', 'none'); 
      $('#submit').css('opacity', '0.65'); 
      $('#submit').css('cursor', 'not-allowed'); 
      return false;
      }
      }
}
function subject_fun()
{
   var elem = document.getElementById('subject');

    if(elem)
      {    
      if(elem.value.length == 0)
      {
      elem.style.borderColor = '#FF1B00';
      $('#subject').css('-webkit-filter', 'drop-shadow(1px 1px 1px #FF1B00)');
      $('#subject').css('filter', 'drop-shadow(1px 1px 1px #E40000)');
      $('#subject').css('border-color', '#FFFFFF');
      $('#submit').css('display', 'none'); 
      $('#submit').css('opacity', '0.65'); 
      $('#submit').css('cursor', 'not-allowed');
      return false;
      }
      else if(elem.value.length != 0 && elem.value.search(/^[a-zA-Z0-9]/) == 0)
      {
      elem.style.borderColor = '#03A700';
      $('#subject').css('-webkit-filter', 'drop-shadow(1px 1px 1px #03A700)');
      $('#subject').css('filter', 'drop-shadow(1px 1px 1px #03A700)');
      $('#subject').css('border-color', '#FFFFFF');
      $('#submit').css('display', ''); 
      $('#submit').css('opacity', '0.9'); 
      $('#submit').css('cursor', '');
      return false;
      }
      else
      {
      elem.style.borderColor = '#FF1B00';
      $('#subject').css('-webkit-filter', 'drop-shadow(1px 1px 1px #FF1B00)');
      $('#subject').css('filter', 'drop-shadow(1px 1px 1px #E40000)');
      $('#subject').css('border-color', '#FFFFFF');
      $('#submit').css('display', 'none'); 
      $('#submit').css('opacity', '0.65'); 
      $('#submit').css('cursor', 'not-allowed'); 
      return false;
      }
      }
}

function title_fun()
{
	 var elem = document.getElementById('title');

    if(elem)
      {    
		  if(elem.value.length == 0)
		  {
			elem.style.borderColor = '#FF1B00';
			$('#title').css('-webkit-filter', 'drop-shadow(1px 1px 1px #FF1B00)');
			$('#title').css('filter', 'drop-shadow(1px 1px 1px #E40000)');
			$('#title').css('border-color', '#FFFFFF');
			$('#submit').css('display', 'none'); 
			$('#submit').css('opacity', '0.65'); 
			$('#submit').css('cursor', 'not-allowed');
			return false;
		  }
		  else if(elem.value.length != 0 && elem.value.search(/^[a-zA-Z]*$/) == 0)
		  {
			elem.style.borderColor = '#03A700';
			$('#title').css('-webkit-filter', 'drop-shadow(1px 1px 1px #03A700)');
			$('#title').css('filter', 'drop-shadow(1px 1px 1px #03A700)');
			$('#title').css('border-color', '#FFFFFF');
			$('#submit').css('display', ''); 
			$('#submit').css('opacity', '0.9'); 
			$('#submit').css('cursor', '');
			return false;
		  }
		  else
		  {
			elem.style.borderColor = '#FF1B00';
			$('#title').css('-webkit-filter', 'drop-shadow(1px 1px 1px #FF1B00)');
			$('#title').css('filter', 'drop-shadow(1px 1px 1px #E40000)');
			$('#title').css('border-color', '#FFFFFF');
			$('#submit').css('display', 'none'); 
			$('#submit').css('opacity', '0.65'); 
			$('#submit').css('cursor', 'not-allowed'); 
			return false;
		  }
      }
}

function time_fun()
{
	 var elem = document.getElementById('time');

    if(elem)
      {    
		  if(elem.value.length == 0)
		  {
			elem.style.borderColor = '#FF1B00';
			$('#time').css('-webkit-filter', 'drop-shadow(1px 1px 1px #FF1B00)');
			$('#time').css('filter', 'drop-shadow(1px 1px 1px #E40000)');
			$('#time').css('border-color', '#FFFFFF');
			$('#submit').css('display', 'none'); 
			$('#submit').css('opacity', '0.65'); 
			$('#submit').css('cursor', 'not-allowed');
			return false;
		  }
		  else if(elem.value.length != 0 && elem.value.search(/[0-9]/) == 0 )
		  {
			elem.style.borderColor = '#03A700';
			$('#time').css('-webkit-filter', 'drop-shadow(1px 1px 1px #03A700)');
			$('#time').css('filter', 'drop-shadow(1px 1px 1px #03A700)');
			$('#time').css('border-color', '#FFFFFF');
			$('#submit').css('display', ''); 
			$('#submit').css('opacity', '0.9'); 
			$('#submit').css('cursor', '');
			return false;
		  }
		  else
		  {
			elem.style.borderColor = '#FF1B00';
			$('#time').css('-webkit-filter', 'drop-shadow(1px 1px 1px #FF1B00)');
			$('#time').css('filter', 'drop-shadow(1px 1px 1px #E40000)');
			$('#time').css('border-color', '#FFFFFF');
			$('#submit').css('display', 'none'); 
			$('#submit').css('opacity', '0.65'); 
			$('#submit').css('cursor', 'not-allowed'); 
			return false;
		  }
      }
}