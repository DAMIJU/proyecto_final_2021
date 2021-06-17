document.addEventListener("DOMContentLoaded", function() {
document.getElementById("Form_InicioSesion").addEventListener('submit', ValidarFormulario); 
});

function ValidarFormulario(evento) {
  evento.preventDefault();
  var usuario = document.getElementById('login-name').value;
  if(usuario.length == 0) {
    alert('El campo usuario no puede estar vacío');
    document.getElementById("login-name").style.border = "3px solid red";
    return;
    }
  var clave = document.getElementById('login-pass').value;
  if (clave.length == 0) {
    alert('El campo contraseña no puede estar vacío.');
    document.getElementById("login-pass").style.border = "3px solid red";
    return;
    }
  this.submit();
}