$(".step").click(function() {
    $(this).addClass("active").prevAll().addClass("active");
    $(this).prevAll().removeClass("active");
    $(this).nextAll().removeClass("active");
});

$(".step01").click(function() {
    // $("#line-progress").css("width", "0%");
    $(".step1").addClass("active").siblings().removeClass("active");
});

$(".step02").click(function() {
    // $("#line-progress").css("width", "40%");
    $(".step2").addClass("active").siblings().removeClass("active");
});

$(".step03").click(function() {
    // $("#line-progress").css("width", "70%");
    $(".step3").addClass("active").siblings().removeClass("active");
});
$(".step04").click(function() {
    // $("#line-progress").css("width", "100%");
    $(".step4").addClass("active").siblings().removeClass("active");
});

// Modal Video
$(document).ready(function() {
    var $videoSrc;
    $('.video-btn').click(function() {
        $videoSrc = $(this).data("src");
    });
    console.log($videoSrc);
    // when the modal is opened autoplay it  
    $('#myModal').on('shown.bs.modal', function(e) {
            // set the video src to autoplay and not to show related video. Youtube related video is like a box of chocolates... you never know what you're gonna get
            $("#video").attr('src', $videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0");
        })
        // stop playing the youtube video when I close the modal
    $('#myModal').on('hide.bs.modal', function(e) {
            // a poor man's stop video
            $("#video").attr('src', $videoSrc);
        })
        // document ready  
        // Active Sidemenu
    $(".nev_menu .nav-item a").each(function() {
        var pageUrl = window.location.href.split(/[?#]/)[0];
        if (this.href == pageUrl) {
            $(this).addClass("active");
            // $(this).parent().addClass("active"); // add active to li of the current link
            $(this).parent().addClass("show"); // add active class to an anchor
            //  $(this).parent().parent().prev().click(); // click the item to make it drop
            //  $(this).parent().parent().parent().parent().prev().click();
            // $('.aside-menu .menu-item.active').parents('li').addClass('active');
        }
    });
        $("section").click(function(){
            $("#navbarCollapse").removeClass("show");
        });
});

function reveal() {
    var reveals = document.querySelectorAll(".reveal");

    for (var i = 0; i < reveals.length; i++) {
        var windowHeight = window.innerHeight;
        var elementTop = reveals[i].getBoundingClientRect().top;
        var elementVisible = 150;

        if (elementTop < windowHeight - elementVisible) {
            reveals[i].classList.add("active");
        } else {
            reveals[i].classList.remove("active");
        }
    }
}

function effect() {
    var effects = document.querySelectorAll(".effect");

    for (var i = 0; i < effects.length; i++) {
        var windowHeight = window.innerHeight;
        var elementTop = effects[i].getBoundingClientRect().top;
        var elementVisible = 150;

        if (elementTop < windowHeight - elementVisible) {
            effects[i].classList.add("active");
        } else {
            effects[i].classList.remove("active");
        }
    }
}
window.addEventListener("scroll", reveal);
window.addEventListener("scroll", effect);
$(window).scroll(function() {

    //Zoom-in
    $('.zoom-in').each(function() {
        var zoomIn = 1,
            zoomOut = 0;

        if (isScrolledIntoView($(this))) {
            $(this).css({
                '-webkit-transform': 'scale(' + zoomIn + ')',
                'transform': 'scale(' + zoomIn + ')'
            });
        } else {
            $(this).css({
                '-webkit-transform': 'scale(' + zoomOut + ')',
                'transform': 'scale(' + zoomOut + ')'
            });
        }
    });
});

function isScrolledIntoView(elem) {
    var $elem = $(elem);
    var $window = $(window);

    var docViewTop = $window.scrollTop();
    var docViewBottom = docViewTop + $window.height();

    var elemTop = $elem.offset().top;
    var elemBottom = elemTop + $elem.height();

    return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
}

// Banner title
// var words = ['Transform Your Campus Services into a Personalised Mobile Experience'],
//     part,
//     i = 0,
//     offset = 0,
//     len = words.length,
//     forwards = true,
//     skip_count = 0,
//     skip_delay = 15,
//     speed = 70;
// var wordflick = function() {
//     setInterval(function() {
//         if (forwards) {
//             if (offset >= words[i].length) {
//                 ++skip_count;
//                 if (skip_count == skip_delay) {
//                     forwards = false;
//                     skip_count = 0;
//                 }
//             }
//         } else {
//             if (offset == 0) {
//                 forwards = true;
//                 i++;
//                 offset = 0;
//                 if (i >= len) {
//                     i = 0;
//                 }
//             }
//         }
//         part = words[i].substr(0, offset);
//         if (skip_count == 0) {
//             if (forwards) {
//                 offset++;
//             } else {
//                 offset--;
//             }
//         }
//         $('.word').text(part);
//     }, speed);
// };

// $(document).ready(function() {
//     wordflick();
// });