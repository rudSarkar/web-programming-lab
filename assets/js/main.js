function validateForm() {
  let name = document.forms["reg_form"]["name"].value;
  let email = document.forms["reg_form"]["email"].value;
  let blood = document.forms["reg_form"]["blood_group"].value;
  let pass = document.forms["reg_form"]["password"].value;

  if (name == "") {
    alert("Name must be filled out");
    return false;
  }
  if (email == "") {
    alert("Email must be filled out");
    return false;
  }
  if (blood == "") {
    alert("Blood Group must be filled out");
    return false;
  }
  if (pass == "") {
    alert("Password must be filled out");
    return false;
  }
}
