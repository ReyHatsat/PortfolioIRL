<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portfolio Daniel Tinajero</title>
  <link rel="stylesheet" href="CSS/normalize.css">
  <link rel="stylesheet" href="CSS/index.css">
  <link rel="stylesheet" href="CSS/carrousel.css">
  <link rel="stylesheet" href="CSS/contact.css">
  <script defer src="JS/jquery-3.6.4.min.js"></script>
  <script defer src="JS/index.js"></script>
  <script defer src="JS/carrousel.js"></script>
</head>
<body>
  <header>
    <nav>
      <ul id="main-ul">
        <li>
          <a id="inicio" class="boton medio button" href="#sectionone">Home</a>
        </li>
        <li>
          <a class="boton medio button" href="#sectiontwo">Portafolio</a>
        </li>
        <li>
          <a class="boton medio button" href="#sectiontree">Contact</a>
        </li>
      </ul>
      <div id="menuToggle">
        <input type="checkbox" />
        <span></span>
        <span></span>
        <span></span>
        <ul id="menu">
        <a href="#sectionone"><li>Home</li></a>
        <a href="#sectiontwo"><li>Portafolio</li></a>
        <a href="#sectiontree"><li>Contact</li></a>
    </ul>
  </div>
    </nav>
  </header>
  <div id="fullPage">
    <div class="section s1" id="sectionone">
      <div class="typing-container">
        <h3 class="dtqname">Daniel Tinajero Quesada</h3>
        <h3 class="dtqnametwo">software developer</h3>
        <div class="typing-box"></div>
        <a href="#sectiontwo"><img src="Imgs/Assets/arrow-down.gif" id="arrowdown"></a>
      </div>
    </div>
    <div class="section s2" id="sectiontwo">
      <div class="container">
        <div id="carousel-container">
          <div class="card-container">
            <button id="prev-btn"><svg version="1.1" id="icons_1_" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 128 128" style="enable-background:new 0 0 128 128" xml:space="preserve">
                <style>
                  .st0 {
                    display: none
                  }
                  .st1 {
                    display: inline
                  }
                  .st2 {
                    fill: #0a0a0a
                  }
                </style>
                <g id="row2_1_">
                  <g id="_x32__4_">
                    <path class="st2" d="M64 .3C28.7.3 0 28.8 0 64s28.7 63.7 64 63.7 64-28.5 64-63.7S99.3.3 64 .3zm0 121C32.2 121.3 6.4 95.7 6.4 64 6.4 32.3 32.2 6.7 64 6.7s57.6 25.7 57.6 57.3c0 31.7-25.8 57.3-57.6 57.3zm22.4-63.7H57.6l12.3-15.2c0-2.2-1.8-3.9-3.9-3.9h-7.1L32 64l26.8 25.5H66c2.2 0 3.9-1.8 3.9-3.9L57.1 69.9h28.6c2.2 0 3.9-1.8 3.9-3.9v-4c0-2.1-1-4.4-3.2-4.4z" id="left_1_" />
                  </g>
                </g>
              </svg></button>
            <button id="next-btn"><svg version="1.1" id="icons_1_" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 128 128" style="enable-background:new 0 0 128 128" xml:space="preserve">
                <style>
                  .st0 {
                    display: none
                  }

                  .st1 {
                    display: inline
                  }

                  .st2 {
                    fill: #0a0a0a
                  }
                </style>
                <g id="row2_1_">
                  <g id="_x33__3_">
                    <path class="st2" d="M64 .3C28.8.3.3 28.8.3 64s28.5 63.7 63.7 63.7 63.7-28.5 63.7-63.7S99.2.3 64 .3zm0 121C32.3 121.3 6.7 95.7 6.7 64 6.7 32.3 32.3 6.7 64 6.7c31.7 0 57.3 25.7 57.3 57.3 0 31.7-25.6 57.3-57.3 57.3zm-2-82.8c-2.2 0-3.9 1.8-3.9 3.9l12.2 15.2H41.7c-2.2 0-3.2 2.2-3.2 4.4v4c0 2.2 1.8 3.9 3.9 3.9h28.4L58.1 85.6c0 2.2 1.8 3.9 3.9 3.9h7.1L95.8 64 69.1 38.5H62z" id="right_1_" />
                  </g>
                </g>
              </svg></button>
            <div class="card">
              <div class="left-section">
                <img src="" alt="Imagen">
              </div>
              <div class="right-section">
                <h2 id="nameCard">Título</h2>
                <p id="descriptionCard">Texto</p>
                <p id="wipCard">Status</p>
                <a id="githublinkCard" href="">
                  <img src="Imgs/Assets/GitHubLink.svg" alt="">
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="section s3" id="sectiontree">
      <div class="containercontact">
        <div id="socialmedia">
          <a href="https://www.linkedin.com/in/dtq/">
            <svg class="svgicons" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="70" height="70" viewBox="0 0 50 50">
              <path d="M25,2C12.318,2,2,12.317,2,25s10.318,23,23,23s23-10.317,23-23S37.682,2,25,2z M18,35h-4V20h4V35z M16,17 c-1.105,0-2-0.895-2-2c0-1.105,0.895-2,2-2s2,0.895,2,2C18,16.105,17.105,17,16,17z M37,35h-4v-5v-2.5c0-1.925-1.575-3.5-3.5-3.5 S26,25.575,26,27.5V35h-4V20h4v1.816C27.168,20.694,28.752,20,30.5,20c3.59,0,6.5,2.91,6.5,6.5V35z"></path>
            </svg>
          </a>
          <a href="https://github.com/ReyHatsat">
            <svg class="svgicons" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="70" height="70" viewBox="0 0 50 50">
              <path d="M17.791,46.836C18.502,46.53,19,45.823,19,45v-5.4c0-0.197,0.016-0.402,0.041-0.61C19.027,38.994,19.014,38.997,19,39 c0,0-3,0-3.6,0c-1.5,0-2.8-0.6-3.4-1.8c-0.7-1.3-1-3.5-2.8-4.7C8.9,32.3,9.1,32,9.7,32c0.6,0.1,1.9,0.9,2.7,2c0.9,1.1,1.8,2,3.4,2 c2.487,0,3.82-0.125,4.622-0.555C21.356,34.056,22.649,33,24,33v-0.025c-5.668-0.182-9.289-2.066-10.975-4.975 c-3.665,0.042-6.856,0.405-8.677,0.707c-0.058-0.327-0.108-0.656-0.151-0.987c1.797-0.296,4.843-0.647,8.345-0.714 c-0.112-0.276-0.209-0.559-0.291-0.849c-3.511-0.178-6.541-0.039-8.187,0.097c-0.02-0.332-0.047-0.663-0.051-0.999 c1.649-0.135,4.597-0.27,8.018-0.111c-0.079-0.5-0.13-1.011-0.13-1.543c0-1.7,0.6-3.5,1.7-5c-0.5-1.7-1.2-5.3,0.2-6.6 c2.7,0,4.6,1.3,5.5,2.1C21,13.4,22.9,13,25,13s4,0.4,5.6,1.1c0.9-0.8,2.8-2.1,5.5-2.1c1.5,1.4,0.7,5,0.2,6.6c1.1,1.5,1.7,3.2,1.6,5 c0,0.484-0.045,0.951-0.11,1.409c3.499-0.172,6.527-0.034,8.204,0.102c-0.002,0.337-0.033,0.666-0.051,0.999 c-1.671-0.138-4.775-0.28-8.359-0.089c-0.089,0.336-0.197,0.663-0.325,0.98c3.546,0.046,6.665,0.389,8.548,0.689 c-0.043,0.332-0.093,0.661-0.151,0.987c-1.912-0.306-5.171-0.664-8.879-0.682C35.112,30.873,31.557,32.75,26,32.969V33 c2.6,0,5,3.9,5,6.6V45c0,0.823,0.498,1.53,1.209,1.836C41.37,43.804,48,35.164,48,25C48,12.318,37.683,2,25,2S2,12.318,2,25 C2,35.164,8.63,43.804,17.791,46.836z"></path>
            </svg>
          </a>
          <a href="https://www.facebook.com/danielesteban.tinajeroquesada/">
            <svg class="svgicons" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="70" height="70" viewBox="0 0 50 50">
              <path d="M25,3C12.85,3,3,12.85,3,25c0,11.03,8.125,20.137,18.712,21.728V30.831h-5.443v-5.783h5.443v-3.848 c0-6.371,3.104-9.168,8.399-9.168c2.536,0,3.877,0.188,4.512,0.274v5.048h-3.612c-2.248,0-3.033,2.131-3.033,4.533v3.161h6.588 l-0.894,5.783h-5.694v15.944C38.716,45.318,47,36.137,47,25C47,12.85,37.15,3,25,3z"></path>
            </svg>
          </a>
          <a href="mailto:daniel_t93@hotmail.com">
            <svg class="svgicons" fill="#000000" width="70px" height="70px" viewBox="-1 0 19 19" xmlns="http://www.w3.org/2000/svg" class="cf-icon-svg">
              <path d="M16.5 9.5a8 8 0 1 1-8-8 8 8 0 0 1 8 8zm-9.832.256L2.833 6.928v5.286zM3.824 6.665l3.743 2.76a1.684 1.684 0 0 0 1.844 0l3.743-2.76zm9.03 5.674-3.26-2.091a2.545 2.545 0 0 1-2.21 0l-3.263 2.091zm1.291-5.41L10.31 9.756l3.835 2.46z" />
            </svg>
          </a>
        </div>

        <div class="aboutme">
          <p id="aboutmetext">
              aboutmetext
          </p>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
</body>
</html>