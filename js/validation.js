
function fullnamecheck(){

	var full_name_output=document.getElementById('err_full_name');
	var full_name=document.register.full_name;
	var regex = /^[A-Za-z ]{1,50}$/;
	 if(full_name.value.length>0){
		full_name_output.innerHTML="";
	 	if(regex.test(full_name.value))
	 	{
			full_name_output.innerHTML="";
	 	}

	 	else{
			full_name_output.innerHTML="Enter Valid Name - Alphabets only with a maximum length of 50 charecters";
	 	}

	 }
	 	else{
			full_name_output.innerHTML="This cannot be blank";
	 	}

	 }


function emailcheck(){

	var email_output=document.getElementById('err_email');
	var email=document.register.email;
	var regex = /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$/;
	if(email.value.length>0){
		email_output.innerHTML="";
		if(regex.test(email.value))
		{
			email_output.innerHTML="";
		}

		else{
			email_output.innerHTML="Enter Valid Email - All lowercase & Alphanumeric - something@something.domain";
		}

	}
		else{
			email_output.innerHTML="This cannot be blank";
		}


	}


function passwordcheck(){

	var password_output=document.getElementById('err_password');
	var password=document.register.password;
	var regex = /^.{8,10}$/;
		if(password.value.length>0){
			password_output.innerHTML="";
			if(regex.test(password.value))
			{
				password_output.innerHTML="";
			}

			else{
				password_output.innerHTML="Must contain at least 8 to at most 10 charecters (including special charecters)";
			}

		}
			else{
				password_output.innerHTML="This cannot be blank";
			}


		}

function repasswordcheck(){

	var repassword_output=document.getElementById('err_re_password');
	var repassword=document.register.re_password;
	var password=document.register.password;
	if((repassword.value.length==password.value.length)&&(password.value.length>0)){
		repassword_output.innerHTML="Password Macthed";
	}
	else
	{
		repassword_output.innerHTML="Password Not Macthed";
	}
		
	}


function addresscheck(){

	var address_output=document.getElementById('err_address');
	var address=document.register.address;
		if(address.value.length>0){
			address_output.innerHTML="";
			if(address.value.length>0 && address.value.length<=250)
			{
				address_output.innerHTML="";
			}

			else{
				address_output.innerHTML="Enter a Valid Address containing at most 250 charecters";
			}

		}
			else{
				address_output.innerHTML="This cannot be blank";
			}

		}


function loginEmailcheck(){

	var email_output=document.getElementById('err_login_email');
	var email=document.login.email;
	var regex = /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$/;
	if(email.value.length>0){
		email_output.innerHTML="";
		if(regex.test(email.value))
		{
			email_output.innerHTML="";
		}

		else{
			email_output.innerHTML="Enter Valid Email - All lowercase & Alphanumeric - something@something.domain";
		}

	}
		else{
			email_output.innerHTML="This cannot be blank";
		}


	}
	
	
function loginPasswordcheck(){

	var password_output=document.getElementById('err_login_password');
	var password=document.login.password;
	var regex = /^.{8,10}$/;
		if(password.value.length>0){
			password_output.innerHTML="";
			if(regex.test(password.value))
			{
				password_output.innerHTML="";
			}

			else{
				password_output.innerHTML="Must contain at least 8 to at most 10 charecters (including special charecters)";
			}

		}
			else{
				password_output.innerHTML="This cannot be blank";
			}


		}


function contactNamecheck(){

	var contact_name_output=document.getElementById('err_contact_name');
	var contact_name=document.contact.name;
	var regex = /^[A-Za-z ]{1,50}$/;
		if(contact_name.value.length>0){
		contact_name_output.innerHTML="";
			if(regex.test(contact_name.value))
			{
			contact_name_output.innerHTML="";
			}

			else{
			contact_name_output.innerHTML="Enter Valid Name - Alphabets only with a maximum length of 50 charecters";
			}

		}
			else{
			contact_name_output.innerHTML="This cannot be blank";
			}

		}

	function contactEmailcheck(){

		var contact_email_output=document.getElementById('err_contact_email');
		var contact_email=document.contact.contact_email;
		var regex = /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$/;
		if(contact_email.value.length>0){
			contact_email_output.innerHTML="";
			if(regex.test(contact_email.value))
			{
				contact_email_output.innerHTML="";
			}
	
			else{
				contact_email_output.innerHTML="Enter Valid Email - All lowercase & Alphanumeric - something@something.domain";
			}
	
		}
			else{
				contact_email_output.innerHTML="This cannot be blank";
			}
	
	
		}


function contactSubjectcheck(){

	var contact_subject_output=document.getElementById('err_subject');
	var contact_subject=document.contact.subject;
		if(contact_subject.value.length>0){
			contact_subject_output.innerHTML="";
			if(contact_subject.value.length>0 && contact_subject.value.length<=100)
			{
				contact_subject_output.innerHTML="";
			}

			else{
				contact_subject_output.innerHTML="Enter a Valid Subject containing at most 100 charecters";
			}

		}
			else{
				contact_subject_output.innerHTML="This cannot be blank";
			}

		}

				
function contactMessagecheck(){

	var contact_message_output=document.getElementById('err_message');
	var contact_message=document.contact.message;
		if(contact_message.value.length>0){
			contact_message_output.innerHTML="";
			if(contact_message.value.length>0 && contact_message.value.length<=500)
			{
				contact_message_output.innerHTML="";
			}

			else{
				contact_message_output.innerHTML="Enter a Valid Message containing at most 500 charecters";
			}

		}
			else{
				contact_message_output.innerHTML="This cannot be blank";
			}

		}