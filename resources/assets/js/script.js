import $ from 'jquery';
import WOW from 'wow.js';

$(document).ready(function () {
    "use strict";

    /* ===================================
        Remove Hidden Class from Side Menu
    ====================================== */
    $('.side-menu').removeClass('hidden');

    /* ===================================
        Smooth Scroll for Anchor Links
    ====================================== */
    $("a.pagescroll").on("click", function (event) {
        event.preventDefault();
        $("html, body").animate({
            scrollTop: $(this.hash).offset().top
        }, 1200);
    });

    $('.btn-conversion').on('click', function(e) {
        e.preventDefault();
        // send_to value should come from data-conversion-id attribute
        gtag('event', 'conversion', {
            'send_to': $(this).data('conversion-id'),
        });

        window.location.href = $(this).attr('href');
    });

    /* ===================================
        WOW.js Initialization (Animation)
    ====================================== */
    if ($(window).width() > 991) {
        new WOW({
            boxClass: 'wow',
            animateClass: 'animated',
            offset: 0,
            mobile: false,
            live: true
        }).init();
    }

    /* ===================================
        Header Appear on Scroll
    ====================================== */
    $(window).on('scroll', function () {
        if ($(this).scrollTop() > 260) {
            $('header').addClass('header-appear');
        } else {
            $('header').removeClass('header-appear');
        }
    });

    /* ===================================
        Smooth Scroll for .scroll Links
    ====================================== */
    $(".scroll").on("click", function (event) {
        event.preventDefault();
        $('html, body').animate({
            scrollTop: $(this.hash).offset().top
        }, 1100);
    });

    /* ===================================
        Side Menu Toggle
    ====================================== */
    $(document).ready(function () {
        // Toggle Side Menu
        $("#sidemenu_toggle").on("click", function () {
            console.log("Menu opened");
            $(".pushwrap").toggleClass("active");
            console.log("Pushwrap")
            $(".side-menu").toggleClass("side-menu-active");

            $("#close_side_menu").addClass("active");
            console.log("menu active post");

            // Force reflow to trigger transition properly
            void document.querySelector(".side-menu").offsetWidth; // Reflow trigger
        });

        // Close Side Menu
        $("#close_side_menu, #btn_sideNavClose").on("click", function () {
            $(".side-menu").removeClass("side-menu-active");
            console.log("side menu active removed")
            $("#close_side_menu").removeClass("active"); // Hide overlay
            console.log("close side menu active removed")
            $(".pushwrap").removeClass("active");
            console.log("pushwrap active removed")
        });
    });

    /* ===================================
        Go to Top Button Scroll
    ====================================== */
    $(window).on('scroll', function () {
        if ($(this).scrollTop() > 600) {
            $('.go-top').addClass('active');
        } else {
            $('.go-top').removeClass('active');
        }
    });

    $('.go-top').on('click', function () {
        $("html, body").animate({ scrollTop: 0 }, 500);
    });

});
