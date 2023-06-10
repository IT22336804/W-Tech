const carousel = document.querySelector('.carousel');
const carouselList = carousel.querySelector('.carousel__list');
const prevButton = carousel.querySelector('.prev');
const nextButton = carousel.querySelector('.next');

let translateX = 0;
const itemWidth = carouselList.firstElementChild.offsetWidth;
const totalItems = carouselList.childElementCount;

nextButton.addEventListener('click', () => {
  translateX -= itemWidth;
  carouselList.style.transform = `translateX(${translateX}px)`;
  
  if (translateX < -itemWidth * (totalItems - 1)) {
    translateX = 0;
    carouselList.style.transform = `translateX(${translateX}px)`;
  }
});

prevButton.addEventListener('click', () => {
  translateX += itemWidth;
  carouselList.style.transform = `translateX(${translateX}px)`;
  
  if (translateX > 0) {
    translateX = -itemWidth * (totalItems - 1);
    carouselList.style.transform = `translateX(${translateX}px)`;
  }
});

