function validateForm() {
  var x = document.forms["myForm"]["user"].value;
  if (x == "") {
    alert("Email must be filled out");
    return false;
  }
}