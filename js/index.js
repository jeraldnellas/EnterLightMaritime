// window.addEventListener('scroll', function(){
//   const header = document.querySelector('header');
//   header.classList.toggle("sticky", window.scrollY > 0)
// });
$(document).ready(function(){
  $('.collapsible').collapsible();
});
      
         
    $(document).ready(function () {
      $('.carousel.carousel-slider').carousel({ 
        fullWidth: true, 
        indicators: true
      });
      $('.modal').modal();
      setInterval(function () {
        $('.carousel.carousel-slider').carousel('next');
      }, 5000); // Change slide every 5 seconds
      $('.parallax').parallax();

      
      
    
    });

    
