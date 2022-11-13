// Requestor
var requestorBtn = document.querySelector('.requestor-btn');
var requestor = document.querySelector('.modal-container-requestor');
var requestorClose = document.querySelector('.close-btn-requestor');


requestorBtn.addEventListener('click', function(){
	requestor.classList.add('modal-container-requestor-active');
});

requestorClose.addEventListener('click', function(){
	requestor.classList.remove('modal-container-requestor-active');
});


// Admin
var adminBtn = document.querySelector('.admin-btn');
var admin = document.querySelector('.modal-container-admin');
var adminClose = document.querySelector('.close-btn-admin');


adminBtn.addEventListener('click', function(){
	admin.classList.add('modal-container-admin-active');
});

adminClose.addEventListener('click', function(){
	admin.classList.remove('modal-container-admin-active');
});

// Staff
var staffBtn = document.querySelector('.staff-btn');
var staff = document.querySelector('.modal-container-staff');
var staffClose = document.querySelector('.close-btn-staff');


staffBtn.addEventListener('click', function(){
	staff.classList.add('modal-container-staff-active');
});

staffClose.addEventListener('click', function(){
	staff.classList.remove('modal-container-staff-active');
});