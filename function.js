document.addEventListener('DOMContentLoaded', function() {
    const hamburgerButton = document.querySelector('.hamburger-button');
    const mobileMenu = document.querySelector('.mobile-menu');
  
    hamburgerButton.addEventListener('click', function() {
      mobileMenu.classList.toggle('open');
    });
  });
  window.addEventListener('scroll', function() {
    const header = document.getElementById('header');
    const headerHeight = header.offsetHeight; // Получаем высоту шапки
  
    // Если прокрутка ниже определенного порога (например, высоты шапки)
    if (window.pageYOffset > headerHeight) {
      header.classList.add('header-fixed');
    } else {
      header.classList.remove('header-fixed');
    }
  });