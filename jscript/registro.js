document.getElementById('formulario').addEventListener('submit', function(event) {
    event.preventDefault();
    
    var nombre = document.getElementById('nombre').value;
    var apellido = document.getElementById('apellido').value;
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;
    var passwordrept = document.getElementById('passwordrept').value;
    var warnings = document.getElementById('warnings');
    
    if (nombre.length > 9 || apellido.length > 9) {
        warnings.textContent = "Los nombres y apellidos deben tener menos de 9 caracteres.";
        return;
    }
    
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email)) {
        warnings.textContent = "El correo electrónico no es válido.";
        return;
    }
    
    if (password !== passwordrept) {
        warnings.textContent = "Las contraseñas no coinciden.";
        return;
    }
    
    // Si pasa todas las validaciones, puedes enviar el formulario o realizar otras acciones
    warnings.textContent = ""; // Limpiar cualquier mensaje de advertencia previo
    // Aquí podrías enviar el formulario o realizar otras acciones, como enviar los datos a un servidor
    
    // Ejemplo: Enviar formulario
    // document.getElementById('formulario').submit();
});


document.getElementById('form').addEventListener('submit', function(event) {
    // Prevenir que el formulario se envíe
    event.preventDefault();

    // Obtener los valores de los inputs
    const password = document.getElementById('password').value;
    const confirmPassword = document.getElementById('passwordrept').value;

    // Obtener el párrafo de error
    const errorElement = document.getElementById('error');

    // Verificar si las contraseñas coinciden
    if (password !== confirmPassword) {
        // Mostrar el mensaje de error
        errorElement.style.display = 'block';
    } else {
        // Ocultar el mensaje de error
        errorElement.style.display = 'none';
        // Aquí puedes agregar la lógica para enviar el formulario si las contraseñas coinciden
        // Por ejemplo, puedes usar event.target.submit() para enviar el formulario
        event.target.submit();
    }
});

// Opcional: Validar en tiempo real mientras el usuario escribe
document.getElementById('confirmPassword').addEventListener('input', function() {
    const password = document.getElementById('password').value;
    const confirmPassword = document.getElementById('confirmPassword').value;
    const errorElement = document.getElementById('error');

    if (password !== confirmPassword) {
        errorElement.style.display = 'block';
    } else {
        errorElement.style.display = 'none';
    }
});