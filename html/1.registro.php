<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/registro.css">
    <link rel="icon" href="/fondos/Logo.png">
    <title>Registro</title>
    <style>
        
         
    </style>
</head>
<body>
    <form action="" class="container">
        <div class="saludo logo">
            <button class="btn2 volver onClick" id="volver">
                Volver
            </button>
            <img src="/fondos/Logo.png" alt="" style="height: 50px;"
            width="50px">
        <h2>Registrate</h2>
        
        </div>
        <div>
            <label for="Name">Nombre</label>
            <input type="text" name="" id="Name" maxlength="30" placeholder="Ingresa tu nombre" required>
        </div>
        <div>
            <label for="Apellidos">Apellidos</label>
            <input type="text" name="" id="Apellidos" maxlength="30" placeholder="Ingresa tu apellido" required>
        </div>
        <div>
            <label for="Edad">Edad</label>
            <input type="text" name="" id="Edad" maxlength="30" placeholder="Ingresa tu apellido" required>
        </div>
        <div>
            <label for="Email">Email</label>
            <input type="email" name="" id="email" placeholder="example@gmail.com " required>
        </div>
        <div>
            <label for="password">Contraseña</label>
            <input type="password" name="" id="password" placeholder="Password123" required>
        </div>
        <div>
            <label for="password2">Repita su contraseña</label>
            <input type="password" name="" id="password2" placeholder="Password123" required>
        </div>

        <div class="buton__container">
            <button class="btn onClick" id="volver" onclick="volver()">Registrarse</button>
        </div>
        <div class="link__a">
            <a href="/html/1.inicio.html" class="link" id="yatienesunacuenta">¿Ya tienes una cuenta?</a>
          
        </div>
    </form>
    <div class="footer">
        <footer>Todos los derechos reservados</footer>
    </div>
    <script src="/jscript/registro.js"></script>
</body>
</html>
