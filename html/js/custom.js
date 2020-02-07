$(function(){
    // スライダー初期化
    $('.top-slides').slick({
        autoplay: true,
        dots: true,
        fade: true,
    });

    // グロナビの表示設定
    $(window).on('load scroll', function() {
        if($(window).scrollTop() > 100) {
            $('header').addClass('bg-white');
            $('.top-btn').fadeIn();
        } else {
            $('header').removeClass('bg-white');
            $('.top-btn').fadeOut();
        }
    });

    // トップへ戻るボタンのスムーススクロール
    $('a[href^="#"]').click(function(){
        var speed = 500;
        var href= $(this).attr("href");
        var target = $(href == "#" || href == "" ? 'html' : href);
        var position = target.offset().top;
        $("html, body").animate({scrollTop:position}, speed, "swing");
        return false;
      });
});