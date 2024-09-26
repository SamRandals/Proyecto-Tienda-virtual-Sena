<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/paginainicio.css">
    <link rel="icon" href="/fondos/Logo.png">
    <title>Document</title>
</head>
<header>
 <nav class="nav">
    <div class="nav__list">
    <button class="nav__boton boton__close" id="close__boton">Cerrar Sesion</button>
    <button class="nav__boton boton__productos" id="products">Productos</button>
    <button class="nav__boton boton__nosotros" id="about-us">Sobre nosotros</button>
    <button class="nav__boton boton_contactos" id="contacts">Contactos</button>
    <button class="nav__boton boton__ayuda">Ayudas</button>

        <!-- Usuario info -->
        
    </div>
 </nav>
        <!-- Barra de saludo, logo y usuario -->
 <div class="header">
    <img class="logo" src="/fondos/Logo.png" alt="logo empresa">
    <h1 class="saludo">¡Bienvenido !</h1>
    <!-- imagen de usuario perfil -->
    <img src="https://thumbs.dreamstime.com/b/vector-de-perfil-avatar-predeterminado-foto-usuario-medios-sociales-icono-183042379.jpg" alt="Foto perfil" id="user__image" class="user__image" onclick="">
    <div id="userModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <h2>Información del Usuario</h2>
        <p><strong>Nombre de Usuario:</strong> <span id="username"></span></p>
        <p><strong>Correo Electrónico:</strong> <span id="email"></span></p>

        <!-- Botón para editar info -->
        <button id="editBtn">Editar Información</button>

        <!-- Formulario de edición (oculto inicialmente) -->
        <form id="editForm" style="display:none;" action="update_user.php" method="POST">
            <label for="newUsername">Nuevo Nombre de Usuario:</label>
            <input type="text" name="newUsername" id="newUsername" required>

            <label for="newEmail">Nuevo Correo Gmail:</label>
            <input type="email" name="newEmail" id="newEmail" required>

            <button type="submit">Guardar Cambios</button>
        </form>

        <!-- Botón para eliminar cuenta -->
        <form action="delete_account.php" method="POST">
            <button type="submit" id="deleteBtn">Eliminar Cuenta</button>
        </form>
    </div>
</div>
</div>

<!--Carta de presentación-->

<div class="container">
<div class="card">
<div class="card__header">
    <h2>Vision</h>
</div>
    <p>Nuestro proposito de la empresa es el desarrollo, mantenimiento y ventas de la tecnologia actual, buscamos expandir nuestro negocio a mas persoans que esten interesadas con el tema de la tecnologia, para aumentar ventas y ayudar a adquirir productos tecnologicos .</p>
</div>
<div class="card">
    <div class="card__header">
        <h2>Mision</h>
    </div>
        <p>kamertof es Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo porro aut maiores sapiente at, sed iusto assumenda est doloribus quae suscipit repudiandae quod explicabo numquam cum optio qui! Assumenda, tenetur.</p>
    </div>
</div>
<!--FOOTER-->
<div class="footer">
    <footer>Todos los derechos reservados</footer>
</div>

<!--SCRIPTS-->
<script src="/jscript/paginainicio.js"></script>
</body>

</html>