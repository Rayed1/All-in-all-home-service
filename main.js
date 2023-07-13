let popup = document.getElementById("pop");
        function openPopup(){
          popup.classList.add("open-pop");  
        }
        function closePopup(){
          popup.classList.remove("open-pop");  
        }

        var popupparent = document.getElementsByClassName("popup_multi");
        var popup_btn_multi = document.getElementsByClassName("btn");
        var span_close_multi = document.getElementsByClassName("close_multi");

function setDataIndex() {

    for (i = 0; i < popup_btn_multi.length; i++)
    {
        popup_btn_multi[i].setAttribute('data-index', i);
        popupparent[i].setAttribute('data-index', i);
        span_close_multi[i].setAttribute('data-index', i);
    }
}



for (i = 0; i < popup_btn_multi.length; i++)
{
    popup_btn_multi[i].onclick = function() {
        var ElementIndex = this.getAttribute('data-index');
        popupparent[ElementIndex].style.display = "block";
    };


    span_close_multi[i].onclick = function() {
        var ElementIndex = this.getAttribute('data-index');
        popupparent[ElementIndex].style.display = "none";
    };

}

window.onload = function() {

    setDataIndex();
};

window.onclick = function(event) {
    if (event.target === popupparent[event.target.getAttribute('data-index')]) {
        popupparent[event.target.getAttribute('data-index')].style.display = "none";
    }

};
const form = document.getElementById('form');
const username = document.getElementById('username');
const email = document.getElementById('email');
const phone = document.getElementById('phone');
const address = document.getElementById('address');


form.addEventListener('submit', e => {
	e.preventDefault();
	
	checkInputs();
});

function checkInputs(){
	// trim to remove the whitespaces
	const usernameValue = username.value.trim();
	const emailValue = email.value.trim();
	const phoneValue = phone.value.trim();
	const addressValue = address.value.trim();

    flag = false;
	
	if(usernameValue === '') {
		setErrorFor(username, 'Username cannot be blank');
        flag = false;
	} else {
		setSuccessFor(username);
        flag = true;
	}
	
	if(emailValue === '') {
		setErrorFor(email, 'Email cannot be blank');
        flag = false;
	} else if (!isEmail(emailValue)) {
		setErrorFor(email, 'Not a valid email');
        flag = false;
	} else {
		setSuccessFor(email);
        flag = true;
	}
	
	if(phoneValue === '') {
		setErrorFor(phone, 'Phone cannot be blank');
        flag = false;
	} else {
		setSuccessFor(phone);
        flag = true;
	}
	
	if(addressValue === '') {
		setErrorFor(address, 'Address cannot be blank');
        flag = false;
	} 
	 else{
		setSuccessFor(address);
        flag = true;
	}
    return flag;

}

function setErrorFor(input, message) {
	const formControl = input.parentElement;
	const small = formControl.querySelector('small');
	formControl.className = 'form-control error';
	small.innerText = message;
}

function setSuccessFor(input) {
	const formControl = input.parentElement;
	formControl.className = 'form-control success';
}
	
function isEmail(email) {
	return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
}


const myform  = document.getElementById('form')

myform.addEventListener('submit',(event)=>{
    event.preventDefault();
    if(checkInputs()){
       
        window.location.replace("confirm.php");

    }else{
     //error
    }

})