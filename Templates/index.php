<?php
//Solicitar la conexion de la BD 
include '../Includes/conecta.php';
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="/POBLAUTOS/Styles/index.css" />
  <link rel="shortcut icon" href="../Imag/Logo-P.png" type="image/x-icon" />
  <title>PoblAutos</title>
</head>

<body>
  <header>
    <nav>
      <a href="#">Inicio</a>
      <a href="../Templates/login.php">Ingresar</a>
    </nav>
    <section class="texto-header">
      <h1>Lujo y exclusividad en cada detalle</h1>
      <h2>Encuentra lo que quieres, en este lugar.</h2>
    </section>
    <div class="wave" style="height: 150px; overflow: hidden">
      <svg
        viewBox="0 0 500 150"
        preserveAspectRatio="none"
        style="height: 100%; width: 100%">
        <path
          d="M0.00,49.98 C149.99,150.00 349.20,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z"
          style="stroke: none; fill: rgba(0, 0, 0, 0.37)"></path>
      </svg>
    </div>
  </header>
  <main>
    <section class="contenedor sobre-nosotros">
      <h2 class="titulo">Nuestros productos</h2>
      <div class="contenedor-sobre-nosotros">
        <img src="../Imag/Imag2.jpg" alt="" class="imagen-about-us" />
        <div class="contenido-textos">
          <h3><span>1</span>Los mejores productos</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed
            consectetur ea sit numquam architecto quisquam? Dolorem quod
            repellendus, blanditiis ullam officiis corporis, soluta ut
            voluptatum voluptate deleniti recusandae aspernatur exercitationem
            saepe et id sapiente nisi aliquam laboriosam. Ipsa, culpa cum
            fugiat perferendis eum fuga quam saepe reprehenderit blanditiis,
            ullam dolores.
          </p>
          <h3><span>2</span>Calidad garantizada</h3>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea
            reiciendis, temporibus quos quaerat quisquam accusamus? Vero odit
            illo illum, iure aspernatur praesentium blanditiis explicabo alias
            laborum repellat consequuntur obcaecati, ut repudiandae eveniet
            accusantium ducimus? Neque, facilis? Quisquam qui, quos pariatur
            quis voluptates nemo facere similique error ipsa est laudantium
            placeat.
          </p>
        </div>
      </div>
    </section>
    <section class="portafolio">
      <div class="contenedor">
        <h2 class="titulo">Portafolio</h2>
        <div class="galeria-port">
          <div class="imagen-port">
            <img src="../Imag/Imag3.jpg" alt="" />
            <div class="hover-galeria">
              <img src="../Imag/ojo.png" alt="" />
              <p>Ver</p>
            </div>
          </div>
          <div class="imagen-port">
            <img src="../Imag/Imag4.jpg" alt="" />
            <div class="hover-galeria">
              <img src="../Imag/ojo.png" alt="" />
              <p>Ver</p>
            </div>
          </div>
          <div class="imagen-port">
            <img src="../Imag/Imag5.jpg" alt="" />
            <div class="hover-galeria">
              <img src="../Imag/ojo.png" alt="" />
              <p>Ver</p>
            </div>
          </div>
          <div class="imagen-port">
            <img src="../Imag/Imag6.jpg" alt="" />
            <div class="hover-galeria">
              <img src="../Imag/ojo.png" alt="" />
              <p>Ver</p>
            </div>
          </div>
          <div class="imagen-port">
            <img src="../Imag/Imag7.jpg" alt="" />
            <div class="hover-galeria">
              <img src="../Imag/ojo.png" alt="" />
              <p>Ver</p>
            </div>
          </div>
          <div class="imagen-port">
            <img src="../Imag/Imag8.jpg" alt="" />
            <div class="hover-galeria">
              <img src="../Imag/ojo.png" alt="" />
              <p>Ver</p>
            </div>
          </div>
          <div class="imagen-port">
            <img src="../Imag/Imag9.jpg" alt="" />
            <div class="hover-galeria">
              <img src="../Imag/ojo.png" alt="" />
              <p>Ver</p>
            </div>
          </div>
          <div class="imagen-port">
            <img src="../Imag/Imag10.jpg" alt="" />
            <div class="hover-galeria">
              <img src="../Imag/ojo.png" alt="" />
              <p>Ver</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="cliente-contenedor">
      <h2 class="titulo">Comentarios</h2>
      <div class="cards">
        <div class="card">
          <img src="../Imag/selfie.jpg" alt="" />
          <div class="contenido-texto-card">
            <h4>Name</h4>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos,
              quidem incidunt vel reprehenderit aut aliquam consectetur,
              deserunt expedita quos a maxime. Ad consectetur dolore natus
              tempore molestiae mollitia autem sed!
            </p>
          </div>
        </div>
        <div class="card">
          <img src="../Imag/selfie2.jpg" alt="" />
          <div class="contenido-texto-card">
            <h4>Name</h4>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos,
              quidem incidunt vel reprehenderit aut aliquam consectetur,
              deserunt expedita quos a maxime. Ad consectetur dolore natus
              tempore molestiae mollitia autem sed!
            </p>
          </div>
        </div>
      </div>
    </section>
    <section class="about-servicios">
      <div class="contenedor">
        <h2 class="titulo">Nuestros servicios</h2>
        <div class="servicio-cont">
          <div class="servicio-ind">
            <img src="../Imag/asesoria.jpg" alt="" />
            <h3>Asesoría</h3>
            <p>
              Lorem ipsum, dolor sit amet consectetur adipisicing elit.
              Cumque, harum?
            </p>
          </div>
          <div class="servicio-ind">
            <img src="../Imag/mecanico.jpg" alt="" />
            <h3>Servicio Técnico</h3>
            <p>
              Lorem ipsum, dolor sit amet consectetur adipisicing elit.
              Cumque, harum?
            </p>
          </div>
          <div class="servicio-ind">
            <img src="../Imag/compra.jpg" alt="" />
            <h3>Servicio de Calidad</h3>
            <p>
              Lorem ipsum, dolor sit amet consectetur adipisicing elit.
              Cumque, harum?
            </p>
          </div>
        </div>
      </div>
    </section>
  </main>
  <footer>
    <div class="contenedor-footer">
      <div class="content-foo">
        <h4>Phone</h4>
        <p>(+57) 3241236586</p>
      </div>
      <div class="content-foo">
        <h4>Email</h4>
        <p>ServiciCliente@poblautos.com</p>
      </div>
      <div class="content-foo">
        <h4>Ubicación</h4>
        <p>Carrera 23 # 45 - 90 Medellín</p>
      </div>
    </div>
    <h2 class="titulo-final">
      &copy; Team Developer | PoblAutos
    </h2>
  </footer>
</body>

</html>