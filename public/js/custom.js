$(document).ready( function() {
    $('#detailCarousel').carousel({
        interval:   4000
    });

    var clickEvent = false;
    $('#myCarousel').on('click', '.nav a', function() {
        clickEvent = true;
        $('.nav li').removeClass('active');
        $(this).parent().addClass('active');
    }).on('slid.bs.carousel', function(e) {
        if(!clickEvent) {
            var count = $('.nav').children().length -1;
            var current = $('.nav li.active');
            current.removeClass('active').next().addClass('active');
            var id = parseInt(current.data('slide-to'));
            if(count == id) {
                $('.nav li').first().addClass('active');
            }
        }
        clickEvent = false;
    });
});





$(function() {

    $('#login-form-link').click(function(e) {
    $("#login-form").delay(100).fadeIn(100);
    $("#register-form").fadeOut(100);
    $('#register-form-link').removeClass('active');
    $(this).addClass('active');
    e.preventDefault();
  });
  $('#register-form-link').click(function(e) {
    $("#register-form").delay(100).fadeIn(100);
    $("#login-form").fadeOut(100);
    $('#login-form-link').removeClass('active');
    $(this).addClass('active');
    e.preventDefault();
  });

});




    $(document).ready(function () {
        var carousel = $("#owl-demo");
        carousel.owlCarousel({
            rewindNav : false,
            pagination:false,
            navigation:true,
            autoWidth:true,
            items: 4,
            navigationText: [
                "<i class='fa fa-angle-left fa-5x' style='line-height: 350px;vertical-align: middle;'></i>",
                "<i class='fa fa-angle-right fa-5x' style='line-height: 350px;vertical-align: middle;'></i>"
            ],
            afterAction: function(){
                if ( this.itemsAmount > this.visibleItems.length ) {
                    $('.next').show();
                    $('.prev').show();

                    $('.next').removeClass('disabled');
                    $('.next').removeClass('nothing-pre');
                    $('.prev').removeClass('disabled');
                    $('.prev').removeClass('nothing-pre');
                    if ( this.currentItem == 0 ) {
                        $('.prev').addClass('disabled');
                        $('.prev').addClass('nothing-pre');

                    }
                    if ( this.currentItem == this.maximumItem ) {
                        $('.next').addClass('disabled');
                        $('.next').addClass('nothing-pre');
                    }

                } else {
                    $('.next').hide();
                    $('.prev').hide();
                }
            }
        });
        // Custom Navigation Events
        $(".next").click(function(){
            owl.trigger('owl.next');
        })
        $(".prev").click(function(){
            owl.trigger('owl.prev');
        })

    });