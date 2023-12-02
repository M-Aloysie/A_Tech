document.addEventListener('DOMContentLoaded', function () {
    const form = document.querySelector('.needs-validation');
    const createAccountBtn = document.querySelector('.btn-warning');
    const passwordInput = document.getElementById('inputAddress');
    const confirmPasswordInput = document.getElementById('inputAddress2');
    const passwordMismatchMessage = document.getElementById('passwordMismatchMessage');
  
    form.addEventListener('submit', function (event) {
      let isValid = true;
  
      if (!form.checkValidity() || !checkPasswordsMatch()) {
        event.preventDefault();
        event.stopPropagation();
        isValid = false;
        displayPasswordMismatchMessage();
      }
  
      // Check each form element and mark as invalid if needed
      form.querySelectorAll(':invalid').forEach(function (element) {
        element.classList.add('is-invalid');
      });
  
      // Check if the form is valid and passwords match before redirecting
      if (isValid && checkPasswordsMatch()) {
        // Allow redirection to Signin.html if the form is valid
        window.location.href = 'Signin.html';
      }
    });
  
    form.addEventListener('change', function (event) {
      const target = event.target;
  
      if (target.hasAttribute('required')) {
        if (!target.checkValidity()) {
          target.classList.add('is-invalid');
        } else {
          target.classList.remove('is-invalid');
        }
      }
    });
  
    createAccountBtn.addEventListener('click', function (event) {
      let isValid = true;
  
      // Check each form element and mark as invalid if needed
      form.querySelectorAll(':invalid').forEach(function (element) {
        element.classList.add('is-invalid');
        isValid = false;
      });
  
      // Check if the form is valid and passwords match before allowing redirection
      if (!isValid || !checkPasswordsMatch()) {
        event.preventDefault();
        event.stopPropagation();
        displayPasswordMismatchMessage();
      }
    });
  
    function checkPasswordsMatch() {
      return passwordInput.value === confirmPasswordInput.value;
    }
  
    function displayPasswordMismatchMessage() {
      passwordMismatchMessage.style.display = 'block';
    }
  
    // Event listener to hide the message when passwords match
    passwordInput.addEventListener('input', function () {
      hidePasswordMismatchMessage();
    });
  
    confirmPasswordInput.addEventListener('input', function () {
      hidePasswordMismatchMessage();
    });
  
    function hidePasswordMismatchMessage() {
      passwordMismatchMessage.style.display = 'none';
    }
  });

  // script.js

function validateSignInForm() {
    // Get input values
    var email = document.getElementById('inputEmail3').value;
    var password = document.getElementById('inputPassword3').value;

    // Assume you have a list of registered users
    var registeredUsers = [
        { email: 'user1@example.com', password: 'password1' },
        { email: 'user2@example.com', password: 'password2' },
        // Add more users as needed
    ];

    // Check if the entered email and password match any registered user
    var isValidUser = registeredUsers.some(function (user) {
        return user.email === email && user.password === password;
    });

    if (isValidUser) {
        // Redirect or perform the sign-in logic
        window.location.href = 'signin.html';
    } else {
        // Display error message
        var errorMessage = document.getElementById('signInError');
        errorMessage.style.display = 'block';
    }
}

  