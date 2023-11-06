const images = [
  'Imgs/DJI_0078.jpg',
  'Imgs/dji_export_1649622792820.jpg',
  'Imgs/dji_export_1649622838406.jpg',
  'Imgs/dji_export_1649632392502.jpg',
  'Imgs/dji_export_1649632397578.jpg',
  'Imgs/dji_export_1649721571255.jpg',
  // Agrega aquí las rutas de todas las imágenes que quieras mostrar
];
window.addEventListener('load', () => {
  setInterval(changeBackgroundImage, 5000);
});

function getRandomImage() {
  return images[Math.floor(Math.random() * images.length)];
}

function changeBackgroundImage() {
  const newImage = `url(${getRandomImage()})`;
  document.body.style.backgroundImage = newImage;
}

function addImageToBackground() {
  const imageUrl = getRandomImage();
  document.body.style.transition = 'background-image 1s ease-in-out';
  document.body.style.backgroundImage = `url(${imageUrl})`;
  
  setTimeout(() => {
    document.body.style.transition = '';
  }, 1000);
}

window.addEventListener('load', () => {
  addImageToBackground();
  setInterval(addImageToBackground, 5000);
});

/* animación de texto escribiendo*/

$(document).ready(function() {
  $('.typing-box').html('console.log("Hello world!");');
});


