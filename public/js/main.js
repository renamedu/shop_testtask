$(document).ready(function() {

    //default

    //nice_select
    $('select').niceSelect();

    //fancybox
    $('.fancybox_modal-js').fancybox({
        backFocus: false,
        keyboard: false,
        arrows: false,
        buttons : [
            'zoom',
            'close'
        ]
    });
    $('.fancybox_iframe-js').fancybox({
        type: 'iframe',
        iframe: {
            scrolling: 'auto',
            preload: true
        }
    });

    //add_wow_js
    new WOW({
        boxClass: 'wow',
        animateClass: 'my_animated',
        offset: 50,
        mobile: false,
        live: true
    }).init();

    //wrap_table_content_box
    $(".site__wrapper .content_box_site table").wrap("<div class='table_box'></div>");

    //mask_phone
    $(".mask_phone-js").mask("+7 (9 9 9) 9 9 9-9 9-9 9");

});

//default

//modals
$('.modal_price-js').click(function(){
    $('#modal_price').arcticmodal();
});

//input_number
// Уменьшаем на 1
$(document).on('click', '.quantity-arrow-minus-js', function () {
    let total = $(this).parent().find('.quantity-num-js');
    if ( total.val() > 1 ) {
        total.val(+total.val() - 1);
    }
});
// Увеличиваем на 1
$(document).on('click', '.quantity-arrow-plus-js', function () {
    let total = $(this).parent().find('.quantity-num-js');
    total.val(+total.val() + 1);
});
// Запрещаем ввод текста
document.querySelectorAll('.quantity-num-js').forEach(function (el) {
    el.addEventListener('input', function () {
        this.value = this.value.replace(/[^\d]/g, '');
    });
});

//radio_location
function checkForChangesRadioChecked()
{
    if ( $('.delivery_block__application-js .showing_location-js input[type=radio]').is(':checked') ) {
        // checkbox checked
        $(".location_block__application-js").show();
    } else {
        // checkbox unchecked
        $(".location_block__application-js").hide();
    }

    setTimeout(checkForChangesRadioChecked, 300);
}
checkForChangesRadioChecked();

//on_click_checked
$('.on_click_checked_neighbour-js').click(function(){
    $(this).parent().find('input[type="radio"]').prop('checked', true);

    var checkBoxes = $(this).parent().find('input[type="checkbox"]');
    checkBoxes.prop("checked", !checkBoxes.prop("checked"));
});




//header

//hamburger_click
$('.hamburger-js').click(function(){
    $('.mid__header-js').toggleClass('active');
    $('.burger__mid-js').toggleClass('active');
    $('.hamburger-js').toggleClass('active');
    $('.menu_mb__header-js').toggleClass('active');
    $('.shadow_after_menu-js').toggleClass('active');
    $('body').toggleClass('hid_imp');
    $('body').addClass('vis_item');
});

//check_for_changes
function checkForChangesMenu()
{
    if($(window).width() <= 1200){
        if($(".menu_mb__header-js").hasClass("active")) {
            //code
            $('.mid__header-js').addClass('active');
            $('.burger__mid-js').addClass('active');
            $('.hamburger-js').addClass('active');
            $('.shadow_after_menu-js').addClass('active');
            $('body').addClass('hid_imp');
            $("#checkbox_menu").prop("checked", true);
        }
        else {
            $("#checkbox_menu").prop("checked", false);
            $('body').removeClass('hid_imp');
            $('.mid__header-js').removeClass('active');
            $('.burger__mid-js').removeClass('active');
            $('.hamburger-js').removeClass('active');
            $('.shadow_after_menu-js').removeClass('active');
        }
    }
    else {
        $("#checkbox_menu").prop("checked", false);
        $('body').removeClass('hid_imp');
        $('.menu_mb__header-js').removeClass('active');
        $('.mid__header-js').removeClass('active');
        $('.burger__mid-js').removeClass('active');
        $('.hamburger-js').removeClass('active');
        $('.shadow_after_menu-js').removeClass('active');
    }


    //main_page__fixed_menu
    var $height_of_screen = $(window).height(); // Высота экрана
    var height_of_header = $('.header-js').outerHeight();

    var pt_main= $('.main-js');

    var pt_mb_menu= $('.menu_mb__header-js');

    var t_mb_search= $('.search_dk__mid-js');
    var h_mb_search= $('.search_dk__mid-js');
    var gt_for_mb_search= $('.top__header-js').outerHeight();
    var gh_for_mb_search= $('.mid__header-js').outerHeight();

    var gh_for_pb_foot__cgp= $('.showing_block__products_cgp-js').outerHeight();
    var footer_pb__cgp= $('.footer_on__category_page-js');

    pt_main.css('padding-top',height_of_header+'px');

    pt_mb_menu.css('top',height_of_header+'px');
    pt_mb_menu.css('max-height',$height_of_screen - height_of_header+'px');

    if($(window).width() <= 700){
        t_mb_search.css('top',gt_for_mb_search+'px');
        h_mb_search.css('height',gh_for_mb_search+'px');

        footer_pb__cgp.css('padding-bottom',gh_for_pb_foot__cgp+'px');
    }
    else {
        t_mb_search.css('top','auto');
        h_mb_search.css('height','auto');

        footer_pb__cgp.css('padding-bottom',0);
    }


    //for_slider__cp
    var mh_slider__cp= $('.first_block__cp-js');
    mh_slider__cp.css('min-height',$height_of_screen - height_of_header+'px');


    setTimeout(checkForChangesMenu, 500);
}
checkForChangesMenu();

//for_a
$('.menu_mb__header-js a').click(function(){
    $("#checkbox_menu").prop("checked", false);
    $('body').removeClass('hid_imp');
    $('.menu_mb__header-js').removeClass('active');
    $('.mid__header-js').removeClass('active');
    $('.burger__mid-js').removeClass('active');
    $('.hamburger-js').removeClass('active');
    $('.shadow_after_menu-js').removeClass('active');
});

//for_shadow
$('.shadow_after_menu-js').click(function(){
    $("#checkbox_menu").prop("checked", false);
    $('body').removeClass('hid_imp');
    $('.menu_mb__header-js').removeClass('active');
    $('.mid__header-js').removeClass('active');
    $('.burger__mid-js').removeClass('active');
    $('.hamburger-js').removeClass('active');
    $('.shadow_after_menu-js').removeClass('active');
});

//on_scroll_menu
var lastScrollTop = 50;
$(window).scroll(function () {
    if ($(this).scrollTop() > 50) {
        var posit = $(this).scrollTop();
        if(posit > lastScrollTop) {
            // Действие при прокрутке вниз
            $('.header-js').addClass('fixed__header');
            var height_of_top_menu_scroll = $('.top__header-js').outerHeight();
            $('.header-js').css('top', '-' + height_of_top_menu_scroll +'px');
            $('.shadow_after_menu-js').css('top', height_of_top_menu_scroll +'px');
        } else {
            // Действие при прокрутке вверх
            $('.header-js').removeClass('fixed__header');
            $('.header-js').css('top', 0);
            $('.shadow_after_menu-js').css('top', 0);
        }
        lastScrollTop = posit;
    }
});

//catalog_btn_mp
const catBtn_head = $('.btn__catalog-js'),
    catList_head = $('.list__catalog-js');
catBtn_head.on('click', function() {
    if ( $(this).hasClass('active_btn') ) {
        $(this).removeClass('active_btn');
        catList_head.removeClass('active_list');
    } else {
        $(this).addClass('active_btn');
        catList_head.addClass('active_list');
    }
});
$(document).click(function (e) {
    if ( !catBtn_head.is(e.target) && !catList_head.is(e.target) && catList_head.has(e.target).length === 0) {
        catList_head.removeClass('active_list');
        catBtn_head.removeClass('active_btn');
    }
});

//search_input
$('.search_mb__mid-js').click(function(){
    $('.search_dk__mid-js').addClass('active_search_mb__mid');
});
$('.inputbox__search_dk-js').focus(function(){
    $('.results__search_dk-js').addClass('focused__search_dk');
});
$('.btn_back__search_dk-js').click(function(){
    $('.search_dk__mid-js').removeClass('active_search_mb__mid');
    $('.results__search_dk-js').removeClass('focused__search_dk');
});
$(document).mouseup(function (e){ // событие клика по веб-документу
    var div = $(".search_dk__mid-js"); // тут указываем ID элемента
    if (!div.is(e.target) // если клик был не по нашему блоку
        && div.has(e.target).length === 0 // и не по его дочерним элементам
        && !$('.btn_back__search_dk-js').is(e.target) // и не по кнопке назад (телефоны)
    )
    {
        $('.search_dk__mid-js').removeClass('active_search_mb__mid');
        $('.results__search_dk-js').removeClass('focused__search_dk'); // скрываем его
    }
});




//sliders

//slider-js на 1 элемент
$('.slider_one-js .swiper-container').each(function(){
    var aboutSlider = new Swiper(this, {
        loop: false,
        slidesPerView: 1,
        spaceBetween: 0,
        speed: 800,
        autoplay: {
            delay: 20000,
            disableOnInteraction: false,
        },
        navigation: {
            nextEl: $(this).parent().find('.swiper-button-next')[0],
            prevEl: $(this).parent().find('.swiper-button-prev')[0],
        },
        observer: true,
        observeParents: true,
        pagination: {
            el: $(this).parent().find('.swiper-pagination')[0],
            clickable: true,
        }
    });
});

//slider-js на 1 элемент зацикленный
$('.slider_one_loop-js .swiper-container').each(function(){
    var aboutSlider = new Swiper(this, {
        loop: true,
        slidesPerView: 1,
        spaceBetween: 0,
        speed: 800,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        navigation: {
            nextEl: $(this).parent().find('.swiper-button-next')[0],
            prevEl: $(this).parent().find('.swiper-button-prev')[0],
        },
        observer: true,
        observeParents: true,
        pagination: {
            el: $(this).parent().find('.swiper-pagination')[0],
            clickable: true,
        }
    });
});

//slider_product_page
var galleryThumbsObject = new Swiper('.gallery-thumbs-object-js', {
    spaceBetween: 0,
    slidesPerView: 5,
    freeMode: true,
    watchSlidesVisibility: true,
    watchSlidesProgress: true,
    loop: false,
    observer: true,
    observeParents: true,
    direction: 'vertical',
    breakpoints: {
        0: {
            slidesPerView: 5
        },
        701: {
            slidesPerView: 8
        },
        1201: {
            slidesPerView: 5
        }
    }
});
var galleryMainObject = new Swiper('.gallery-main-object-js', {
    spaceBetween: 0,
    slidesPerView: 1,
    loop: false,
    observer: true,
    observeParents: true,
    thumbs: {
        swiper: galleryThumbsObject
    }
});

//slider_bot_product_page
$('.tabs_products_block__pp-js .swiper-container').each(function(){
    var aboutSlider = new Swiper(this, {
        loop: false,
        slidesPerView: 'auto',
        freeMode: true,
        watchSlidesVisibility: true,
        watchSlidesProgress: true,
        spaceBetween: 40,
        observer: true,
        observeParents: true,
        breakpoints: {
            0: {
                spaceBetween: 20
            },
            701: {
                spaceBetween: 20
            },
            1201: {
                spaceBetween: 40
            }
        }
    });
});




//footer
$('.main__footer-js .menu__top-js .title__item-js .btn__title-js').click(function(){
    if($(this).parent().find('.link__title').hasClass("not_click_link__title")) {
        //nothing
    }
    else {
        $(this).find('.line_plus__btn').toggleClass('active_line');
        $(this).parent().parent().find('.list__item').slideToggle();
    }
});
$('.main__footer-js .menu__top-js .title__item-js').click(function(){
    if($(this).find('.link__title').hasClass("not_click_link__title")) {
        $(this).find('.line_plus__btn').toggleClass('active_line');
        $(this).parent().find('.list__item').slideToggle();
    }
    else {
        //nothing
    }
});




//tabs

//tabs_pp
$(".tabs_block__pp-js").on("click", ".item__top-js", function(){

    var tabs = $(".tabs_block__pp-js .item__top-js"),
        image_box = $(".tabs_block__pp-js .item__bot-js");

    // Удаляем классы active
    tabs.removeClass("active_tab");
    image_box.removeClass("active_tab");
    // Добавляем классы active
    $(this).addClass("active_tab");
    image_box.eq($(this).index()).addClass("active_tab");

    return false;
});
$(".tabs_block__pp-js .top_mb__item-js").click(function(){
    $(this).toggleClass('active_tab_mb');
    $(this).parent().find('.wrap__item-js').slideToggle();
});

//tabs_bot_pp
$(".tabs_products_block__pp-js").on("click", ".item__top-js", function(){

    var tabs = $(".tabs_products_block__pp-js .item__top-js"),
        image_box = $(".tabs_products_block__pp-js .item__bot-js");

    // Удаляем классы active
    tabs.removeClass("active_tab");
    image_box.removeClass("active_tab");
    // Добавляем классы active
    $(this).addClass("active_tab");
    image_box.eq($(this).index()).addClass("active_tab");

    return false;
});

//tabs_cp
$('.tabs_cp-js .item__top-js').mouseenter(function(){

    var tabs_enter = $(".tabs_cp-js .item__top-js"),
        image_box_enter = $(".tabs_cp-js .item__bot-js");

    // Удаляем классы active
    tabs_enter.removeClass("active_tab");
    image_box_enter.removeClass("active_tab");
    // Добавляем классы active
    $(this).addClass("active_tab");
    image_box_enter.eq($(this).index()).addClass("active_tab");

    return false;
});
$(".tabs_cp-js").on("click", ".item__top-js", function(){

    var tabs = $(".tabs_cp-js .item__top-js"),
        image_box = $(".tabs_cp-js .item__bot-js");

    // Удаляем классы active
    tabs.removeClass("active_tab");
    image_box.removeClass("active_tab");
    // Добавляем классы active
    $(this).addClass("active_tab");
    image_box.eq($(this).index()).addClass("active_tab");

    return false;
});




//category_js

//checkbox
$(".filters_block__cgp-js .right__filtres-js .item__right-js").click(function(){
    $(this).toggleClass("active_item");
    $(".float_mb_menu__cgp-js .bot__float_mb_menu-js .item__bot-js").eq($(this).index()).toggleClass("active_item");
    $(".hidden_filters__backend .form__hidden_filters .checkbox__hidden_filters").eq($(this).index()).toggleClass("active_item_hidden");
});
$(".float_mb_menu__cgp-js .bot__float_mb_menu-js .item__bot-js").click(function(){
    $(this).toggleClass("active_item");
    $(".filters_block__cgp-js .right__filtres-js .item__right-js").eq($(this).index()).toggleClass("active_item");
    $(".hidden_filters__backend .form__hidden_filters .checkbox__hidden_filters").eq($(this).index()).toggleClass("active_item_hidden");
});
function checkForChangesFilterCGP()
{
    $(".hidden_filters__backend .form__hidden_filters input[type='checkbox']").each(function() {
        if ($(this).hasClass('active_item_hidden')) {
            $(this).attr("checked", true);
        } else {
            $(this).removeAttr("checked");
        }
    });

    setTimeout(checkForChangesFilterCGP, 150);
}
checkForChangesFilterCGP();


//toggle_filters
//селект в топе
const top_select_cgp = $('.catalog__select-js .item__catalog-js'),
    bot_select_cgp = $('.catalog__mb_select-js .item__catalog-js'),
    top_text_title_select_cgp = $('.title__select-js .text__item-js'),
    top_img_title_select_cgp = $('.title__select-js .img__item-js img'),
    bot_text_title_select_cgp = $('.title__mb_select-js .text__item-js'),
    bot_img_title_select_cgp = $('.title__mb_select-js .img__item-js img');

function checkForChangesSelectCGP()
{
    if($(window).width() <= 700){
        //1
        $(".catalog__select-js .item__catalog-js.first_item__catalog-js.top_item-js").click(function(){
            //убираем везде классы активные
            top_select_cgp.removeClass("active_item");
            bot_select_cgp.removeClass("active_item");

            //нижний
            $('.catalog__select-js .item__catalog-js.first_item__catalog-js.bot_item-js').removeClass("active_item on_top_item-js");
            $('.catalog__mb_select-js .item__catalog-js.first_item__catalog-js.bot_item-js').removeClass("active_item on_top_item-js");

            //верхний
            $('.catalog__select-js .item__catalog-js.first_item__catalog-js.top_item-js').addClass("active_item on_top_item-js");
            $('.catalog__mb_select-js .item__catalog-js.first_item__catalog-js.top_item-js').addClass("active_item on_top_item-js");

            //меняем в тайтле текст и url изображения
            // Замена текста
            var top_select = $('.catalog__select-js .item__catalog-js.first_item__catalog-js.top_item-js .text__item-js').text();
            top_text_title_select_cgp.text(top_select);
            bot_text_title_select_cgp.text(top_select);
            //Замена изображения
            var top_select_img = $('.catalog__select-js .item__catalog-js.first_item__catalog-js.top_item-js .img__item-js img').attr('src');
            top_img_title_select_cgp.attr('src', top_select_img);
            bot_img_title_select_cgp.attr('src', top_select_img);

        });
        $(".catalog__select-js .item__catalog-js.first_item__catalog-js.bot_item-js").click(function(){
            //убираем везде классы активные
            top_select_cgp.removeClass("active_item");
            bot_select_cgp.removeClass("active_item");

            //нижний
            $('.catalog__select-js .item__catalog-js.first_item__catalog-js.bot_item-js').addClass("active_item on_top_item-js");
            $('.catalog__mb_select-js .item__catalog-js.first_item__catalog-js.bot_item-js').addClass("active_item on_top_item-js");

            //верхний
            $('.catalog__select-js .item__catalog-js.first_item__catalog-js.top_item-js').removeClass("active_item on_top_item-js");
            $('.catalog__mb_select-js .item__catalog-js.first_item__catalog-js.top_item-js').removeClass("active_item on_top_item-js");

            //меняем в тайтле текст и url изображения
            // Замена текста
            var top_select = $('.catalog__select-js .item__catalog-js.first_item__catalog-js.bot_item-js .text__item-js').text();
            top_text_title_select_cgp.text(top_select);
            bot_text_title_select_cgp.text(top_select);
            //Замена изображения
            var top_select_img = $('.catalog__select-js .item__catalog-js.first_item__catalog-js.bot_item-js .img__item-js img').attr('src');
            top_img_title_select_cgp.attr('src', top_select_img);
            bot_img_title_select_cgp.attr('src', top_select_img);

        });
        //2
        $(".catalog__select-js .item__catalog-js.second_item__catalog-js.top_item-js").click(function(){
            //убираем везде классы активные
            top_select_cgp.removeClass("active_item");
            bot_select_cgp.removeClass("active_item");

            //нижний
            $('.catalog__select-js .item__catalog-js.second_item__catalog-js.bot_item-js').removeClass("active_item on_top_item-js");
            $('.catalog__mb_select-js .item__catalog-js.second_item__catalog-js.bot_item-js').removeClass("active_item on_top_item-js");

            //верхний
            $('.catalog__select-js .item__catalog-js.second_item__catalog-js.top_item-js').addClass("active_item on_top_item-js");
            $('.catalog__mb_select-js .item__catalog-js.second_item__catalog-js.top_item-js').addClass("active_item on_top_item-js");

            //меняем в тайтле текст и url изображения
            // Замена текста
            var top_select = $('.catalog__select-js .item__catalog-js.second_item__catalog-js.top_item-js .text__item-js').text();
            top_text_title_select_cgp.text(top_select);
            bot_text_title_select_cgp.text(top_select);
            //Замена изображения
            var top_select_img = $('.catalog__select-js .item__catalog-js.second_item__catalog-js.top_item-js .img__item-js img').attr('src');
            top_img_title_select_cgp.attr('src', top_select_img);
            bot_img_title_select_cgp.attr('src', top_select_img);

        });
        $(".catalog__select-js .item__catalog-js.second_item__catalog-js.bot_item-js").click(function(){
            //убираем везде классы активные
            top_select_cgp.removeClass("active_item");
            bot_select_cgp.removeClass("active_item");

            //нижний
            $('.catalog__select-js .item__catalog-js.second_item__catalog-js.bot_item-js').addClass("active_item on_top_item-js");
            $('.catalog__mb_select-js .item__catalog-js.second_item__catalog-js.bot_item-js').addClass("active_item on_top_item-js");

            //верхний
            $('.catalog__select-js .item__catalog-js.second_item__catalog-js.top_item-js').removeClass("active_item on_top_item-js");
            $('.catalog__mb_select-js .item__catalog-js.second_item__catalog-js.top_item-js').removeClass("active_item on_top_item-js");

            //меняем в тайтле текст и url изображения
            // Замена текста
            var top_select = $('.catalog__select-js .item__catalog-js.second_item__catalog-js.bot_item-js .text__item-js').text();
            top_text_title_select_cgp.text(top_select);
            bot_text_title_select_cgp.text(top_select);
            //Замена изображения
            var top_select_img = $('.catalog__select-js .item__catalog-js.second_item__catalog-js.bot_item-js .img__item-js img').attr('src');
            top_img_title_select_cgp.attr('src', top_select_img);
            bot_img_title_select_cgp.attr('src', top_select_img);

        });
        //3
        $(".catalog__select-js .item__catalog-js.third_item__catalog-js.top_item-js").click(function(){
            //убираем везде классы активные
            top_select_cgp.removeClass("active_item");
            bot_select_cgp.removeClass("active_item");

            //нижний
            $('.catalog__select-js .item__catalog-js.third_item__catalog-js.bot_item-js').removeClass("active_item on_top_item-js");
            $('.catalog__mb_select-js .item__catalog-js.third_item__catalog-js.bot_item-js').removeClass("active_item on_top_item-js");

            //верхний
            $('.catalog__select-js .item__catalog-js.third_item__catalog-js.top_item-js').addClass("active_item on_top_item-js");
            $('.catalog__mb_select-js .item__catalog-js.third_item__catalog-js.top_item-js').addClass("active_item on_top_item-js");

            //меняем в тайтле текст и url изображения
            // Замена текста
            var top_select = $('.catalog__select-js .item__catalog-js.third_item__catalog-js.top_item-js .text__item-js').text();
            top_text_title_select_cgp.text(top_select);
            bot_text_title_select_cgp.text(top_select);
            //Замена изображения
            var top_select_img = $('.catalog__select-js .item__catalog-js.third_item__catalog-js.top_item-js .img__item-js img').attr('src');
            top_img_title_select_cgp.attr('src', top_select_img);
            bot_img_title_select_cgp.attr('src', top_select_img);

        });
        $(".catalog__select-js .item__catalog-js.third_item__catalog-js.bot_item-js").click(function(){
            //убираем везде классы активные
            top_select_cgp.removeClass("active_item");
            bot_select_cgp.removeClass("active_item");

            //нижний
            $('.catalog__select-js .item__catalog-js.third_item__catalog-js.bot_item-js').addClass("active_item on_top_item-js");
            $('.catalog__mb_select-js .item__catalog-js.third_item__catalog-js.bot_item-js').addClass("active_item on_top_item-js");

            //верхний
            $('.catalog__select-js .item__catalog-js.third_item__catalog-js.top_item-js').removeClass("active_item on_top_item-js");
            $('.catalog__mb_select-js .item__catalog-js.third_item__catalog-js.top_item-js').removeClass("active_item on_top_item-js");

            //меняем в тайтле текст и url изображения
            // Замена текста
            var top_select = $('.catalog__select-js .item__catalog-js.third_item__catalog-js.bot_item-js .text__item-js').text();
            top_text_title_select_cgp.text(top_select);
            bot_text_title_select_cgp.text(top_select);
            //Замена изображения
            var top_select_img = $('.catalog__select-js .item__catalog-js.third_item__catalog-js.bot_item-js .img__item-js img').attr('src');
            top_img_title_select_cgp.attr('src', top_select_img);
            bot_img_title_select_cgp.attr('src', top_select_img);

        });
    }
    else {
        //1
        $(".catalog__select-js .item__catalog-js.first_item__catalog-js.top_item-js").click(function(){
            //убираем везде классы активные
            top_select_cgp.removeClass("active_item");
            bot_select_cgp.removeClass("active_item");

            //нижний
            $('.catalog__select-js .item__catalog-js.first_item__catalog-js.bot_item-js').addClass("active_item on_top_item-js");
            $('.catalog__mb_select-js .item__catalog-js.first_item__catalog-js.bot_item-js').addClass("active_item on_top_item-js");

            //верхний
            $('.catalog__select-js .item__catalog-js.first_item__catalog-js.top_item-js').removeClass("active_item on_top_item-js");
            $('.catalog__mb_select-js .item__catalog-js.first_item__catalog-js.top_item-js').removeClass("active_item on_top_item-js");

            //меняем в тайтле текст и url изображения
            // Замена текста
            var top_select = $('.catalog__select-js .item__catalog-js.first_item__catalog-js.bot_item-js .text__item-js').text();
            top_text_title_select_cgp.text(top_select);
            bot_text_title_select_cgp.text(top_select);
            //Замена изображения
            var top_select_img = $('.catalog__select-js .item__catalog-js.first_item__catalog-js.bot_item-js .img__item-js img').attr('src');
            top_img_title_select_cgp.attr('src', top_select_img);
            bot_img_title_select_cgp.attr('src', top_select_img);

        });
        $(".catalog__select-js .item__catalog-js.first_item__catalog-js.bot_item-js").click(function(){
            //убираем везде классы активные
            top_select_cgp.removeClass("active_item");
            bot_select_cgp.removeClass("active_item");

            //нижний
            $('.catalog__select-js .item__catalog-js.first_item__catalog-js.bot_item-js').removeClass("active_item on_top_item-js");
            $('.catalog__mb_select-js .item__catalog-js.first_item__catalog-js.bot_item-js').removeClass("active_item on_top_item-js");

            //верхний
            $('.catalog__select-js .item__catalog-js.first_item__catalog-js.top_item-js').addClass("active_item on_top_item-js");
            $('.catalog__mb_select-js .item__catalog-js.first_item__catalog-js.top_item-js').addClass("active_item on_top_item-js");

            //меняем в тайтле текст и url изображения
            // Замена текста
            var top_select = $('.catalog__select-js .item__catalog-js.first_item__catalog-js.top_item-js .text__item-js').text();
            top_text_title_select_cgp.text(top_select);
            bot_text_title_select_cgp.text(top_select);
            //Замена изображения
            var top_select_img = $('.catalog__select-js .item__catalog-js.first_item__catalog-js.top_item-js .img__item-js img').attr('src');
            top_img_title_select_cgp.attr('src', top_select_img);
            bot_img_title_select_cgp.attr('src', top_select_img);

        });
        //2
        $(".catalog__select-js .item__catalog-js.second_item__catalog-js.top_item-js").click(function(){
            //убираем везде классы активные
            top_select_cgp.removeClass("active_item");
            bot_select_cgp.removeClass("active_item");

            //нижний
            $('.catalog__select-js .item__catalog-js.second_item__catalog-js.bot_item-js').addClass("active_item on_top_item-js");
            $('.catalog__mb_select-js .item__catalog-js.second_item__catalog-js.bot_item-js').addClass("active_item on_top_item-js");

            //верхний
            $('.catalog__select-js .item__catalog-js.second_item__catalog-js.top_item-js').removeClass("active_item on_top_item-js");
            $('.catalog__mb_select-js .item__catalog-js.second_item__catalog-js.top_item-js').removeClass("active_item on_top_item-js");

            //меняем в тайтле текст и url изображения
            // Замена текста
            var top_select = $('.catalog__select-js .item__catalog-js.second_item__catalog-js.bot_item-js .text__item-js').text();
            top_text_title_select_cgp.text(top_select);
            bot_text_title_select_cgp.text(top_select);
            //Замена изображения
            var top_select_img = $('.catalog__select-js .item__catalog-js.second_item__catalog-js.bot_item-js .img__item-js img').attr('src');
            top_img_title_select_cgp.attr('src', top_select_img);
            bot_img_title_select_cgp.attr('src', top_select_img);

        });
        $(".catalog__select-js .item__catalog-js.second_item__catalog-js.bot_item-js").click(function(){
            //убираем везде классы активные
            top_select_cgp.removeClass("active_item");
            bot_select_cgp.removeClass("active_item");

            //нижний
            $('.catalog__select-js .item__catalog-js.second_item__catalog-js.bot_item-js').removeClass("active_item on_top_item-js");
            $('.catalog__mb_select-js .item__catalog-js.second_item__catalog-js.bot_item-js').removeClass("active_item on_top_item-js");

            //верхний
            $('.catalog__select-js .item__catalog-js.second_item__catalog-js.top_item-js').addClass("active_item on_top_item-js");
            $('.catalog__mb_select-js .item__catalog-js.second_item__catalog-js.top_item-js').addClass("active_item on_top_item-js");

            //меняем в тайтле текст и url изображения
            // Замена текста
            var top_select = $('.catalog__select-js .item__catalog-js.second_item__catalog-js.top_item-js .text__item-js').text();
            top_text_title_select_cgp.text(top_select);
            bot_text_title_select_cgp.text(top_select);
            //Замена изображения
            var top_select_img = $('.catalog__select-js .item__catalog-js.second_item__catalog-js.top_item-js .img__item-js img').attr('src');
            top_img_title_select_cgp.attr('src', top_select_img);
            bot_img_title_select_cgp.attr('src', top_select_img);

        });
        //3
        $(".catalog__select-js .item__catalog-js.third_item__catalog-js.top_item-js").click(function(){
            //убираем везде классы активные
            top_select_cgp.removeClass("active_item");
            bot_select_cgp.removeClass("active_item");

            //нижний
            $('.catalog__select-js .item__catalog-js.third_item__catalog-js.bot_item-js').addClass("active_item on_top_item-js");
            $('.catalog__mb_select-js .item__catalog-js.third_item__catalog-js.bot_item-js').addClass("active_item on_top_item-js");

            //верхний
            $('.catalog__select-js .item__catalog-js.third_item__catalog-js.top_item-js').removeClass("active_item on_top_item-js");
            $('.catalog__mb_select-js .item__catalog-js.third_item__catalog-js.top_item-js').removeClass("active_item on_top_item-js");

            //меняем в тайтле текст и url изображения
            // Замена текста
            var top_select = $('.catalog__select-js .item__catalog-js.third_item__catalog-js.bot_item-js .text__item-js').text();
            top_text_title_select_cgp.text(top_select);
            bot_text_title_select_cgp.text(top_select);
            //Замена изображения
            var top_select_img = $('.catalog__select-js .item__catalog-js.third_item__catalog-js.bot_item-js .img__item-js img').attr('src');
            top_img_title_select_cgp.attr('src', top_select_img);
            bot_img_title_select_cgp.attr('src', top_select_img);

        });
        $(".catalog__select-js .item__catalog-js.third_item__catalog-js.bot_item-js").click(function(){
            //убираем везде классы активные
            top_select_cgp.removeClass("active_item");
            bot_select_cgp.removeClass("active_item");

            //нижний
            $('.catalog__select-js .item__catalog-js.third_item__catalog-js.bot_item-js').removeClass("active_item on_top_item-js");
            $('.catalog__mb_select-js .item__catalog-js.third_item__catalog-js.bot_item-js').removeClass("active_item on_top_item-js");

            //верхний
            $('.catalog__select-js .item__catalog-js.third_item__catalog-js.top_item-js').addClass("active_item on_top_item-js");
            $('.catalog__mb_select-js .item__catalog-js.third_item__catalog-js.top_item-js').addClass("active_item on_top_item-js");

            //меняем в тайтле текст и url изображения
            // Замена текста
            var top_select = $('.catalog__select-js .item__catalog-js.third_item__catalog-js.top_item-js .text__item-js').text();
            top_text_title_select_cgp.text(top_select);
            bot_text_title_select_cgp.text(top_select);
            //Замена изображения
            var top_select_img = $('.catalog__select-js .item__catalog-js.third_item__catalog-js.top_item-js .img__item-js img').attr('src');
            top_img_title_select_cgp.attr('src', top_select_img);
            bot_img_title_select_cgp.attr('src', top_select_img);

        });
    }

    setTimeout(checkForChangesSelectCGP, 500);
}
checkForChangesSelectCGP();

//плавающий селект
//1
$(".catalog__mb_select-js .item__catalog-js.first_item__catalog-js.top_item-js").click(function(){
    //убираем везде классы активные
    top_select_cgp.removeClass("active_item");
    bot_select_cgp.removeClass("active_item");

    //нижний
    $('.catalog__select-js .item__catalog-js.first_item__catalog-js.bot_item-js').removeClass("active_item on_top_item-js");
    $('.catalog__mb_select-js .item__catalog-js.first_item__catalog-js.bot_item-js').removeClass("active_item on_top_item-js");

    //верхний
    $('.catalog__select-js .item__catalog-js.first_item__catalog-js.top_item-js').addClass("active_item on_top_item-js");
    $('.catalog__mb_select-js .item__catalog-js.first_item__catalog-js.top_item-js').addClass("active_item on_top_item-js");

    //меняем в тайтле текст и url изображения
    // Замена текста
    var top_select = $('.catalog__mb_select-js .item__catalog-js.first_item__catalog-js.top_item-js .text__item-js').text();
    top_text_title_select_cgp.text(top_select);
    bot_text_title_select_cgp.text(top_select);
    //Замена изображения
    var top_select_img = $('.catalog__mb_select-js .item__catalog-js.first_item__catalog-js.top_item-js .img__item-js img').attr('src');
    top_img_title_select_cgp.attr('src', top_select_img);
    bot_img_title_select_cgp.attr('src', top_select_img);

});
$(".catalog__mb_select-js .item__catalog-js.first_item__catalog-js.bot_item-js").click(function(){
    //убираем везде классы активные
    top_select_cgp.removeClass("active_item");
    bot_select_cgp.removeClass("active_item");

    //нижний
    $('.catalog__select-js .item__catalog-js.first_item__catalog-js.bot_item-js').addClass("active_item on_top_item-js");
    $('.catalog__mb_select-js .item__catalog-js.first_item__catalog-js.bot_item-js').addClass("active_item on_top_item-js");

    //верхний
    $('.catalog__select-js .item__catalog-js.first_item__catalog-js.top_item-js').removeClass("active_item on_top_item-js");
    $('.catalog__mb_select-js .item__catalog-js.first_item__catalog-js.top_item-js').removeClass("active_item on_top_item-js");

    //меняем в тайтле текст и url изображения
    // Замена текста
    var top_select = $('.catalog__mb_select-js .item__catalog-js.first_item__catalog-js.bot_item-js .text__item-js').text();
    top_text_title_select_cgp.text(top_select);
    bot_text_title_select_cgp.text(top_select);
    //Замена изображения
    var top_select_img = $('.catalog__mb_select-js .item__catalog-js.first_item__catalog-js.bot_item-js .img__item-js img').attr('src');
    top_img_title_select_cgp.attr('src', top_select_img);
    bot_img_title_select_cgp.attr('src', top_select_img);

});
//2
$(".catalog__mb_select-js .item__catalog-js.second_item__catalog-js.top_item-js").click(function(){
    //убираем везде классы активные
    top_select_cgp.removeClass("active_item");
    bot_select_cgp.removeClass("active_item");

    //нижний
    $('.catalog__select-js .item__catalog-js.second_item__catalog-js.bot_item-js').removeClass("active_item on_top_item-js");
    $('.catalog__mb_select-js .item__catalog-js.second_item__catalog-js.bot_item-js').removeClass("active_item on_top_item-js");

    //верхний
    $('.catalog__select-js .item__catalog-js.second_item__catalog-js.top_item-js').addClass("active_item on_top_item-js");
    $('.catalog__mb_select-js .item__catalog-js.second_item__catalog-js.top_item-js').addClass("active_item on_top_item-js");

    //меняем в тайтле текст и url изображения
    // Замена текста
    var top_select = $('.catalog__mb_select-js .item__catalog-js.second_item__catalog-js.top_item-js .text__item-js').text();
    top_text_title_select_cgp.text(top_select);
    bot_text_title_select_cgp.text(top_select);
    //Замена изображения
    var top_select_img = $('.catalog__mb_select-js .item__catalog-js.second_item__catalog-js.top_item-js .img__item-js img').attr('src');
    top_img_title_select_cgp.attr('src', top_select_img);
    bot_img_title_select_cgp.attr('src', top_select_img);

});
$(".catalog__mb_select-js .item__catalog-js.second_item__catalog-js.bot_item-js").click(function(){
    //убираем везде классы активные
    top_select_cgp.removeClass("active_item");
    bot_select_cgp.removeClass("active_item");

    //нижний
    $('.catalog__select-js .item__catalog-js.second_item__catalog-js.bot_item-js').addClass("active_item on_top_item-js");
    $('.catalog__mb_select-js .item__catalog-js.second_item__catalog-js.bot_item-js').addClass("active_item on_top_item-js");

    //верхний
    $('.catalog__select-js .item__catalog-js.second_item__catalog-js.top_item-js').removeClass("active_item on_top_item-js");
    $('.catalog__mb_select-js .item__catalog-js.second_item__catalog-js.top_item-js').removeClass("active_item on_top_item-js");

    //меняем в тайтле текст и url изображения
    // Замена текста
    var top_select = $('.catalog__mb_select-js .item__catalog-js.second_item__catalog-js.bot_item-js .text__item-js').text();
    top_text_title_select_cgp.text(top_select);
    bot_text_title_select_cgp.text(top_select);
    //Замена изображения
    var top_select_img = $('.catalog__mb_select-js .item__catalog-js.second_item__catalog-js.bot_item-js .img__item-js img').attr('src');
    top_img_title_select_cgp.attr('src', top_select_img);
    bot_img_title_select_cgp.attr('src', top_select_img);

});
//3
$(".catalog__mb_select-js .item__catalog-js.third_item__catalog-js.top_item-js").click(function(){
    //убираем везде классы активные
    top_select_cgp.removeClass("active_item");
    bot_select_cgp.removeClass("active_item");

    //нижний
    $('.catalog__select-js .item__catalog-js.third_item__catalog-js.bot_item-js').removeClass("active_item on_top_item-js");
    $('.catalog__mb_select-js .item__catalog-js.third_item__catalog-js.bot_item-js').removeClass("active_item on_top_item-js");

    //верхний
    $('.catalog__select-js .item__catalog-js.third_item__catalog-js.top_item-js').addClass("active_item on_top_item-js");
    $('.catalog__mb_select-js .item__catalog-js.third_item__catalog-js.top_item-js').addClass("active_item on_top_item-js");

    //меняем в тайтле текст и url изображения
    // Замена текста
    var top_select = $('.catalog__mb_select-js .item__catalog-js.third_item__catalog-js.top_item-js .text__item-js').text();
    top_text_title_select_cgp.text(top_select);
    bot_text_title_select_cgp.text(top_select);
    //Замена изображения
    var top_select_img = $('.catalog__mb_select-js .item__catalog-js.third_item__catalog-js.top_item-js .img__item-js img').attr('src');
    top_img_title_select_cgp.attr('src', top_select_img);
    bot_img_title_select_cgp.attr('src', top_select_img);

});
$(".catalog__mb_select-js .item__catalog-js.third_item__catalog-js.bot_item-js").click(function(){
    //убираем везде классы активные
    top_select_cgp.removeClass("active_item");
    bot_select_cgp.removeClass("active_item");

    //нижний
    $('.catalog__select-js .item__catalog-js.third_item__catalog-js.bot_item-js').addClass("active_item on_top_item-js");
    $('.catalog__mb_select-js .item__catalog-js.third_item__catalog-js.bot_item-js').addClass("active_item on_top_item-js");

    //верхний
    $('.catalog__select-js .item__catalog-js.third_item__catalog-js.top_item-js').removeClass("active_item on_top_item-js");
    $('.catalog__mb_select-js .item__catalog-js.third_item__catalog-js.top_item-js').removeClass("active_item on_top_item-js");

    //меняем в тайтле текст и url изображения
    // Замена текста
    var top_select = $('.catalog__mb_select-js .item__catalog-js.third_item__catalog-js.bot_item-js .text__item-js').text();
    top_text_title_select_cgp.text(top_select);
    bot_text_title_select_cgp.text(top_select);
    //Замена изображения
    var top_select_img = $('.catalog__mb_select-js .item__catalog-js.third_item__catalog-js.bot_item-js .img__item-js img').attr('src');
    top_img_title_select_cgp.attr('src', top_select_img);
    bot_img_title_select_cgp.attr('src', top_select_img);

});


//кнопка раскрытия селекта на телефонах
//в топе
$(".filters_block__cgp-js .left__filtres-js .select__left-js .title__select-js").click(function(){
    $(this).parent().find('.catalog__select-js').toggleClass('active_mobile_select');
    $(this).toggleClass('active_mobile_select');
});
$(".filters_block__cgp-js .left__filtres-js .select__left-js .catalog__select-js .item__catalog-js").click(function(){
    $(this).parent().parent().find('.title__select-js').removeClass('active_mobile_select');
    $(this).parent().parent().find('.catalog__select-js').removeClass('active_mobile_select');
});
$(document).mouseup(function (e){ // событие клика по веб-документу
    var mb_top_select_cgp = $(".filters_block__cgp-js .left__filtres-js .select__left-js"); // тут указываем ID элемента
    if (!mb_top_select_cgp.is(e.target) // если клик был не по нашему блоку
        && mb_top_select_cgp.has(e.target).length === 0 // и не по его дочерним элементам
    )
    {
        $('.filters_block__cgp-js .left__filtres-js .select__left-js .title__select-js').removeClass('active_mobile_select');
        $('.filters_block__cgp-js .left__filtres-js .select__left-js .catalog__select-js').removeClass('active_mobile_select'); // скрываем его
    }
});
//в плавающем блоке
$(".float_mb_menu__cgp-js .top__float_mb_menu-js .mb_select__top-js .title__mb_select-js").click(function(){
    $(this).parent().find('.catalog__mb_select-js').toggleClass('active_mobile_select');
    $(this).toggleClass('active_mobile_select');
});
$(".float_mb_menu__cgp-js .top__float_mb_menu-js .mb_select__top-js .catalog__mb_select-js .item__catalog-js").click(function(){
    $(this).parent().parent().find('.title__mb_select-js').removeClass('active_mobile_select');
    $(this).parent().parent().find('.catalog__mb_select-js').removeClass('active_mobile_select');
});


//float_mb_menu
$(".float_mb_btn__cgp-js").click(function(){
    $(this).addClass('active_mobile_dropdown');
    $('.float_mb_menu__cgp-js').addClass('active_mobile_dropdown');
});
$(".close__float_mb_menu-js").click(function(){
    $('.float_mb_menu__cgp-js').removeClass('active_mobile_dropdown');
    $('.float_mb_btn__cgp-js').removeClass('active_mobile_dropdown');
});
$(document).mouseup(function (e){ // событие клика по веб-документу
    var mb_float_menu_site = $(".float_mb_menu__cgp-js .wrap__float_mb_menu-js"); // тут указываем ID элемента
    if (!mb_float_menu_site.is(e.target) // если клик был не по нашему блоку
        && mb_float_menu_site.has(e.target).length === 0 // и не по его дочерним элементам
        && !$('.close__float_mb_menu-js').is(e.target) // и не по кнопке назад (телефоны)
    )
    {
        $('.float_mb_menu__cgp-js').removeClass('active_mobile_dropdown');
        $('.float_mb_btn__cgp-js').removeClass('active_mobile_dropdown'); // скрываем его
    }
});