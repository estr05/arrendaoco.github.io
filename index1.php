<?php
session_start();
include_once('modulos/enrutador.php');
include_once('modulos/controlador.php');
if($_SESSION['validada'] == 1){
}else
header("location: index.html");
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>ArrendaOco</title>
  <link rel="stylesheet" href="./estilos.css">
  <link rel="stylesheet" href="navbar.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Upright:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
  <nav class="navbar">
    <div class="navbar-container">
        <a href="index.html" class="brand-logo"><img src="img/logo.png" alt="imagenlogo" class="logo">ArrendaOco</a>
        <button class="menu-toggle" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <div class="navbar-links" id="navbarNavAltMarkup">
            <a class="nav-item active" aria-current="page" href="index1.php">Inicio</a>
            <a class="nav-item" href="nosotros.html">Nosotros</a>

</svg>       
          </div>
    </div>
  </nav>

  <header>
    <h1 class="titulo">Bienvenido - </h1> <span class="titulo"> <?php if (@$_SESSION['validada'] == 1) {
          echo "<span><label align=right>". $_SESSION['nombre']."</label></span>";}?></span> 
    <p class="subtitulo">¡Más que un hogar, una comunidad!</p>
  </header>

  <div class="inmuebles-section">
    <section class="inmuebles-container">
      <h2 class="inmuebles-title">Inmuebles</h2>

      <div class="inmuebles-grid">
        <div class="inmueble-card">
          <div class="image-overlay-container">
            <a href="casas/casas.php" class="btn-inmueble-custom">Casas</a>
            <div class="image-wrapper"> <a href="casas/casas.php"><img src="img/home2.jpg" alt="Casa"></a>
            </div>
          </div>
        </div>
        <div class="inmueble-card">
          <div class="image-overlay-container">
            <a href="departamentos/departamentos.php" class="btn-inmueble-custom">Departamentos</a>
            <div class="image-wrapper"> <a href="departamentos/departamentos.php"><img src="img/home3.jpg" alt="Departamento"></a>
            </div>
          </div>
        </div>
        <div class="inmueble-card">
          <div class="image-overlay-container">
            <a href="cuartos/cuartos.php" class="btn-inmueble-custom">Cuartos</a>
            <div class="image-wrapper"> <a href="cuartos/cuartos.php"><img src="img/home4.jpg" alt="Cuarto"></a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <style>
  @import url('https://fonts.googleapis.com/css2?family=Cormorant+Upright:wght@300;400;500;600;700&display=swap');
</style>

<section class="promo-contacto">
  <h2>¿Deseas promocionar tu inmueble?</h2>
  <p>Publica tu espacio en nuestra plataforma y llega a más personas.</p>
  <a href="login_propietario.html" class="btn-promo">Registrate</a>
</section>

<footer class="redes-sociales">
  <h3>Síguenos en redes</h3>
  <div class="iconos-redes">
    <a href="https://instagram.com/aoco.05" target="_blank"><i class="fab fa-instagram"></i></a>
    <a href="https://mail.google.com/mail/?view=cm&fs=1&to=arrendaoco@gmail.com" target="_blank"><i class="fas fa-envelope"></i></a>
    
  </div>
</footer>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const menuToggle = document.querySelector('.menu-toggle');
        const navbarLinks = document.querySelector('.navbar-links');

        menuToggle.addEventListener('click', function() {
            navbarLinks.classList.toggle('active');
        });
    });
</script>
</body>
</html>