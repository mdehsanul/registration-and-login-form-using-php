// registration -> Preventing form submission when input field is empty
document.getElementById("registration_form").onsubmit = function () {
  var x = document.forms["registration_form"]["name"].value;
  var y = document.forms["registration_form"]["telephone"].value;
  var z = document.forms["registration_form"]["email"].value;
  var p = document.forms["registration_form"]["password"].value;
  var cp = document.forms["registration_form"]["cpassword"].value;

  var submit = true;

  if (x == null || x == "") {
    nameError = "Please enter your name";
    document.getElementById("name_error").innerHTML = nameError;
    submit = false;
  }

  if (y == null || y == "") {
    telephoneError = "Please enter your telephone";
    document.getElementById("telephone_error").innerHTML = telephoneError;
    submit = false;
  }

  if (z == null || z == "") {
    emailError = "Please enter your email";
    document.getElementById("email_error").innerHTML = emailError;
    submit = false;
  }

  if (p == null || p == "") {
    passwordError = "Please enter your password";
    document.getElementById("password_error").innerHTML = passwordError;
    submit = false;
  }

  if (cp == null || cp == "") {
    cpasswordError = "Please confirm your password";
    document.getElementById("cpassword_error").innerHTML = cpasswordError;
    submit = false;
  }

  return submit;
};

function removeWarning() {
  document.getElementById(this.id + "_error").innerHTML = "";
}

document.getElementById("name").onkeyup = removeWarning;
document.getElementById("telephone").onkeyup = removeWarning;
document.getElementById("email").onkeyup = removeWarning;
document.getElementById("password").onkeyup = removeWarning;
document.getElementById("cpassword").onkeyup = removeWarning;

// telephone, email -> validation and password, confirm password -> comparing
const form = document.getElementById("registration_form");
const username = document.getElementById("name");
const telephone = document.getElementById("telephone");
const email = document.getElementById("email");
const password = document.getElementById("password");
const cpassword = document.getElementById("cpassword");

// form validation
form.addEventListener("keyup", () => {
  const usernameValue = username.value;
  const telephoneValue = telephone.value;
  const emailValue = email.value;
  const passwordValue = password.value;
  const cpasswordValue = cpassword.value;

  if (usernameValue != "") {
    setSuccessMessage(username);
  } else {
    setErrorMessage(username, "first name cannot be blank");
  }
  if (!isphone(telephoneValue)) {
    setErrorMessage(telephone, "enter 11 digit valid phone number");
  } else {
    setSuccessMessage(telephone);
  }

  if (!isEmail(emailValue)) {
    setErrorMessage(email, "not a valid email. ex: abc@gmail.com");
  } else {
    setSuccessMessage(email);
  }

  if (passwordValue != "") {
    setSuccessMessage(password);
  } else {
    setErrorMessage(password, "password cannot be blank");
  }

  if (passwordValue !== cpasswordValue) {
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
  submit = false;
}

function setSuccessMessage(input) {
  const formValidation = input.parentElement;
  formValidation.className = "form-validation success";
  submit = true;
}

function isphone(phone) {
  return /^(?:\+?88|0088)?01[15-9]\d{8}$/.test(phone);
}

function isEmail(email) {
  return /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email);
}
