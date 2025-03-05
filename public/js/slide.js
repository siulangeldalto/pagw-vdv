document.addEventListener("DOMContentLoaded", function() {
  let currentIndex = 0;
  const slides = document.querySelectorAll('.slide');
  const totalImages = slides.length;
  const imageNumbers = document.querySelectorAll('.image-number');
  const nextButton = document.querySelector('.next');
  const prevButton = document.querySelector('.prev');
  let slideInterval;

  // Función para mostrar la imagen actual y actualizar los números
  function showSlide() {
    slides.forEach((slide, index) => {
      slide.classList.remove('active');
      if (index === currentIndex) {
        slide.classList.add('active');
      }
    });

    // Actualiza el número de imagen activa
    imageNumbers.forEach((number, index) => {
      number.classList.remove('active');
      if (index === currentIndex) {
        number.classList.add('active');
      }
    });
  }

  // Función para cambiar de imagen
  function changeSlide(direction) {
    currentIndex = (currentIndex + direction + totalImages) % totalImages; // Calcula el nuevo índice
    showSlide();
    resetAutoChange(); // Reinicia el contador para el cambio automático
  }

  // Función para reiniciar el cambio automático de imágenes
  function resetAutoChange() {
    clearInterval(slideInterval); // Detiene el intervalo anterior
    slideInterval = setInterval(() => {
      changeSlide(1); // Avanza a la siguiente imagen automáticamente
    }, 5000); // Cambia la imagen cada 5 segundos
  }

  // Agregar los eventos de los botones de navegación (flechas)
  if (prevButton && nextButton) {
    prevButton.addEventListener("click", function() {
      changeSlide(-1); // Mueve a la imagen anterior
    });

    nextButton.addEventListener("click", function() {
      changeSlide(1); // Mueve a la siguiente imagen
    });
  }

  // Permitir que el usuario navegue directamente a la imagen al hacer clic en los números
  imageNumbers.forEach(function(button) {
    button.addEventListener('click', function() {
      currentIndex = parseInt(button.getAttribute('data-index')); // Usa el data-index
      showSlide(); // Muestra la imagen correspondiente
      resetAutoChange(); // Reinicia el intervalo de cambio automático
    });
  });

  // Cambio automático cada 5 segundos
  slideInterval = setInterval(() => {
    changeSlide(1); // Avanza a la siguiente imagen cada 5 segundos
  }, 5000);

  // Inicializar la primera imagen
  showSlide();
});
