$(window).scroll(function() {
    var scroll = $(window).scrollTop();
    var objectSelect = $("body");
    var objectPosition = objectSelect.offset().top + 62;
    if (scroll > objectPosition) {
        $("header").addClass("sticky");
    } else {
        $("header").removeClass("sticky");
    }
});
