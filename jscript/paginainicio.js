

var cerrar = document.getElementById("close__boton");
var productos = document.getElementById("products")
var sobre_nosotros = document.getElementById("about-us")
var contactos = document.getElementById("contacts")
var ayudas = document.getElementById("products")




cerrar.addEventListener("click", function (){
    window.location.href="/html/1.inicio.php"
})

productos.addEventListener("click", function (){
    window.location.href="Productos.php"
})

sobre_nosotros.addEventListener("click", function (){
    window.location.href="Sobre nosotros.html"
})
contactos.addEventListener("click", function (){
    window.location.href="contactos.html"
})
