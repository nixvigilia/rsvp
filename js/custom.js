function validatePhoneNumber(input_str) {
  var re = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im;

  return re.test(input_str);
}

function validateForm(event) {
  var phone = document.getElementById("q3").value;
  if (!validatePhoneNumber(phone)) {
    document.getElementById("phone_error").classList.remove("hidden");
    document.getElementById("q3").scrollIntoView();
  } else {
    document.getElementById("phone_error").classList.add("hidden");
  }
  event.preventDefault();
}

document.getElementById("rsvpForm").addEventListener("submit", validateForm);
