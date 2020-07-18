
var dropdown_main_nav = document.querySelector(".dropdown_main_nav");
// var navbar_toggler = document.querySelector(".navbar-toggle");
var navbar_toggler = document.getElementById("navbarToggler");
navbar_toggler.addEventListener("click", open_dropdown_nav);

var nav_shown = false;
function open_dropdown_nav() {
    if (nav_shown === false) {
        if (!dropdown_main_nav.classList.contains("show")) {
            navbar_toggler.firstElementChild.classList.remove("fa-bars");
            navbar_toggler.firstElementChild.classList.add("fa-plus");
        }
        nav_shown = true;
    }
    else if (nav_shown != false) {
        if (dropdown_main_nav.classList.contains("show")) {
            navbar_toggler.firstElementChild.classList.add("fa-bars");
            navbar_toggler.firstElementChild.classList.remove("fa-plus");
        }
        nav_shown = false;
    }
}


// Account page menu toggler
var acct_side_nav = document.querySelector(".acct_side_nav");
// var acct_pg_menu_toggler = document.querySelector(".acct_pg_menu_toggler");
var acct_pg_menu_toggler = document.getElementById("acct_pg_menu_toggler");
// var navbar_toggler = document.getElementById("navbarToggler");

if (acct_pg_menu_toggler != null) {
    acct_pg_menu_toggler.addEventListener("click", open_acct_side_nav);
}

var nav_shown = false;
function open_acct_side_nav() {
    if (nav_shown === false) {
        console.log("jlljJLUHI");
        this.classList.remove("fa-bars");
        this.classList.add("fa-plus");
        acct_side_nav.style.left = "0";
        nav_shown = true;
    }
    else if (nav_shown != false) {
        this.classList.add("fa-bars");
        this.classList.remove("fa-plus");
        acct_side_nav.style.left = "-250px";
        nav_shown = true;
        nav_shown = false;
    }
}




// JQUERY
$(document).ready(function () {


    // Feedbacks slider
    $(".feedbacks_slider").owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        dots: false,
        autoplay: true,
        autoplayTimeout: 7000,
        animateOut: true,
        fluidSpeed: 3,
        smartSpeed: 1000,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    });


    var feedbacks = $('.feedbacks_slider');
    feedbacks.owlCarousel();
    // Go to the next feedback cards
    $('.customNextBtn').click(function () {
        feedbacks.trigger('next.owl.carousel', [900]);
    })
    // Go to the previous feedback cards
    $('.customPrevBtn').click(function () {
        // With optional speed parameter
        // Parameters has to be in square bracket '[]'
        feedbacks.trigger('prev.owl.carousel', [900]);
    })

    // recommended_product_slider
    $(".recommended_product_slider").owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        dots: false,
        autoplay: true,
        autoplayTimeout: 7000,
        animateOut: true,
        fluidSpeed: 3,
        smartSpeed: 1000,
        responsive: {
            0: {
                items: 2
            },
            600: {
                items: 4
            },
            1000: {
                items: 6
            }
        }
    });


    var recommended_product_slider = $('.recommended_product_slider');
    recommended_product_slider.owlCarousel();
    // Go to the next product cards
    $('.custom_prod_NextBtn').click(function () {
        recommended_product_slider.trigger('next.owl.carousel', [900]);
    })
    // Go to the previous product cards
    $('.custom_prod_PrevBtn').click(function () {
        // With optional speed parameter
        // Parameters has to be in square bracket '[]'
        recommended_product_slider.trigger('prev.owl.carousel', [900]);
    })






    // Search input component

    var search_input = document.querySelector("#search_input");
    search_input.addEventListener('keyup', function () {
        if ($(this).val() != "") {
            $(this).css({
                "transform": "scaleX(1)",
            });
            $(this).siblings().css({
                "transform": "scaleX(1)",
            })

        }
        else {
            $(this).css({
                "transform": "scaleX(0)",
            });
            $(this).siblings().css({
                "transform": "scaleX(0)",
            })
        }
    });


    // Account page menu toggler
    // $(".acct_pg_menu_toggler").click(function () {
    //     $(".acct_side_nav").css({ "left": "0" });
    //     console.log($(this))
    //     $(this).removeClass("fa-bars")
    //     $(this).removeClass("acct_pg_menu_toggler")
    //     $(this).addClass("fa-plus")
    //     $(this).addClass("acct_pg_menu_cancel_toggler")
    // })
    // $(".acct_pg_menu_cancel_toggler").click(function () {
    //     $(".acct_side_nav").css({ "left": "-200px" });
    //     console.log($(this))
    //     $(this).removeClass("fa-plus")
    //     $(this).addClass("fa-bars")
    //     $(this).removeClass("acct_pg_menu_cancel_toggler")
    //     $(this).addClass("acct_pg_menu_toggler")
    // })

});

