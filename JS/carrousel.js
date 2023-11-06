let aboutmetext = `
I am an experienced programmer with over 5 years of expertise
in software development, both within corporate environments and
personal projects. My primary focus lies in technologies such as
PHP, JS, C++, C#, and, more recently, Python. While my front-end
skills are my current weakness, I am actively working on improving
this aspect.
`

document.getElementById('aboutmetext').innerText = aboutmetext;

(async () => {
    const resp = await fetch("Controller/fetch_data.php")
    const data = await resp.json() 
    const cardContainer = document.querySelector('.card-container');
    const prevBtn = document.getElementById('prev-btn');
    const nextBtn = document.getElementById('next-btn');
    let currentIndex = 0;

const card = document.querySelector('.card');
const textElements = card.querySelectorAll('h2, p, img');
let isTransitioning = false;

function updateCarousel() {
    const cardWidth = document.querySelector('.card').clientWidth;
    const offset = -currentIndex * cardWidth;
}

const updateCard = ()=> {
    const currentCard = document.querySelector('.card');
    const { media, name, description, githublink, wip} = data[currentIndex];
    currentCard.querySelector('.left-section img').src = media;
    currentCard.querySelector('#nameCard').textContent = name;
    currentCard.querySelector('#descriptionCard').textContent = description;
    currentCard.querySelector('#githublinkCard').setAttribute("href", githublink);
    let wipselect = "";
    let wipcolors = ""
    switch (wip)
    {
       case "1":
        wipselect = "Finished";
        wipcolors = "#4F6F52"
        break;
       case "2":
        wipselect = "WIP";
        wipcolors = "#F9B572"
        break;
       case "3": 
       wipselect = "Cancelled";
       wipcolors = "#E97777"
           break;
    
       default: 
       wipselect = "Unknow";
    }
    currentCard.querySelector('#wipCard').textContent = wipselect;
    currentCard.querySelector('#wipCard').setAttribute("style", "color:"+wipcolors)
}

function updateButtons() {
    prevBtn.disabled = currentIndex === 0;
    nextBtn.disabled = currentIndex === data.length - 1;
}

prevBtn.addEventListener('click', () => {
    if (!isTransitioning) {
        isTransitioning = true;
        applyBlur();
        setTimeout(() => {
            if (currentIndex > 0) {
                currentIndex--;
                updateCarousel();
                updateCard();
                updateButtons();
            }
            removeBlur();
            isTransitioning = false;
        }, 500); // Tiempo de la transición (0.5 segundos)
    }
});

nextBtn.addEventListener('click', () => {
    if (!isTransitioning) {
        isTransitioning = true;
        applyBlur();
        setTimeout(() => {
            if (currentIndex < data.length - 1) {
                currentIndex++;
                updateCarousel();
                updateCard();
                updateButtons();
            }
            removeBlur();
            isTransitioning = false;
        }, 500); // Tiempo de la transición (0.5 segundos)
    }
});

function applyBlur() {
    textElements.forEach(element => {
        element.style.transition = 'filter 0.5s ease-in-out';
        element.style.filter = 'blur(10px)';
    });
}

function removeBlur() {
    textElements.forEach(element => {
        element.style.transition = 'filter 0.5s ease-in-out';
        element.style.filter = 'none';
    });
}

    updateCarousel();
    updateCard();
    updateButtons();
})()
