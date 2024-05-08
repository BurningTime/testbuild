document.getElementById('registrationForm').addEventListener('submit', function(event) {
    var password = document.getElementById('pwd').value;
    var passwordHelp = document.getElementById('passwordHelp');
    
    // Validation conditions
    var hasLetters = /[a-zA-Z]/.test(password);
    var hasNumbers = /[0-9]/.test(password);
    var validLength = password.length >= 8 && password.length <= 20;
    var noSpecialChars = /^[a-zA-Z0-9]*$/.test(password);

    if (!hasLetters || !hasNumbers || !validLength || !noSpecialChars) {
        event.preventDefault(); // Stop form submission
        passwordHelp.textContent = 'Password must be 8-20 characters long, contain both letters and numbers, and must not contain special characters.';
        passwordHelp.classList.add('text-danger');
    } else {
        passwordHelp.textContent = 'Password is valid.';
        passwordHelp.classList.remove('text-danger');
        passwordHelp.classList.add('text-success');
    }
});

// Add functionality to show/hide password
document.getElementById('showPassword').addEventListener('change', function() {
    var passwordInput = document.getElementById('pwd');
    if (this.checked) {
        passwordInput.type = 'text';
    } else {
        passwordInput.type = 'password';
    }
});