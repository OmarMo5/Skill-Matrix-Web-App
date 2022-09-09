$(document).ready(function(){

let searchForm = document.querySelector('.search-form');

document.querySelector('#search-btn').onclick = () =>{
    searchForm.classList.toggle('active');
    shoppingCart.classList.remove('active');
    navbar.classList.remove('active');
}

let shoppingCart = document.querySelector('.shopping-cart');

document.querySelector('#cart-btn').onclick = () =>{
    shoppingCart.classList.toggle('active');
    searchForm.classList.remove('active');
    navbar.classList.remove('active');
}

let navbar = document.querySelector('.navbar');

document.querySelector('#menu-btn').onclick = () =>{
    navbar.classList.toggle('active');
    searchForm.classList.remove('active');
    shoppingCart.classList.remove('active');
}

window.onscroll = () =>{
    searchForm.classList.remove('active');
    navbar.classList.remove('active');
}

var swiper = new Swiper(".product-slider", {
    loop:true,
    spaceBetween: 20,
    autoplay: {
        delay: 7500,
        disableOnInteraction: false,
    },
    centeredSlides: true,
    breakpoints: {
      0: {
        slidesPerView: 1,
      },
      768: {
        slidesPerView: 2,
      },
      1020: {
        slidesPerView: 3,
      },
    },
});

//login/signup function starts here
$("#signup-button").click(function(){
  var userForms = $("#user_options-forms");
  userForms.removeClass("bounceRight");
  userForms.addClass("bounceLeft");
});

$("#login-button").click(function(){
  var userForms = $("#user_options-forms")
  userForms.removeClass('bounceLeft');
  userForms.addClass('bounceRight');
});
//login/signup function ends here


 //scroll to the top function
 function scrollToTop() {
  $(window).scrollTop(0); // For Chrome, Firefox, IE and Opera
}


});

//account settings validation form function starts here
function validateForm() {

  var x = document.forms["forms_form"]["Username"].value;
  if (x == "") {
  alert("Name must be filled out");
  return false;
  }
  var x = document.forms["forms_form"]["Address"].value;
  if (x == "") {
  alert("Address must be filled out");
  return false;
  }
   if (/[A-Za-z]/.test(x) == false) {
  alert("Please enter a right address");
  return false;
  }
  x = document.forms["forms_form"]["credit"].value;
  
  x = document.forms["forms_form"]["Email"].value;
  if (x == "") {
  alert("Email must be filled out");
  return false;
  } else if (!x.includes("@")) {
  alert("Does not have mail format");
  }
  x = document.forms["forms_form"]["password"].value;
  var y = document.forms["forms_form"]["re-type"].value;
  if (x != y) {
  alert("Password retype does not match");
  return false;
  }
  if (x.length < 8) {
  alert("password length not enough, minimum 8");
  return false;
  }
  if (/\d/.test(x) == false) {
  //Checks if it contains any number
  alert("password does not contain a number");
  return false;
  }
  if (/[A-Za-z]/.test(x) == false) {
  alert("password does not contain a letter");
  return false;
  }
  
  x = document.forms["forms_form"]["credit"].value;
  if (/[A-Za-z]/.test(x) == true) {
  alert("Credit card number should not contain a letter");
  return false;
  }
   if (x.length != 16) {
  alert("Credit card number is not valid");
  return false;
  }
 }
 
 //account settings validation form function ends here
 
 //contact us form validation starts here
   
 function validateForm2(){
   
 var x = document.forms["contact-form"]["name"].value;
  if (x == "") {
  alert("Name must be filled out");
  return false;
  }	
 
 var x = document.forms["contact-form"]["email"].value;
  if (x == "") {
  alert("Email must be filled out");
  return false;
  }
  
  var x = document.forms["contact-form"]["message"].value;
  if (x == "") {
  alert("Message must be filled out");
  return false;
  }
 if (/[A-Za-z]/.test(x) == false) {
  alert("Please enter a right message");
  return false;
  }
 } 
 //contact us form validation ends here