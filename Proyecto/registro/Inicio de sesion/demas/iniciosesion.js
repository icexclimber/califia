const loginForm = document.getElementById('login-form');
const errorMessage = document.getElementById('error-message');

loginForm.addEventListener('submit', function(event) {
    event.preventDefault();
    
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;
    
    // Validación simple de ejemplo (se puede extender según necesidades)
    if (!email.includes('@') || password.length < 6) {
        errorMessage.textContent = 'Correo o contraseña incorrectos. Por favor, inténtalo de nuevo.';
    } else {
        // Aquí se puede manejar la lógica para iniciar sesión (por ejemplo, enviar los datos al servidor)
        alert('Inicio de sesión exitoso');
        errorMessage.textContent = '';
        loginForm.reset();
    }
});
