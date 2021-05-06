(function ($) {
    "use strict"; // Mulai penggunaan strict

    // Smooth scrolling
    $('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function () {
        if (
            location.pathname.replace(/^\//, "") ==
            this.pathname.replace(/^\//, "") &&
            location.hostname == this.hostname
        ) {
            var target = $(this.hash);
            target = target.length
                ? target
                : $("[name=" + this.hash.slice(1) + "]");
            if (target.length) {
                $("html, body").animate(
                    {
                        scrollTop: target.offset().top - 72,
                    },
                    1000,
                    "easeInOutExpo"
                );
                return false;
            }
        }
    });

    // Penutup responsive menu ketika trigger link di klik
    $(".js-scroll-trigger").click(function () {
        $(".navbar-collapse").collapse("hide");
    });

    // Pengaktifan scrollspy untuk menambahkan kelas active di navbar ketika di scroll
    $("body").scrollspy({
        target: "#mainNav",
        offset: 74,
    });

    // Navbar Collapse
    var navbarCollapse = function () {
        if ($("#mainNav").offset().top > 100) {
            $("#mainNav").addClass("navbar-shrink");
        } else {
            $("#mainNav").removeClass("navbar-shrink");
        }
    };
    // Navbar collapse jika page tidak di bagian top
    navbarCollapse();
    // Navbar collapse ketika pagenya di scroll
    $(window).scroll(navbarCollapse);

})(jQuery); // Selesai
