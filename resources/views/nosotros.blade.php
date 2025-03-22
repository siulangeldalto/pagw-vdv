<!DOCTYPE html> 
    <html>
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="{{ asset('css/general.css') }}">
            <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
            <title>VDV - Nosotros</title>
        </head>
        <body>
            <header>
                <img src="img/LOGO.png" alt="" height="100px">
                <nav>
                <ul>
                    <li><a href="{{ route('inicio') }}" class="{{ request()->routeIs('inicio') ? 'active' : '' }}">Inicio</a></li>
                    <li><a href="{{ route('us') }}" class="{{ request()->routeIs('us') ? 'active' : '' }}">Nosotros</a></li>
                    <li><a href="#">Servicios</a></l>
                    <li><a href="#">Contacto</a></li>
                 </ul>
                </nav>
            </header>
            <section class="hero">
                <div class="slides-container">
                  <div class="slide active" style="background-image: url('img/10.jpg');"></div>
                  <div class="slide" style="background-image: url('img/6.jpg');"></div>
                  <div class="slide" style="background-image: url('img/7.jpg');"></div>
                </div>
              
                <!-- Capa de degradado -->
                <div class="overlay"></div>
              
                <!-- Texto fijo sobre el carrusel -->
                <div class="content">
                <img src="img/LOGOBLANCO.png" alt="" height="100px">
                </div>
              
                <!-- Botones de navegación -->
                <button class="prev" onclick="changeSlide(-1)">&#10094;</button>
                <button class="next" onclick="changeSlide(1)">&#10095;</button>

                <!-- Números de imagen -->
  <div class="image-navigation">
    <button class="image-number" data-index="0">1</button>
  <button class="image-number" data-index="1">2</button>
  <button class="image-number" data-index="2">3</button>
  </div>

              </section>
              <!-- Llamar al archivo JS -->
              <script src="js/slide.js" defer></script>      
              <div class="content2">
                <div class="parrafo">
                    <h2>¿QUIENES SOMOS?</h2>
                     <p>Somos una empresa que brinda asesoramiento y soluciones específicas a sus clientes, destacados en la planificación, desarrollo y ejecución de proyectos dirigidos a grupos de inversión en el sector minero y empresas de comercialización de minerales.</p>
                     <p>Para proyectos mineros, ofrecemos servicios desde la prospección hasta el cierre de minas,
                        con profesionales del más alto nivel egresados de las universidades más prestigiosas de
                        nuestro país; en cuanto a la comercialización de minerales contamos con más 10 años de
                        experiencia a través de una amplia red de aliados comerciales a nivel nacional e internacional.
                        </p>
                </div>
                <img src="img/1.webp" alt="" height="200px">
              </div>
              <div class="contenido">
                <img src="img/3.jpeg" alt="" height="200px">
                <div>
                    <p>Contamos con licencias para la importación de equipos, insumos y maquinarias para el sector
                    minero, nuestros especialistas son líderes en cada una de sus áreas profesionales.</p>
                    <p>Aplicando su amplio conocimiento y experiencia, nuestro recurso humano desarrolla enfoques
                    innovadores y técnicas prácticas que satisfacen las necesidades y los objetivos financieros
                    únicos de los clientes.</p>
                </div>
            </div>

            <footer>
                <div class="footer-container">
                    <!-- Logo -->
                    <div class="footer-logo">
                        <img src="img/LOGO.png" alt="Logo" height="100px">
                    </div>
            
                    <!-- Menú de navegación -->
                    <nav class="footer-nav">
                        <ul>
                            <li><a href="{{ route('inicio') }}">Inicio</a></li>
                            <li><a href="#">Nosotros</a></li>
                            <li><a href="#">Servicios</a></li>
                            <li><a href="#">Contacto</a></li>
                        </ul>
                    </nav>
                </div>
            
                <!-- Información de contacto -->
                <div class="footer-contact">
                    <p>Información de contacto. +58 414 862 7538 | presidencia@vdvmineralesconsulting.com  </p>
                </div>
            </footer>
            
        </body>
    </html>