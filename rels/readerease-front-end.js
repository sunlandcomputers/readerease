/* begin Back to Top button & show menu @package tinydancer */

(function() {
  'use strict';

  function trackScroll() {
    var scrolled = window.scrollY;
    var coords = document.documentElement.clientHeight;

    if (scrolled > coords) {
      goTopBtn.classList.add('back_to_top-show');
    }
    if (scrolled < coords) {
      goTopBtn.classList.remove('back_to_top-show');
    }
  }

  function backToTop() {
    if (window.scrollY > 0) {
      window.scrollBy(0, -80);
      setTimeout(backToTop, 0);
    }
  }

  var goTopBtn = document.querySelector('.back_to_top');

  window.addEventListener('scroll', trackScroll);
  goTopBtn.addEventListener('click', backToTop);

  document.getElementById("nav_button").addEventListener('click', openMenu );
  function openMenu(){
    
    var opv = true; //document.getElementById("open_menu").checked;
    var x = document.getElementsByClassName("page-nav-wrapper")[0];
    if( true === opv ) {

      if (x.style.display === "flex") {
        x.style.display = "none";
      } else {
        x.style.display = "flex";
      }
    }
    
    return false;
    //console.log(opv);
  } 

})(); 


(function() {
  'use strict';
  
  const mobileMenu = document.querySelector('.page-nav-wrapper');
  var openMenuBtn = document.querySelector('.js-open-menu');
  var closeMenuBtn = document.querySelector('.js-close-menu');

  const toggleMenu = () => {
    const isMenuOpen =
      openMenuBtn.getAttribute('aria-expanded') === 'true' || false;
    openMenuBtn.setAttribute('aria-expanded', !isMenuOpen);
    mobileMenu.classList.toggle('is-open');

    const scrollLockMethod = !isMenuOpen
      ? 'disableBodyScroll'
      : 'enableBodyScroll';
    bodyScrollLock[scrollLockMethod](document.body); 
  };

  openMenuBtn.addEventListener('click', toggleMenu);
  closeMenuBtn.addEventListener('click', toggleMenu);

  // Close the mobile menu on wider screens if the device orientation changes
  window.matchMedia('(min-width: 979px)').addEventListener('change', e => {
    if (!e.matches) return;
    mobileMenu.classList.remove('is-open');
    openMenuBtn.setAttribute('aria-expanded', false);
    //bodyScrollLock.enableBodyScroll(document.body);
  });
})();


(function() {
  'use strict';
document.addEventListener('DOMContentLoaded', () => {
  const increaseFontSizeButton = document.getElementById('increase-font-size');

  increaseFontSizeButton.addEventListener('click', () => {
    const xhr = new XMLHttpRequest();
    xhr.open('POST', ajaxurl, true); 
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    xhr.onload = function() {
      if (xhr.status === 200) {
        const contentContainers = document.querySelectorAll('.content-container');
        contentContainers.forEach(container => {
          container.style.fontSize = '1.25em';
        });
      }
    };

    const data = new URLSearchParams();
    data.append('action', 'change_font_size'); 
    xhr.send(data);
  });
});
})();