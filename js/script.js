
// Add event listener to the registration link
// when registration is clicked
document.getElementById('tab-register').addEventListener('click', function(event) {
  // Prevent the default link behavior
  event.preventDefault();

  // Show the registration tab
  var registerTab = new bootstrap.Tab(document.getElementById('tab-register'));
  registerTab.show();
});

document.getElementById('tab-login').addEventListener('click', function(event) {
  // Prevent the default link behavior
  event.preventDefault();

  // Show the login tab
  var loginTab = new bootstrap.Tab(document.getElementById('tab-login'));
  loginTab.show();
});

// show profile nav after login is successful
document.getElementById('login-submit').addEventListener('click', function(event) {
  event.preventDefault(); // prevents the default form submission behavior
  unhideDropdown();

  let email = document.getElementById('loginName').value;
  // Check if the email contains the "@" symbol
  if (email.indexOf('@') !== -1) {
    alert('Email is valid');
    if (password) { //----not working
      // password validated from SQL database
      alert('password valid');
    } else {
      alert('password should be between 6-20 characters with at least one lowercase letter,one capital letter,one number and a special character');
    }
  }
  // Email does not contain "@" symbol
  else {
    alert(`Invalid email, pls include an '@' in the email`);
  }
});

// function to validate password
function validatePassword(password) {
  // Regular expression to match the password criteria
  var regex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/;
  // Check if the password matches the regular expression regex
  return regex.test(password);
}




// show profile nav after registration is successful
document.getElementById('register-submit').addEventListener('click', function(event) {
  event.preventDefault(); // prevents the default form submission behavior

  let email = document.getElementById('registerEmail').value;
  let password = document.getElementById('registerPassword').value;
  let confirmed = document.getElementById('registerConfirmPassword').value;
  let checkbox = document.getElementById('registerCheck');

  // Check if the email contains the "@" symbol
  if (email.indexOf('@') !== -1) {
    alert('Email is valid');
    alert(password);

    if (validatePassword(password)) { // Password meets the criteria
      alert('Password is valid');

      if (password === confirmed) {

        if (checkbox.checked) { // if checkbox is checked
          //>>>save password
          var form = document.getElementById('registerForm');
          // Submit the form> carries out php specified in action attribute
          form.submit();
          // clear the form inputs after submission as default behaviour was prevented
          document.getElementById('registerForm').reset();
        } else { // if checkbox is not checked

          alert('Please agree to the terms.'); // error message
        }
      } else {
        alert("Passwords do not match");
      }

    } else {
      // Password does not meet the criteria> error message
      alert('Password should be between 6-20 characters with at least one lowercase letter, one uppercase letter, one number, and a special character');
    }
  } else {
    // Email does not contain "@" symbol> error message
    alert('Invalid email, please include an "@" in the email');
  }
});


//fixed issue, function called onclick
 function openForm(){
  let form = document.getElementById("enquiryForm");
  form.style.visibility= "visible";
}

function closeForm(){
  // alert('clicked');
  let form = document.getElementById("enquiryForm");
  form.style.visibility= "hidden";

}

//
function submitted(){
  alert("submitted");
}