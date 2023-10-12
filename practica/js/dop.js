// меню-бургер
const nav = document.querySelector('#nav');
const navBtn = document.querySelector('#nav-btn');
const navBtnImg = document.querySelector('#nav-btn-img');

navBtn.onclick = () => {
    if (nav.classList.toggle('open')) {
        navBtnImg.src = "../img/icons/nav-close.svg";
    } else {
        navBtnImg.src = '../img/icons/nav-open.svg';
    }
}

// вызов библиотеки AOS для анимации
AOS.init();

// капча
window.addEventListener('load', () => {
    const $recaptcha = document.querySelector('#g-recaptcha-response');
    if ($recaptcha) {
      $recaptcha.setAttribute('required', 'required');
    }
  })