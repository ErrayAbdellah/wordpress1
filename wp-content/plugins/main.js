window.addEventListener('DOMContentLoaded', function() {

const form = document.getElementById('contact-form');

const firstName = form.elements["first_name"];
const lastName = form.elements["last_name"];
const email = form.elements["email"];
const message = form.elements["message"];

form.addEventListener("submit", function(event) {
  let valid = true;
  // Check first name
  if (!firstName.value.match(/^[A-Za-z]+$/)) {
    firstName.classList.add("border", "border-red-500");
    valid = false;
  } else {
    firstName.classList.remove("border", "border-red-500");
  }

  // Check last name
  if (!lastName.value.match(/^[A-Za-z]+$/)) {
    lastName.classList.add("border", "border-red-500");
    valid = false;
  } else {
    lastName.classList.remove("border", "border-red-500");
  }

  // Check email
  if (!email.value.match(/^[^\s@]+@[^\s@]+\.[^\s@]+$/)) {
    email.classList.add("border", "border-red-500");
    valid = false;
  } else {
    email.classList.remove("border", "border-red-500");
  }

  // Check message
  if (!message.value) {
    message.classList.add("border", "border-red-500");
    valid = false;
  } else {
    message.classList.remove("border", "border-red-500");
  }

  if (!valid) {
    event.preventDefault();
  }
});



  });





















// const form = document.getElementById('contact-form');
// console.log(form);
// const firstName = form.elements["first_name"];
// const lastName = form.elements["last_name"];
// const email = form.elements["email"];
// const message = form.elements["message"];

// form.addEventListener("submit", function(event) {
//   let valid = true;
//   // Check first name
//   if (!firstName.value.match(/^[A-Za-z]+$/)) {
//     firstName.classList.add("border", "border-red-500");
//     valid = false;
//   } else {
//     firstName.classList.remove("border", "border-red-500");
//   }

//   // Check last name
//   if (!lastName.value.match(/^[A-Za-z]+$/)) {
//     lastName.classList.add("border", "border-red-500");
//     valid = false;
//   } else {
//     lastName.classList.remove("border", "border-red-500");
//   }

//   // Check email
//   if (!email.value.match(/^[^\s@]+@[^\s@]+\.[^\s@]+$/)) {
//     email.classList.add("border", "border-red-500");
//     valid = false;
//   } else {
//     email.classList.remove("border", "border-red-500");
//   }

//   // Check message
//   if (!message.value) {
//     message.classList.add("border", "border-red-500");
//     valid = false;
//   } else {
//     message.classList.remove("border", "border-red-500");
//   }

//   if (!valid) {
//     event.preventDefault();
//   }
// });