$(document).ready(function() {
    function t() {
        var t = $(window).scrollTop(), o = $(".sidebar").offset().top, e = $("#subscribe, #coupon-subscribe, #review-subscribe");
        t > o ? e.addClass("stick") : e.removeClass("stick");
    }
    $(".dropdown-toggle").dropdown(), $(".dropdown input, .dropdown label").click(function(t) {
        t.stopPropagation();
    }), $("body").append('<div class="back-to-top hidden-xs"><span class="glyphicon glyphicon-chevron-up"></span></div>');
    $(window).scroll(function() {
        $(this).scrollTop() > 220 ? $(".back-to-top").fadeIn(500) : $(".back-to-top").fadeOut(500);
    }), $(".back-to-top").click(function(t) {
        return t.preventDefault(), $("html, body").animate({
            scrollTop: 0
        }, 500), !1;
    }), $("li").tooltip({
        selector: "a[data-toggle=tooltip]"
    }), $("h3").tooltip({
        selector: "a[data-toggle=tooltip]"
    }), $(".post-videos").fitVids(), $("#single-carousel").carousel({
        interval: 5e3
    }), $("#coupon-carousel").carousel({
        interval: 5e3
    }), $("#feature-post-carousel").carousel({
        interval: 3e3
    }), function(t) {
        tallest = 0, t.each(function() {
            thisHeight = $(this).height(), thisHeight > tallest && (tallest = thisHeight);
        }), t.each(function() {
            $(this).height(tallest);
        });
    }($(".coupon-thumbnail")), $(function() {
        window.prettyPrint && prettyPrint();
    }), $(function() {
        $(window).scroll(t), t();
    });
});