
// Modal variables
var addReqbtn = document.querySelector('.registerRequestor-btn');
var modalBg = document.querySelector('.modal-bg');
var closeBtn = document.getElementById('close-btn');



// Form variables Reigstration Requestor
var userName = document.querySelector('.username');
var pass = document.querySelector('.password');
var rePass = document.querySelector('.re-password');

// Open the modal pop-up Reigstration Requestor
addReqbtn.addEventListener('click', function(){
	modalBg.classList.add('modalbg-active');

});

// Close the modal pop-up
closeBtn.addEventListener('click', function(){
	modalBg.classList.remove('modalbg-active');
	userName.value = "";
	pass.value = "";
	rePass.value = "";

});