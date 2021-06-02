const mainMenu = document.querySelector('.mainMenu');
const openMenu = document.querySelector('.openMenu');
const closeMenu = document.querySelector('.closeMenu');


openMenu.addEventListener('click', show);
closeMenu.addEventListener('click', close);

function show() {
  mainMenu.style.display = 'flex';
  mainMenu.style.top = '0';
}

function close() {
  mainMenu.style.top = '-100%';
}

// Nos produits papeterie
const carte = document.getElementById('carte');
const papete = document.getElementById('papete');
const deco = document.getElementById('deco');
const voirPape = document.querySelectorAll('.voirPape');

array = {
  0: carte,
  1: papete,
  2: deco
}
// Afficher le button + 
// JAVASCRIPT FOR INDEX PAGE 
const host = "http://localhost/b-sitevitrine/index.php";
if (window.location.href === host + '#histoire' ||
window.location.href === host + '#aproposdenous' ||
window.location.href === host + '#nosproduits' ||
window.location.href === host + '#papeterie' ||
window.location.href === host ||
window.location.href === host + '#boutique' 
&& window.innerWidth > 768) {
  Object.keys(array).forEach(function (key) {
    //console.log(key, this[key]);
    this[key].addEventListener('mouseenter', function remove() {
      voirPape[key].classList.remove('dispNone');
    })
  }, array);

  // Enlever le button
  Object.keys(array).forEach(function (keys) {
    //console.log(key, this[key]);
    this[keys].addEventListener('mouseleave', function add() {
      voirPape[keys].classList.add('dispNone');
    })
  }, array);
}








// function add0(){
//   voirPape[0].classList.add('dispNone');
//   }
// function add1(){
//   voirPape[1].classList.add('dispNone');
//   }


