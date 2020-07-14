jQuery(document).foundation();

 var $ = jQuery; //declared jquery globally as '$'

// custom scripts
$( ".wishIcon" ).click(function() {
  $(".wishIcon").toggleClass('fas');
});



$( document ).ready(function() {
    var projectName = $(".projectTitleWrapper h3").html();
    console.log(projectName);
    $("#projectnameInput").val(projectName);
});

// smooth scroll anchor - project page
$(function() {
        $('.projectNavButtons a').click(function() {
          if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
              $('html, body').animate({
                scrollTop: target.offset().top - 100 
              }, 1000);
              return false;
          }
        }
    });
});