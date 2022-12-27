const menuToggle = document.querySelector('.menu-toggle input');
const nav = document.querySelector('div.sidebar');

menuToggle.addEventListener('click', function(){
    nav.classList.toggle('slide');
    menuToggle.classList.toggle('slide-close');
});