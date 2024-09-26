const nombre = document.getElementById("email");
const contra = document.getElementById("password");
const form = document.getElementById("form");
const parrafo = document.getElementById("warnings");
const boton = document.getElementById("submit");

boton.addEventListener('click', function() {
  window.location.href = "/html/2.1Paginainicio.php";
});


form.addEventListener("submit", e => {
    e.preventDefault();
    let warnings = "";
    let entrar = false;
    if (nombre.value.length < 6) {
        warnings += 'El nombre no es válido <br>';
        entrar = true;
    }
    if (contra.value.length < 8) {
        warnings += 'La contraseña no es válida <br>';
        entrar = true;
    }
    if (entrar) {
        parrafo.innerHTML = warnings;
    } else {
        parrafo.innerHTML = "Enviado <br>";
        window.location.href = "2.1Paginainicio.php"; 
    }
});