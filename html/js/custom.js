$(function(){
    // スライダー初期化
    $('.top-slides').slick({
        autoplay: true,
        dots: true,
        fade: true,
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

    const header = $('header');
    const nav = $('nav');

    // トップへ戻るボタン、グロナビの表示設定
    $(window).on('load scroll', function() {
        if($(window).scrollTop() > 100) {
            $('.top-btn').fadeIn();
        } else {
            $('.top-btn').fadeOut();
        }

        // サイトトップの場合
        if($('body').hasClass('home')) {
            if($(window).scrollTop() > 100) {
                header.addClass('bg-white');
            } else {
                header.removeClass('bg-white');
            }
        }
    });

    // ハンバーガーメニュー
    $('.navToggle').click(function() {
        nav.toggleClass('active');

        if (nav.hasClass('active')) {
            header.addClass('active');
        } else {
            header.removeClass('active');
        }
    });
});