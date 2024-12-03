$(document).ready(function(){
    $(".hamburger").click(function(){
        $(".top-menu").css("right", "0");
    });

    $(".close").click(function(){
        $(".top-menu").css("right", "-100vw");
    });
});


window.addEventListener('scroll', function () {
    console.log('Scroll event detected'); // Periksa apakah event ini dipanggil
    const navbar = document.querySelector('nav');
    if (window.scrollY > 50) {
        navbar.classList.add('scrolled');
        console.log('Class "scrolled" added');
    } else {
        navbar.classList.remove('scrolled');
        console.log('Class "scrolled" removed');
    }
});
