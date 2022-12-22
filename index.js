const sideMenu = document.querySelector("aside");
const menuBtn = document.querySelector("#menu-btn");
const closeBtn = document.querySelector("#close-btn");
const themeToggler = document.querySelector(".theme-toggler");

// Abre Sidebar
menuBtn.addEventListener('click', () => {
    sideMenu.style.display = 'block';
})

// Fecha Sidebar
closeBtn.addEventListener('click', () => {
    sideMenu.style.display = 'none';
})

//Mudar Tema 
themeToggler.addEventListener('click', () => {
    document.body.classList.toggle('dark-theme-variables');

    themeToggler.querySelector('span:nth-child(1)').classList.toggle('active');  
    themeToggler.querySelector('span:nth-child(2)').classList.toggle('active');  
})

$(document).ready(function(){

    $('.sub-btn').click(function(){
      $(this).next('.sub-menu').slideToggle();
      $(this).find('.dropdown').toggleClass('rotate');
    });

    $('.menu-btn').click(function(){
      $('.side-bar').addClass('active');
      $('.menu-btn').css("visibility", "hidden");
    });

    $('.close-btn').click(function(){
      $('.side-bar').removeClass('active');
      $('.menu-btn').css("visibility", "visible");
    });

});

jQuery(function ($) {

  $('.temSubMenu').on("click", function(){

    $(this).parent().children('.sub-menu').toggle();

  });

});





