<!DOCTYPE html> 
    <html>
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="{{ asset('css/general.css') }}">
            <title>VDV Minerales</title>
        </head>
        <body>
            <header>
                <img src="img/ej.png" alt="">
                <nav>
                <ul>
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Nosotros</a></li>
                    <li><a href="#">Contacto</a></l>
                    <li><a href="#">Bootcamps</a></li>
                    <li><a href="#">Contacto</a></li>
                 </ul>
                </nav>
            </header>
            <section class="hero">
                <div class="slides-container">
                  <div class="slide active" style="background-image: url('img/descarga.jpeg');"></div>
                  <div class="slide" style="background-image: url('img/2.jfif');"></div>
                  <div class="slide" style="background-image: url('img/imagen3.jpg');"></div>
                </div>
              
                <!-- Capa de degradado -->
                <div class="overlay"></div>
              
                <!-- Texto fijo sobre el carrusel -->
                <div class="content">
                  <h1>Bienvenido a mi sitio</h1>
                  <p>Somos una empresa innovadora, constituida en el año 2014 como iniciativa de un
                    grupo de jóvenes venezolanos emprendedores, que desean contribuir a la modernización e
                    innovación del sector geotecnológico, minero, petrolero, químico y científico de país.</p>
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
        </body>
    </html>