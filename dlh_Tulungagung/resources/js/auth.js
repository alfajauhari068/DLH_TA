import './bootstrap';

document.addEventListener('DOMContentLoaded', () => {
    const togglePasswordButton = document.getElementById('toggle-password');
    const passwordInput = document.getElementById('password');
    const togglePasswordIcon = document.getElementById('toggle-password-icon');

    if (togglePasswordButton && passwordInput && togglePasswordIcon) {
        togglePasswordButton.addEventListener('click', () => {
            const isPassword = passwordInput.type === 'password';
            passwordInput.type = isPassword ? 'text' : 'password';
            togglePasswordIcon.classList.toggle('bi-eye');
            togglePasswordIcon.classList.toggle('bi-eye-slash');
            togglePasswordButton.setAttribute('aria-label', isPassword ? 'Hide password' : 'Show password');
        });
    }
});
