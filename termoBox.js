/* Set the width of the side navigation to 250px 
function abrirMenu() {
    document.getElementById("MenuLateral").style.width = "250px";
  }
  
  /* Set the width of the side navigation to 0 
  function cerrarMenu() {
    document.getElementById("MenuLateral").style.width = "0";
  }
*/
  document.getElementById('Login').addEventListener('click', function() {
    window.location.href = 'login.php'; // Redirige a login.php
});