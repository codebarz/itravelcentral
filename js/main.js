$(document).ready(function() {
    $('.mainHeader ul li i').click(function() {
        $('.menu-bar').toggleClass('open-menu-bar');
        $('.mainHeader ul li i').toggleClass('mdi-menu mdi-close');
    });
    $('.mainHeader-2 ul li i').click(function() {
        $('.menu-bar').toggleClass('open-menu-bar');
        $('.mainHeader-2 ul li i').toggleClass('mdi-menu mdi-close');
    });
    $('p.style-2').click(function() {
        $('.first-style').css("display","none");
        $('.second-style').fadeIn();
        $(this).addClass("active");
        $('p.style-1').removeClass("active");
        $('body').removeClass('body-2').addClass('body-1');
    });
    $('p.style-1').click(function() {
        $('.second-style').css("display","none");
        $('.first-style').fadeIn();
        $(this).addClass("active");
        $('p.style-2').removeClass("active");
        $('body').removeClass('body-1').addClass('body-2');
    });
    setInterval(function() {
        $('.bottom-mark').fadeOut().fadeIn();
    }, 3000);
    $("#menu-toggle").click(function (e) {
        e.preventDefault();
        $("#wrapper").toggleClass("active2");
    });
    setInterval(timestamp, 1000);
});
function timestamp() {
    $.ajax({
        url: '../timestamp.php',
        success: function(data) {
            $('#timestamp').html(data);
        },
    });
}
$(window).on('load', function() {
    $('div.page-pointers').masonry({
        columnWidth: 'div.slate',
        itemSelector: 'div.slate'
    });
});