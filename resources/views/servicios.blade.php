<!DOCTYPE html> 
    <html>
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="{{ asset('css/serv.css') }}">
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
                    <li><a href="{{ route('ser') }}" class="{{ request()->routeIs('ser') ? 'active' : '' }}">Servicios</a></l>
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
              <h1>NUESTROS SERVICIOS</h1>  
              <div class="title-container">
                <h1>MINERIA</h1>
                <div class="line"></div>
            </div>
            <div class="image-container">
                <div class="image-box">
                    <img src="img/1.webp" alt="Imagen 1">
                    <div class="overlay">
                        <h3>PROSPECCIÓN</h3>
                    </div>
                </div>
                <div class="image-box">
                    <img src="img/2.jpg" alt="Imagen 2">
                    <div class="overlay">
                        <h3>EXPLOTACIÓN</h3>
                    </div>
                </div>
                <div class="image-box">
                    <img src="img/3.jpeg" alt="Imagen 3">
                    <div class="overlay">
                        <h3>EVALUACIÓN DE PROYECTOS</h3>
                    </div>
                </div>
            </div>
            <br>
            <div class="image-container">
                <div class="image-box">
                    <img src="img/4.jpeg" alt="Imagen 1">
                    <div class="overlay">
                        <h3>DESARROLLO Y CONSTRUCCIÓN</h3>
                    </div>
                </div>
                <div class="image-box">
                    <img src="img/5.jpg" alt="Imagen 2">
                    <div class="overlay">
                        <h3>PRODUCCIÓN</h3>
                    </div>
                </div>
                <div class="image-box">
                    <img src="img/6.jpg" alt="Imagen 3">
                    <div class="overlay">
                        <h3>CIERRE</h3>
                    </div>
                </div>
            </div>
            <br>
            <div class="image-container">
                <div class="image-box">
                    <img src="img/7.jpg" alt="Imagen 1">
                    <div class="overlay">
                        <h3>EVALUACIÓN DE YACIMIENTOS</h3>
                    </div>
                </div>
                <div class="image-box">
                    <img src="img/8.jpg" alt="Imagen 2">
                    <div class="overlay">
                        <h3>CÁLCULO DE RESERVAS</h3>
                    </div>
                </div>
            </div>

            <div class="title-container">
                <h1>COMERCIALIZACIÓN DE MINERALES</h1>
                <div class="line"></div>
            </div>
           
                <div>
                    <p>Nos permite definir la oferta y demanda en un horizonte de tiempo, en función del 
                        cálculo del tipo ycantidades de productos minerales que producirán y consumirán en 
                        el futuro los diferentes actores de laindustria. Tenemos amplia experiencia en 
                        Casiterita (Sn), Tantalita / Columbita, Oro (Au).</p>
                    
                </div>
        
            <div class="image-container">
                <div class="image-box">
                    <img src="img/1.webp" alt="Imagen 1">
                    <div class="overlay">
                        <h3>COMPRA/VENTA</h3>
                    </div>
                </div>
                <div class="image-box">
                    <img src="img/2.jpg" alt="Imagen 2">
                    <div class="overlay">
                        <h3>EMBALAJE</h3>
                    </div>
                </div>
                <div class="image-box">
                    <img src="img/3.jpeg" alt="Imagen 3">
                    <div class="overlay">
                        <h3>INSPECCIÓN</h3>
                    </div>
                </div>
            </div>
            <br>
            <div class="image-container">
                <div class="image-box">
                    <img src="img/4.jpeg" alt="Imagen 1">
                    <div class="overlay">
                        <h3>ALMACENAMIENTO</h3>
                    </div>
                </div>
                <div class="image-box">
                    <img src="img/5.jpg" alt="Imagen 2">
                    <div class="overlay">
                        <h3>ADUANA</h3>
                    </div>
                </div>
                <div class="image-box">
                    <img src="img/6.jpg" alt="Imagen 3">
                    <div class="overlay">
                        <h3>EMBARQUE</h3>
                    </div>
                </div>
            </div>
            <br>
            <div class="image-container single">
                <div class="image-box">
                    <img src="img/9.jpg" alt="Imagen única">
                    <div class="overlay">
                        <h3>EXPORTACIÓN</h3>
                    </div>
                </div>
            </div>
                       
        <br>
        <div class="title-container">
            <h1>GEOLOGÍA</h1>
            <div class="line"></div>
        </div>
        <div class="image-container1">
            <div class="image-box1">
                <img src="img/1.webp" alt="Imagen 1">
                <div class="overlay">
                    <h3>ESTUDIOS DE GEOLOGÍA DE SUPERFICIE</h3>
                </div>
            </div>
            <div class="image-box1">
                <img src="img/2.jpg" alt="Imagen 2">
                <div class="overlay">
                    <h3>GEOLOGÍA APLICADA A OBRAS CIVILES MINERA</h3>
                </div>
            </div>
        </div>
        <br>
        <div class="image-container1">
            <div class="image-box1">
                <img src="img/4.jpeg" alt="Imagen 1">
                <div class="overlay">
                    <h3>ESTUDIOS GEOMÁTICOS</h3>
                </div>
            </div>
            <div class="image-box1">
                <img src="img/5.jpg" alt="Imagen 2">
                <div class="overlay">
                    <h3>ESTUDIOS GEOFÍSICOS</h3>
                </div>
            </div>
        </div>
        <br>
        <div class="image-container1">
            <div class="image-box1">
                <img src="img/7.jpg" alt="Imagen 1">
                <div class="overlay">
                    <h3>ESTUDIOS GEOQUÍMICOS</h3>
                </div>
            </div>
            <div class="image-box1">
                <img src="img/8.jpg" alt="Imagen 2">
                <div class="overlay">
                    <h3>ESTUDIOS DE IMPACTO AMBIENTAL Y SOCIOCULTURAL</h3>
                </div>
            </div>
        </div>   
        <br>
        <div class="title-container">
            <h1>COMERCIALIZACIÓN DE EQUIPOS Y MAQUINARIAS PARA LA MINERÍA</h1>
            <div class="line"></div>
        </div>
       
            <div>
                <p>Contamos con todo el marco jurídico legal correspondiente para la importación, 
                    nacionalización,transporte y distribución de equipos, maquinarias e insumos mineros 
                    para todo el país.</p>
                
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