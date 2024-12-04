document.addEventListener('DOMContentLoaded', function() {
    // Elements
    const form = document.getElementById('loginForm');
    const nisnInput = document.getElementById('nisn');
    const namaInput = document.getElementById('nama');
    const passwordInput = document.getElementById('password');
    const rememberCheckbox = document.getElementById('remember');

    // Check if the user is remembered
    if (localStorage.getItem('remembered') === 'true') {
        nisnInput.value = localStorage.getItem('nisn');
        namaInput.value = localStorage.getItem('nama');
        passwordInput.value = localStorage.getItem('password');
        rememberCheckbox.checked = true;
    }

    // Form Validation and Remember Me Functionality
    form.addEventListener('submit', function(event) {
        event.preventDefault();  // Prevent form submission for now

        if (nisnInput.value && namaInput.value && passwordInput.value) {
            // Save the credentials if "Ingat Saya" is checked
            if (rememberCheckbox.checked) {
                localStorage.setItem('remembered', 'true');
                localStorage.setItem('nisn', nisnInput.value);
                localStorage.setItem('nama', namaInput.value);
                localStorage.setItem('password', passwordInput.value);
            } else {
                localStorage.removeItem('remembered');
                localStorage.removeItem('nisn');
                localStorage.removeItem('nama');
                localStorage.removeItem('password');
            }

            // Simulate successful login and redirect
            window.location.href = '/Ujikom/html/dashboard.html';
        } else {
            alert('Harap isi semua kolom!');
        }
    });
});
