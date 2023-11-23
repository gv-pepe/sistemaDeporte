document.getElementById("btn__iniciar-sesion").addEventListener("click", iniciarSesion);
document.getElementById("btn__registrarse").addEventListener("click", register);

//Declaración de variables
var contenedor_login_registrer = document.querySelector(".contenedor__login-registrer");
var formulario_login = document.querySelector(".formulario__login");
var formulario_registrer = document.querySelector(".formulario__registrer");
var caja_trasera_login = document.querySelector(".caja__trasera-login");
var caja_trasera_registrer = document.querySelector(".caja__trasera-registrer");

function iniciarSesion(){
    formulario_registrer.style.display = "none";
    contenedor_login_registrer.style.left = "-10px";
    formulario_login.style.display = "block";
    caja_trasera_registrer.style.opacity = "1";
    caja_trasera_login.style.opacity = "0";
  }


function register(){
  formulario_registrer.style.display = "block";
  contenedor_login_registrer.style.left = "410px";
  formulario_login.style.display = "none";
  caja_trasera_registrer.style.opacity = "0";
  caja_trasera_login.style.opacity = "1";
}
