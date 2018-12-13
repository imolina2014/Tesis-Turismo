
jQuery(document).ready(function() {
    var duration = 900;
    $(".back-to-top").hide();

    $(".back-to-top").on("click", function(e) {
        e.preventDefault();
        toTop();
    });

    $(function toTop() {
        $(window).scroll(function() {
            if ($(this).scrollTop() > 100) {
                $(".back-to-top").fadeIn();
            } else {
                $(".back-to-top").fadeOut();
            }
        });
        $(".back-to-top").click(function() {
            $("body,html").animate({
                scrollTop: 0
            }, duration);
            return false;
        });
    });
});
