<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/Inicio.css">
    <link rel="icon" href="/fondos/Logo.png">
    <title>Inicio de Sesión</title>
    
</head>
<body>

    <!--Formulario-->

    <form action="" class="container">
        <div class="saludo logo">
            <img src="/fondos/Logo.png" alt="" style="height: 50px;"
            width="50px">
        <h2>Registrate</h2>
        
        </div>
        <div>
            <label for="Email">Email</label>
            <input type="email" name="" id="email" placeholder="example@gmail.com " required>
        </div>
        <div>
            <label for="password">Contraseña</label>
            <input type="password" name="" id="password" placeholder="Password123">
        </div>
       
        <div class="buton__container">
            <button class="btn onClick" id="submit" onclick="boton()">Ingresar</button>
        </div>
        <div class="link__a">
            <a href="#" class="link">Olvido su contraseña?</a>
            <a href="1.registro.html" class="link">Registrate ahora!</a>
        </div>
        <p id="warnings"></p>
    </form>
   


    <div class="footer">
        <footer>Todos los derechos reservados</footer>
    </div>
    
    <script src="/jscript/validacioninicio.js"></script>
    

</body>
</html>
