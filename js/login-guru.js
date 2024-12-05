document.addEventListener('DOMContentLoaded', function() {
    // Elements
    const form = document.getElementById('loginForm');
    const usernameInput = document.getElementById('username');
    const passwordInput = document.getElementById('password');
    const rememberCheckbox = document.getElementById('remember');

    // Check if the user is remembered
    if (localStorage.getItem('remembered') === 'true') {
        usernameInput.value = localStorage.getItem('username');
        passwordInput.value = localStorage.getItem('password');
        rememberCheckbox.checked = true;
    }

    // Form Validation and Remember Me Functionality
    form.addEventListener('submit', function(event) {
        event.preventDefault();  // Prevent form submission for now

        if (usernameInput.value && passwordInput.value) {
            // Save the credentials if "Ingat Saya" is checked
            if (rememberCheckbox.checked) {
                localStorage.setItem('remembered', 'true');
                localStorage.setItem('username', usernameInput.value);
                localStorage.setItem('password', passwordInput.value);
            } else {
                localStorage.removeItem('remembered');
                localStorage.removeItem('username');
                localStorage.removeItem('password');
            }

            // Simulate successful login and redirect
            window.location.href = '../html/dashboard.html';
        } else {
            alert('Harap isi semua kolom!');
        }
    });
});

