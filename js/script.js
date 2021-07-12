// registration
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
