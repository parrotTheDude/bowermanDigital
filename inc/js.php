let burger = document.getElementById('burger');
nav = document.getElementById('main-nav');
head = document.getElementById('header');

burger.addEventListener('click', function(e){
  this.classList.toggle('is-open');
  nav.classList.toggle('is-open');
  head.classList.toggle('is-open');
});



