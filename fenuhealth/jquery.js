$(document).ready(function() {
  $(".menuButton").click(function() {
    $("#menu").slideToggle(function() {
        $(this).toggleClass("nav-expand").css("display", "");
    });
  });
  
  $(window).bind('scroll', function() {
    if ($(window).scrollTop() > 180) {
      $('.nav-menu').addClass('fixed');
      $('.container').addClass('margin-container');
    } else {
      $('.nav-menu').removeClass('fixed');
      $('.container').removeClass('margin-container');
    }
  });
  
  $(".faq-question").click(function() {
    $(this).next(".faq-answer").slideToggle();
  });

  $(".faq-answer").click(function() {
    $(this).slideToggle();
  });
});
