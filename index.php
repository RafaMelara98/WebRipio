<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/index.css">
    <title>Forge Store</title>
</head>
<body>
 
  <!--El header contiene barra de navegación, login rápido y botón para registrarse-->
<header class="header">
 <nav>
     <div class="topnav">
       <a href="index.php" class="actives"><img src="assets/images/icono.jpg" alt="logo" class="logo"></a>

       <a href="#" class="hide-desktop options">
            <i class="fa fa-bars"></i>
            <i class="fa fa-times hide-mobile"></i>
        </a>
      <!--Esto se tiene que esconder con javascript-->
       <div class="hide-mobile menu" id="menu">
        <a href="index.php"><i class="fa fa-fw fa-home"></i>Inicio</a>
        <a href="#sobre"><i class="fa fa-fw fa-tag"></i>Servicios</a>
        <a href="ubicacion.php"><i class="fa fa-fw fa-map-marker"></i></i>Ubicación</a>
        <a href="Opiniones.php" ><i class="fa fa-fw fa-question"></i>Opiniones</a>
        
        <!--<a href="#contact"><i class="fa fa-fw fa-phone"></i>Contacto</a>-->
        
        <!--Contiene los botones para las cuentas-->
          <div class="login-container">         
              <a href="#iniciar" class="last"><button type="submit" ><i class="fa fa-fw fa-user"></i>Iniciar sesion</button></a> 
            <a href="#registrarse" class="last"><button type="submit" ><i class="fa fa-fw fa-user"></i>Registrarse</button></a> 
          </div>
       </div>
     </div>
 </nav>
</header> 


<section>
    <!-- Contenedor del carrusel -->
<div class="slideshow-container">

        <!-- Imágenes y textos que tendrán encima de ellas-->
        <div class="mySlides fade">
          <img src="assets/images/games.jpeg" style="width:100%" alt="medicos">
          <div class="content">
            <h1>Articulos de calidad</h1>
            <p>Con nuestros productos de calidad satisfacemos la necesidad de nuestros clientes.</p>
          </div>
        </div>
      
        <div class="mySlides fade">
          <img src="assets/images/games1.jpg" style="width:100%">
          <div class="content">
            <h1>Experiencia</h1>
            <p>Aqui encontraras lo que necesitas para la mejor experiencia gaming.</p>
          </div>
        </div>
      
        <div class="mySlides fade">
          <img src="assets/images/games2.jpg" style="width:100%">
          <div class="content">
            <h1>Amplio Catalogo</h1>
            <p>Contamos con amplio catalago de videojuegos.</p>
          </div>
        </div>
      
        <!-- Botones "siguiente" y "anterior" -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
      </div>
      <br>
      
      <!-- Círculos -->
      <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
      </div>
</section>


<!--Área de artículos-->
<section class="article-area">
  <div class="container post">
      <a name="sobre"><h2>Nuestra tienda</h2></a>
      <ul>
          <li>
              <article>
                  <img src="assets/images/item1.jpg" alt="cooke banner">
                  <h3>Audifonos</h3>
                  <p>Diademas de todo tipo y de distintos precios, comodidad y buena calidad 
                  de sonido a la hora de jugar</p>
              </article>
          </li>
          <li>
              <article>
                  <img src="assets/images/item2.jpg" alt="new banner">
                  <h3>Teclados</h3>
                  <p>Teclados mecanicos, obtienes mejor respuesta tactil y poseen mayot durabilidad.</p>
              </article>
          </li>
          <li>
              <article>
                  <img src="assets/images/item3.jpg" alt="teach">
                  <h3>Disco duro</h3>
                  <p>Amplia el almacenamiento de tu consola para que no te quedes sin espacio.</p>
              </article>
          </li>

          <li>
            <article>
                <img src="assets/images/item4.jpg" alt="teach">
                <h3>Videojuegos</h3>
                <p>Amplio catalogo de juego y de las distintas compañias que lideran el 
                mercado de los videojuegos.</p>
            </article>
        </li>

        <li>
          <article>
              <img src="assets/images/item5.jpg" alt="teach">
              <h3>Mandos</h3>
              <p>Aqui encontraras mandos de xbox, ps4 y nintendo switch.</p>
          </article>
      </li>

      <li>
        <article>
            <img src="assets/images/item6.jpg" alt="teach">
            <h3>Sillas</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint quod eum amet enim laborum
                tenetur ullam consectetur illum natus dicta.</p>
        </article>
    </li>
      </ul>
  </div>
</section>

<footer>
  <img src="assets/images/icono.jpg" alt="logo" class="logo2">

  <p>Copyright 2019. All right reserved</p>
</footer>
 
<script src="assets/javascript/carrusel.js"></script>
<script src="assets/javascript/movil.js"></script>
</body>
</html>