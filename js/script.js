// to prevent auto submit data in database when refresh or reload the page
if (window.history.replaceState) {
  window.history.replaceState(null, null, window.location.href);
}

const form = document.getElementById("form");
const firstname = document.getElementById("firstname");
const lastname = document.getElementById("lastname");
const phone = document.getElementById("phone");
const email = document.getElementById("email");
const password = document.getElementById("password");
const cpassword = document.getElementById("cpassword");
const registrationform = document.getElementById("firstRegistration");
const loginform = document.getElementById("secondLogin");

// switching between registration form and login form
registrationform.style.display = "block";
loginform.style.display = "none";
document.getElementById("alreadyRegistered").addEventListener("click", () => {
  registrationform.style.display = "none";
  loginform.style.display = "block";
});

document.getElementById("signup").addEventListener("click", () => {
  registrationform.style.display = "block";
  loginform.style.display = "none";
});

// form validation
form.addEventListener("keyup", () => {
  const firstnameValue = firstname.value;
  const lastnameValue = lastname.value;
  const phoneValue = phone.value;
  const emailValue = email.value;
  const passwordValue = password.value;
  const cpasswordValue = cpassword.value;

  if (firstnameValue === "") {
    setErrorMessage(firstname, "first name cannot be blank");
  } else {
    setSuccessMessage(firstname);
  }

  if (lastnameValue === "") {
    setErrorMessage(lastname, "last name cannot be blank");
  } else {
    setSuccessMessage(lastname);
  }

  if (phoneValue === "") {
    setErrorMessage(phone, "phone number cannot be blank");
  } else if (!isphone(phoneValue)) {
    setErrorMessage(phone, "enter 11 digit valid phone number");
  } else {
    setSuccessMessage(phone);
  }

  if (emailValue === "") {
    setErrorMessage(email, "email cannot be blank");
  } else if (!isEmail(emailValue)) {
    setErrorMessage(email, "not a valid email. ex: abc@gmail.com");
  } else {
    setSuccessMessage(email);
  }

  if (passwordValue === "") {
    setErrorMessage(password, "password cannot be blank");
  } else {
    setSuccessMessage(password);
  }

  if (cpasswordValue === "") {
    setErrorMessage(cpassword, "confirm password cannot be blank");
  } else if (passwordValue !== cpasswordValue) {
    setErrorMessage(cpassword, "wrong password");
  } else {
    setSuccessMessage(cpassword);
  }
});

function setErrorMessage(input, message) {
  const formValidation = input.parentElement;
  const small = formValidation.querySelector("small");
  formValidation.className = "form-validation error";
  small.innerText = message;
}

function setSuccessMessage(input) {
  const formValidation = input.parentElement;
  formValidation.className = "form-validation success";
}

function isphone(phone) {
  return /^(?:\+?88|0088)?01[15-9]\d{8}$/.test(phone);
}

function isEmail(email) {
  return /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email);
}
