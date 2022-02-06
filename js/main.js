
// for login page

var login_id = document.getElementById('login_id');
var login_Error = document.getElementById('login_Error');


function login()
{
    if(login_id.value == ''){
        login_id.style.borderColor= ' #d22222';
        login_id.focus();
        login_Error.innerHTML = 'Email or Phone nember';
        return false;
    }
    if(user_pass.value == ''){
        user_pass.style.borderColor= ' #d22222';
        user_pass.focus();
        pass_Error.innerHTML = 'Email or Phone nember';
        return false;
    }
}


function logfunRemove()
{
    if(login_id.value != ''){
        login_id.style.borderColor= ' #ddd';
        login_id.focus();
        login_Error.innerHTML = '';
        return false;
    }
    if(user_pass.value != ''){
        user_pass.style.borderColor= ' #ddd';
        user_pass.focus();
        pass_Error.innerHTML = '';
        return false;
    }
}
login_id.addEventListener('blur',logfunRemove);
user_pass.addEventListener('blur',logfunRemove);

// modal js  start-------------------------------------------------------------


// for User name
var userName = document.getElementById('userName');
var nameErr = document.getElementById('nameErr');


// for last name
var lastName = document.getElementById('lastName');
var lastNameErr = document.getElementById('lastNameErr');

// for User email
var email = document.getElementById('email');
var emailErr = document.getElementById('emailErr');

// for password
var pass = document.getElementById('pass');
var passErr = document.getElementById('passErr');

// for confarm password
var rePass = document.getElementById('rePass');
var rePassErr = document.getElementById('rePassErr');


function subm()
{       //for name
    if(userName.value ==""){
        userName.style.borderColor = ' #d22222';
        userName.focus();
        nameErr.innerHTML = 'Enter your Name First';
        return false;
    }
        //for last name
    if(lastName.value ==""){
        lastName.style.borderColor = ' #d22222';
        lastName.focus();
        lastNameErr.innerHTML = 'Enter your Last Name ';
        return false;
    }  
        //for email
    if(email.value ==""){
        email.style.borderColor = ' #d22222';
        email.focus();
        emailErr.innerHTML = 'Enter your email';
        return false;
    }
         //for password
    if(pass.value ==""){
        pass.style.borderColor = ' #d22222';
        pass.focus();
        passErr.innerHTML = 'Enter your email';
        return false;
    }
    if(rePass.value != pass.value){
        rePass.style.borderColor = ' #d22222';
        rePass.focus();
        rePassErr.innerHTML = 'Pawords did not Same';
        return false;
    }
     //for confarm password
    if(rePass.value ==""){
        rePass.style.borderColor = ' #d22222';
        rePass.focus();
        rePassErr.innerHTML = 'Enter confarm Password';
        return false;
    }
}




function removError()
{       //for name
    if(userName.value != ""){
        userName.style.borderColor = ' #ddd';
        nameErr.innerHTML = '';
    }
          //for name
   if(lastName.value != ""){
    lastName.style.borderColor = ' #ddd';
    lastNameErr.innerHTML = '';
}    

         //for email
    if(email.value != ""){
        email.style.borderColor = ' #ddd';
        emailErr.innerHTML = '';
    }
        //for password
    if(pass.value != ""){
        pass.style.borderColor = ' #ddd';
        passErr.innerHTML = '';

    }

        //for confarm password
    if(rePass.value != ""){
        rePass.style.borderColor = ' #ddd';
        rePassErr.innerHTML = '';
    }
}


userName.addEventListener('blur',removError);
email.addEventListener('blur',removError);
pass.addEventListener('blur',removError);
rePass.addEventListener('blur',removError);
lastName.addEventListener('blur',removError);


// modall js  end-------------------------------------------------------------




var create_btn = document.getElementById('create_btn');
var modal = document.getElementById('modal');
var closeModal = document.getElementById('closeModal');


create_btn.addEventListener('click',function()
{
    modal.style.display = 'flex';
});


closeModal.addEventListener('click',function()
{
    modal.style.display = 'none';
});

// months js start ---------
const months = ['january','February','March','April','May','June','July','August','September','October','November','December'];


function populateMonths(){
    for(let i=0; i<months.length; i++){
        const option = document.createElement('option');
        option.textContent = months[i]
        monthSelect.appendChild('option');
    }
}
document.getElementById('month').innerHTML;