/* ========= INFORMATION ============================
	- author:    Dmytro Lobov
	- url:       https://wow-estore.com
	- email:     givememoney1982@gmail.com
==================================================== */

jQuery('#floatBtn').click(function () {
    jQuery('.flBtn-item').toggleClass('scale-out');
});

function scrollToTop() {
    jQuery('body,html').animate({
        scrollTop: 0
    }, 777);
}

function pageprint() {
    window.print();
}

function smoothscroll(section) {
    jQuery('html, body').animate({
        scrollTop: jQuery(section).offset().top,
    }, 777);
}