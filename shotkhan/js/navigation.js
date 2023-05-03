let menu = document.querySelector('#menu-icon');
let navilist = document.querySelector('.navilist');

menu.onclick = () =>{
  menu.classList.toggle('bx-x');
  navilist.classList.toggle('open');
}

const sr = ScrollReveal({
  distance: '65px',
  duration: 2600,
  delay: 450,
  reset: true
});

sr.reveal('.con-text',{delay:200, origin:'top'});