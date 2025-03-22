<!DOCTYPE html> 
    <html>
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="{{ asset('css/inicio.css') }}">
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
            <section class="info-section">
              <img src="img/16.png" alt="Imagen de fondo" class="background-image">
              
              <div class="text-box">
                  <img src="img/LOGOBLANCO.png" alt="Logo" class="logo">
                  <p>Somos una empresa que brinda asesoramiento y soluciones específicas a sus clientes,
                    destacados en la planificación, desarrollo y ejecución de proyectos dirigidos a grupos de
                    inversión en el sector minero y empresas de comercialización de minerales.</p>
              </div>
          </section>

          <div class="gray-box">
            <div class="cards-container">
                <div class="card"> 
                    
                    <img src="img/2.jpg" alt="" height="150px">
                    <h3>SERVICIOS</h3>
                    <p>Ofrecemos servicios completos en distintas áreas tales como minería, geología, química, etc.</p>
                </div>
        
                <div class="logo-container">
                    <img src="img/LOGONEGRO.png" alt="Logo">
                </div>
        
                <div class="card">
                  <img src="img/5.jpg" alt="" height="150px"> 
                    <h3>CONSULTORES</h3>
                    <p>Contamos con profesionales de primer nivel en las distintas áreas que manejamos.</p>
                </div>
            </div>
        </div>
        
         
              <div class="content2">
                <div class="parrafo">
                  <h2><a href="{{ route('us') }}">SOBRE NOSOTROS</a></h2>
                  <p>Somos una empresa que brinda asesoramiento y soluciones específicas a sus clientes, destacados en la planificación, desarrollo y ejecución de proyectos dirigidos a grupos de inversión en el sector minero y empresas de comercialización de minerales.</p>
                </div>
                <img src="img/1.webp" alt="" height="200px">
              </div>
              <div class="tira">
                <h2>PARTICIPANTES OFICIALES DE LA EXPOMETAL 2025</h2>
              </div>
              <div class="content1">
                <h2><a href="{{ route('ser') }}">SERVICIOS</a></h2>
                <div class="services-container">
                    <div class="service">
                        <img src="img/6.jpg" alt="Servicio 1">
                        <div class="overlay"></div>
                        <h1>MINERIA</h1>
                    </div>
                    <br>
                    <div class="service">
                        <img src="img/7.jpg" alt="Servicio 2">
                        <div class="overlay"></div>
                        <h1>COMERCIALIZACIÓN MINERALES</h1>
                    </div>
                    <br>
                    <div class="service">
                        <img src="img/9.jpg" alt="Servicio 3">
                        <div class="overlay"></div>
                        <h1>GEOLOGÍA</h1>
                    </div>
                    <br>
                    <div class="service">
                        <img src="img/8.jpg" alt="Servicio 4">
                        <div class="overlay"></div>
                        <h1>COMERCIALIZACIÓN DE EQUIPOS</h1>
                    </div>
                    <br>
                  
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
                            <li><a href="{{ route('us') }}">Nosotros</a></li>
                            <li><a href="{{ route('ser') }}">Servicios</a></li>
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