const menuBtn = document.querySelector('.menu-btn');
const hamburger = document.querySelector('.menu-btn__burger');
const nav = document.querySelector('nav');

menuBtn.addEventListener('click', () => {
  hamburger.classList.toggle('open');
  nav.classList.toggle('open');
});