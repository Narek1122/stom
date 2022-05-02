const hamburger = document.querySelector('.hamburger');
const navMenu = document.querySelector('.nav_menu');

hamburger.addEventListener('click', () => {
  hamburger.classList.toggle('active');
  navMenu.classList.toggle('active');
});

document.querySelectorAll('.nav_link').forEach((n) =>
  n.addEventListener('click', () => {
    hamburger.classList.remove('active');
    navMenu.classList.remove('active');
  })
);

// nav_menu --------------------------------------------------------------

const slider = document.querySelector('.slider');
const nextBtn = document.querySelector('.next-btn');
const prevBtn = document.querySelector('.prev-btn');
const slides = document.querySelectorAll('.slide');
const slideIcons = document.querySelectorAll('.slide-icon');
const numberOfSlides = slides.length;
var slideNumber = 0;

//image slider next button

nextBtn.addEventListener('click', () => {
  slides.forEach((slide) => {
    slide.classList.remove('active');
  });
  slideIcons.forEach((slideIcon) => {
    slideIcon.classList.remove('active');
  });
  slideNumber++;

  if (slideNumber > numberOfSlides - 1) {
    slideNumber = 0;
  }

  slides[slideNumber].classList.add('active');
  slideIcons[slideNumber].classList.add('active');
});

//image slider previous button

prevBtn.addEventListener('click', () => {
  slides.forEach((slide) => {
    slide.classList.remove('active');
  });
  slideIcons.forEach((slideIcon) => {
    slideIcon.classList.remove('active');
  });
  slideNumber--;

  if (slideNumber < 0) {
    slideNumber = numberOfSlides - 1;
  }

  slides[slideNumber].classList.add('active');
  slideIcons[slideNumber].classList.add('active');
});

//image slider autoplay
var playSlider;

var repeater = () => {
  playSlider = setInterval(function () {
    slides.forEach((slide) => {
      slide.classList.remove('active');
    });
    slideIcons.forEach((slideIcon) => {
      slideIcon.classList.remove('active');
    });
    slideNumber++;

    if (slideNumber > numberOfSlides - 1) {
      slideNumber = 0;
    }

    slides[slideNumber].classList.add('active');
    slideIcons[slideNumber].classList.add('active');
  }, 5000);
};
repeater();

// stop the image slider autoplay on mouseover
slider.addEventListener('mouseover', () => {
  clearInterval(playSlider);
});

// start the image slider autoplay again on mouseout

slider.addEventListener('mouseout', () => {
  repeater();
});

// slider-------------------------------------------------------------------------

var modal = document.getElementById('modal');
var closeX = document.getElementById('slider_x');
var closeBtn = document.getElementById('slider_btn');

function openModalFn(index) {
  var cardNodeList = document.querySelectorAll('.filters-nav');
  var cardList = Array.from(cardNodeList);
  var selectedCard;

  for(var i = 0; i < cardList.length; i++) {
    if(index === cardList[i].attributes.cardIndex.value) {
      
      selectedCard = cardList[i];
    }
  }


  var cardName = selectedCard.children.cardName.textContent;
  var cardImage = selectedCard.children.cardImage.src;
  var doctorName = document.getElementById('doctor-name');
  var doctorImage = document.getElementById('doctor-img');
  doctorName.textContent = cardName;
  doctorImage.src = cardImage;
  modal.style.display = 'block';
}

function closeModalFn() {
  modal.style.display = 'none';
}

closeX.addEventListener('click', closeModalFn);
closeBtn.addEventListener('click', closeModalFn);







