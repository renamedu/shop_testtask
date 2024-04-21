<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="minimum-scale=1.0, target-densitydpi=device-dpi, width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta name="HandheldFriendly" content="true">
  <meta name="MobileOptimized" content="320">

  <title>Title-Index</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <link rel="icon" href="favicon.ico" type="image/x-icon">

  <!-- fonts -->
  <link rel="stylesheet" href="{{ URL::asset('fonts/MyFontsWebfontsKit.css') }}">

  <!-- main_css -->
  <link rel="stylesheet" href="{{ URL::asset('css/lib/animation_big.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('css/lib/jquery.fancybox.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('css/lib/nice-select.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('css/lib/swiper-bundle.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('css/styles.min.css') }}">

</head>

<body class="main__page">

  <div id="wrapper" class="wrapper site__wrapper">
    <header id="header" class="header header-js slideInBottomMy my_animated">
        <div class="top__header top__header-js">
            <div class="inner">
                <div class="select__top">
                  
                </div>
                <nav class="menu__top">
                    <ul>
                        <li><a href="#">Спецпредложения</a></li>
                        <li><a href="#">Доставка и оплата</a></li>
                        <li><a href="#">О компании</a></li>
                        <li><a href="#">Контакты</a></li>
                    </ul>
                </nav>
                <div class="contacts__top">
                    <a href="mailto:example@test.ru" class="item__contacts mail_item__contacts">
                        <span class="img__item">
                            <svg width="28" height="22" viewBox="0 0 28 22" xmlns="http://www.w3.org/2000/svg">
                                <path d="M24.6665 0.333374H3.33317C1.8665 0.333374 0.666504 1.53337 0.666504 3.00004V19C0.666504 20.4667 1.8665 21.6667 3.33317 21.6667H24.6665C26.1332 21.6667 27.3332 20.4667 27.3332 19V3.00004C27.3332 1.53337 26.1332 0.333374 24.6665 0.333374ZM24.6665 19H3.33317V5.66671L13.9998 12.3334L24.6665 5.66671V19ZM13.9998 9.66671L3.33317 3.00004H24.6665L13.9998 9.66671Z"/>
                            </svg>
                        </span>
                        <span class="text__item">example@test.ru</span>
                    </a>
                    <a href="tel:+78129999999" class="item__contacts phone_item__contacts">
                        <span class="img__item">
                            <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M22.6667 16.6667C21 16.6667 19.4 16.4 17.9067 15.9067C17.7733 15.8667 17.6267 15.84 17.4933 15.84C17.1467 15.84 16.8133 15.9733 16.5467 16.2267L13.6133 19.16C9.84 17.24 6.74667 14.16 4.82667 10.3867L7.76 7.44C8.13333 7.08 8.24 6.56 8.09333 6.09333C7.6 4.6 7.33333 3 7.33333 1.33333C7.33333 0.6 6.73333 0 6 0H1.33333C0.6 0 0 0.6 0 1.33333C0 13.8533 10.1467 24 22.6667 24C23.4 24 24 23.4 24 22.6667V18C24 17.2667 23.4 16.6667 22.6667 16.6667ZM2.70667 2.66667H4.70667C4.8 3.84 5 5 5.32 6.12L3.72 7.73333C3.17333 6.12 2.82667 4.42667 2.70667 2.66667ZM21.3333 21.2933C19.5733 21.1733 17.8667 20.8267 16.2667 20.28L17.8667 18.68C19 19 20.16 19.2 21.3333 19.28V21.2933Z"/>
                            </svg>
                        </span>
                        <span class="text__item">+7 (812) 999-99-99</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="mid__header mid__header-js">
            <div class="inner">
                <a href="/" class="logo__mid">Логотип</a>
                <div class="catalog__mid">
                    <div class="btn__catalog btn__catalog-js">
                        <div class="text__btn">Каталог</div>
                        <div class="img__btn">
                            <svg width="6" height="22" viewBox="0 0 6 22" xmlns="http://www.w3.org/2000/svg">
                                <path d="M3.00016 16.3334C1.5335 16.3334 0.333496 17.5334 0.333496 19C0.333496 20.4667 1.5335 21.6667 3.00016 21.6667C4.46683 21.6667 5.66683 20.4667 5.66683 19C5.66683 17.5334 4.46683 16.3334 3.00016 16.3334ZM3.00016 13.6667C4.46683 13.6667 5.66683 12.4667 5.66683 11C5.66683 9.53337 4.46683 8.33337 3.00016 8.33337C1.5335 8.33337 0.333497 9.53337 0.333496 11C0.333496 12.4667 1.5335 13.6667 3.00016 13.6667ZM3.00016 5.66671C4.46683 5.66671 5.66683 4.46671 5.66683 3.00004C5.66683 1.53337 4.46683 0.333374 3.00016 0.333374C1.5335 0.333374 0.333497 1.53337 0.333497 3.00004C0.333497 4.46671 1.5335 5.66671 3.00016 5.66671Z"/>
                            </svg>
                        </div>
                    </div>
                    <div class="list__catalog list__catalog-js">
                        <div class="wrap__list">
                            <a href="#" class="item__list">
                                <span class="img__item">
                                    <img src="images/dest/dropdown_cat_img_mp/ph1.jpg" alt="">
                                </span>
                                <span class="text__item">Сварочные материалы</span>
                            </a>
                            <a href="#" class="item__list">
                            <span class="img__item">
                                <img src="images/dest/dropdown_cat_img_mp/ph2.jpg" alt="">
                            </span>
                                <span class="text__item">Гвозди</span>
                            </a>
                            <a href="#" class="item__list">
                            <span class="img__item">
                                <img src="images/dest/dropdown_cat_img_mp/ph3.jpg" alt="">
                            </span>
                                <span class="text__item">Поликарбонат</span>
                            </a>
                            <a href="#" class="item__list">
                            <span class="img__item">
                                <img src="images/dest/dropdown_cat_img_mp/ph4.jpg" alt="">
                            </span>
                                <span class="text__item">Сетка сварная</span>
                            </a>
                            <a href="#" class="item__list">
                            <span class="img__item">
                                <img src="images/dest/dropdown_cat_img_mp/ph5.jpg" alt="">
                            </span>
                                <span class="text__item">Сетка тканая</span>
                            </a>
                            <a href="#" class="item__list">
                            <span class="img__item">
                                <img src="images/dest/dropdown_cat_img_mp/ph6.jpg" alt="">
                            </span>
                                <span class="text__item">Сетка рабица</span>
                            </a>
                            <a href="#" class="item__list">
                            <span class="img__item">
                                <img src="images/dest/dropdown_cat_img_mp/ph7.jpg" alt="">
                            </span>
                                <span class="text__item">Материалы для увязки</span>
                            </a>
                            <a href="#" class="item__list">
                            <span class="img__item">
                                <img src="images/dest/dropdown_cat_img_mp/ph8.jpg" alt="">
                            </span>
                                <span class="text__item">Столбы заборные</span>
                            </a>
                            <a href="#" class="item__list">
                            <span class="img__item">
                                <img src="images/dest/dropdown_cat_img_mp/ph9.jpg" alt="">
                            </span>
                                <span class="text__item">Заборные секции</span>
                            </a>
                            <a href="#" class="item__list">
                            <span class="img__item">
                                <img src="images/dest/dropdown_cat_img_mp/ph10.jpg" alt="">
                            </span>
                                <span class="text__item">Газонные ограждения</span>
                            </a>
                            <a href="#" class="item__list">
                            <span class="img__item">
                                <img src="images/dest/dropdown_cat_img_mp/ph11.jpg" alt="">
                            </span>
                                <span class="text__item">Охранные ограждения</span>
                            </a>
                            <a href="#" class="item__list">
                            <span class="img__item">
                                <img src="images/dest/dropdown_cat_img_mp/ph12.jpg" alt="">
                            </span>
                                <span class="text__item">Ворота и калитки</span>
                            </a>
                            <a href="#" class="item__list">
                            <span class="img__item">
                                <img src="images/dest/dropdown_cat_img_mp/ph13.jpg" alt="">
                            </span>
                                <span class="text__item">Теплицы</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="search_dk__mid search_dk__mid-js">
                    <form class="form__search_dk" action="#">
                        <div class="btn_back__search_dk btn_back__search_dk-js">
                            <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12.1492 23.7203L14.2345 21.635L5.98212 13.3679L23.9805 13.3679L23.9805 10.41L5.98212 10.41L14.2345 2.14289L12.1492 0.0576172L0.317871 11.8889L12.1492 23.7203Z"/>
                            </svg>
                        </div>
                        <div class="wrap__form">
                            <label class="label__search_dk" for="inputbox__search_dk">Заглушка металлическая для столба 50×50 мм</label>
                            <input id="inputbox__search_dk" class="inputbox inputbox__search_dk inputbox__search_dk-js" type="search" placeholder="Заглуш">
                            <button class="button button__search_dk" type="button">
                                <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16.6667 14.6667H15.6133L15.24 14.3067C16.5467 12.7867 17.3333 10.8133 17.3333 8.66667C17.3333 3.88 13.4533 0 8.66667 0C3.88 0 0 3.88 0 8.66667C0 13.4533 3.88 17.3333 8.66667 17.3333C10.8133 17.3333 12.7867 16.5467 14.3067 15.24L14.6667 15.6133V16.6667L21.3333 23.32L23.32 21.3333L16.6667 14.6667ZM8.66667 14.6667C5.34667 14.6667 2.66667 11.9867 2.66667 8.66667C2.66667 5.34667 5.34667 2.66667 8.66667 2.66667C11.9867 2.66667 14.6667 5.34667 14.6667 8.66667C14.6667 11.9867 11.9867 14.6667 8.66667 14.6667Z"/>
                                </svg>
                            </button>
                        </div>
                    </form>
                    <div class="results__search_dk results__search_dk-js">
                        <div class="wrap__results scrollbar-inner">
                            <a href="#" class="item__results">
                                <span class="name__item"><span>Заглуш</span>ка металлическая для столба 50×50 мм</span>
                                <span class="price__item">120 790 ₽</span>
                            </a>
                            <a href="#" class="item__results">
                                <span class="name__item"><span>Заглуш</span>ка металлическая для столба 60×60 мм</span>
                                <span class="price__item">2 230 ₽/шт.</span>
                            </a>
                            <a href="#" class="item__results">
                                <span class="name__item"><span>Заглуш</span>ка металлическая для столба 120×120 мм</span>
                                <span class="price__item">9 790 ₽</span>
                            </a>
                            <a href="#" class="item__results">
                                <span class="name__item"><span>Заглуш</span>ка металлическая для столба 200×200 мм</span>
                                <span class="price__item">12 230 ₽/шт.</span>
                            </a>
                            <a href="#" class="item__results">
                                <span class="name__item"><span>Заглуш</span>ка пластиковая для столба 50×50 мм</span>
                                <span class="price__item">90 ₽/шт.</span>
                            </a>
                            <a href="#" class="item__results">
                                <span class="name__item"><span>Заглуш</span>ка пластиковая для столба 60×60 мм</span>
                                <span class="price__item">230 ₽/шт.</span>
                            </a>
                            <a href="#" class="item__results">
                                <span class="name__item"><span>Заглуш</span>ка пластиковая для столба 120×120 мм</span>
                                <span class="price__item">6 425 ₽</span>
                            </a>
                            <!-- end_items -->
                            <div class="btn__results">
                                <a href="#">Показать все 34 товара</a>
                                <!-- if no item - show this and add class "in" instead of "hideI" -->
                                <span class="hideI">Ничего не найдено. Попробуйте другой запрос</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="search_mb__mid search_mb__mid-js">
                    <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16.6667 14.6667H15.6133L15.24 14.3067C16.5467 12.7867 17.3333 10.8133 17.3333 8.66667C17.3333 3.88 13.4533 0 8.66667 0C3.88 0 0 3.88 0 8.66667C0 13.4533 3.88 17.3333 8.66667 17.3333C10.8133 17.3333 12.7867 16.5467 14.3067 15.24L14.6667 15.6133V16.6667L21.3333 23.32L23.32 21.3333L16.6667 14.6667ZM8.66667 14.6667C5.34667 14.6667 2.66667 11.9867 2.66667 8.66667C2.66667 5.34667 5.34667 2.66667 8.66667 2.66667C11.9867 2.66667 14.6667 5.34667 14.6667 8.66667C14.6667 11.9867 11.9867 14.6667 8.66667 14.6667Z"/>
                    </svg>
                </div>
                <div class="basket__mid">
                    <a href="#" class="wrap__basket">
                        <div class="num__basket">445</div>
                        <div class="img__basket">
                            <svg width="28" height="28" viewBox="0 0 28 28" xmlns="http://www.w3.org/2000/svg">
                                <path d="M19.7335 15.3333C20.7335 15.3333 21.6135 14.7866 22.0668 13.96L26.8402 5.30663C27.3335 4.42663 26.6935 3.33329 25.6802 3.33329H5.94683L4.6935 0.666626H0.333496V3.33329H3.00016L7.80016 13.4533L6.00016 16.7066C5.02683 18.4933 6.30683 20.6666 8.3335 20.6666H24.3335V18H8.3335L9.80016 15.3333H19.7335ZM7.2135 5.99996H23.4135L19.7335 12.6666H10.3735L7.2135 5.99996ZM8.3335 22C6.86683 22 5.68016 23.2 5.68016 24.6666C5.68016 26.1333 6.86683 27.3333 8.3335 27.3333C9.80016 27.3333 11.0002 26.1333 11.0002 24.6666C11.0002 23.2 9.80016 22 8.3335 22ZM21.6668 22C20.2002 22 19.0135 23.2 19.0135 24.6666C19.0135 26.1333 20.2002 27.3333 21.6668 27.3333C23.1335 27.3333 24.3335 26.1333 24.3335 24.6666C24.3335 23.2 23.1335 22 21.6668 22Z"/>
                            </svg>
                        </div>
                    </a>
                </div>
                <div class="burger__mid burger__mid-js">
                    <input type="checkbox" id="checkbox_menu" class="checkbox_menu visuallyHidden">
                    <label for="checkbox_menu">
                        <span class="db hamburger hamburger-js">
                          <span class="bar bar1"></span>
                          <span class="bar bar2"></span>
                          <span class="bar bar3"></span>
                          <span class="bar bar4"></span>
                        </span>
                    </label>
                </div>
            </div>
        </div>
        <!-- menu_mobile -->
        <div class="menu_mb__header menu_mb__header-js">
            <div class="inner">
                <a href="#" class="catalog_btn__menu_mb">
                    <div class="text__btn">Каталог</div>
                    <div class="img__btn">
                        <svg width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.04575 0V2.94902L12.7268 2.95948L0 15.6863L2.0915 17.7778L14.8183 5.05098L14.8288 16.732H17.7778V0H1.04575Z"/>
                        </svg>
                    </div>
                </a>
                <nav class="menu__menu_mb">
                    <ul>
                        <li><a href="#">Спецпредложения</a></li>
                        <li><a href="#">Доставка и оплата</a></li>
                        <li><a href="#">О компании</a></li>
                        <li><a href="#">Контакты</a></li>
                    </ul>
                </nav>
                <div class="contacts__menu_mb">
                    <div class="left__contacts">
                        <div class="item__left"><a href="tel:+78129999999">+7 (812) 999-99-99</a></div>
                        <div class="item__left"><a href="mailto:example@test.ru">example@test.ru</a></div>
                    </div>
                    <div class="right__contacts">
                        <div class="item__right">
                            <div class="title__item">Офис</div>
                            <div class="list__item">
                                <div class="item__list">Пн-Чт: 9:00-17:30</div>
                                <div class="item__list">Пт: 9:00-17:00</div>
                            </div>
                        </div>
                        <div class="item__right">
                            <div class="title__item">Склад</div>
                            <div class="list__item">
                                <div class="item__list">Пн-Чт: 9:00-17:00</div>
                                <div class="item__list">Пт: 9:00-16:30</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shadow_after_menu shadow_after_menu-js"></div>
    </header>

    <main id="main" class="main main-js">
        <section data-wow-delay="0.5s" id="first_block__mp" class="first_block__mp wow slideInBottomMy">
            <div class="inner">
                <h1 class="h1_title__site">Поликарбонат <br>и металлопродукция для дома, <br>коттеджей и садовых участков</h1>
                <div class="bot__first">
                    <div class="text__bot">В Санкт-Петербурге, Москве и Краснодаре или с доставкой <br>в любой город России</div>
                    <a href="{{ route('good.index') }}" class="catalog_btn__bot">
                        <div class="text__btn">Каталог</div>
                        <div class="img__btn">
                            <svg width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.04575 0V2.94902L12.7268 2.95948L0 15.6863L2.0915 17.7778L14.8183 5.05098L14.8288 16.732H17.7778V0H1.04575Z"/>
                            </svg>
                        </div>
                    </a>
                </div>
            </div>
        </section>
        
        <section data-wow-delay="0.5s" id="category_block__mp" class="category_block__mp wow slideInBottomMy">
            <div class="inner">
                <div class="top__category">
                    <h2 class="h2_title__site"><a href="#">Популярные категории</a></h2>
                    <a href="#" class="catalog_btn__top">
                        <div class="text__btn">Смотреть все</div>
                        <div class="img__btn">
                            <svg width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.04575 0V2.94902L12.7268 2.95948L0 15.6863L2.0915 17.7778L14.8183 5.05098L14.8288 16.732H17.7778V0H1.04575Z"/>
                            </svg>
                        </div>
                    </a>
                </div>
                <div class="catalog__category">
                    @foreach ($categories as $category)
                        <a href="#" class="item__catalog">
                            <h3 class="title__item">{{ $category }}</h3>
                            <span class="img__item"><img src="images/dest/catph_mp/cat_photo1.jpg" alt=""></span>
                        </a>
                    @endforeach
                </div>
            </div>
        </section>
        <section id="promos_block__mp" class="promos_block__mp">
            <div class="slider__item slider_one-js">
                <div data-wow-delay="0.5s" class="swiper-container wow slideInBottomMy">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide">
                            <div class="slide__slider">
                                <div class="inner">
                                    <div class="labels__slide">
                                        <!-- can be more then 1 -->
                                        <div class="item__label">Спецпредложения</div>
                                    </div>
                                    <div class="main__slide">
                                        <h2 class="h2_title__site">Скидка 30% на сетку-рабицу с оцинкованным покрытием</h2>
                                        <div class="text__main">С 1 по 15 апреля 2020 года</div>
                                        <a href="#" class="catalog_btn__main">
                                            <div class="text__btn">Купить</div>
                                            <div class="img__btn">
                                                <svg width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.04575 0V2.94902L12.7268 2.95948L0 15.6863L2.0915 17.7778L14.8183 5.05098L14.8288 16.732H17.7778V0H1.04575Z"/>
                                                </svg>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="bg_img__slide"><img src="images/dest/assets/slider_second_mp.jpg" alt=""></div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="slide__slider">
                                <div class="inner">
                                    <div class="labels__slide">
                                        <!-- can be more then 1 -->
                                        <div class="item__label">Спецпредложения</div>
                                    </div>
                                    <div class="main__slide">
                                        <h2 class="h2_title__site">Скидка 30% на сетку-рабицу с оцинкованным покрытием</h2>
                                        <div class="text__main">С 1 по 15 апреля 2020 года</div>
                                        <a href="#" class="catalog_btn__main">
                                            <div class="text__btn">Купить</div>
                                            <div class="img__btn">
                                                <svg width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.04575 0V2.94902L12.7268 2.95948L0 15.6863L2.0915 17.7778L14.8183 5.05098L14.8288 16.732H17.7778V0H1.04575Z"/>
                                                </svg>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="bg_img__slide"><img src="images/dest/assets/slider_second_mp.jpg" alt=""></div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="slide__slider">
                                <div class="inner">
                                    <div class="labels__slide">
                                        <!-- can be more then 1 -->
                                        <div class="item__label">Спецпредложения</div>
                                    </div>
                                    <div class="main__slide">
                                        <h2 class="h2_title__site">Скидка 30% на сетку-рабицу с оцинкованным покрытием</h2>
                                        <div class="text__main">С 1 по 15 апреля 2020 года</div>
                                        <a href="#" class="catalog_btn__main">
                                            <div class="text__btn">Купить</div>
                                            <div class="img__btn">
                                                <svg width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.04575 0V2.94902L12.7268 2.95948L0 15.6863L2.0915 17.7778L14.8183 5.05098L14.8288 16.732H17.7778V0H1.04575Z"/>
                                                </svg>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="bg_img__slide"><img src="images/dest/assets/slider_second_mp.jpg" alt=""></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination my-swiper-pagination"></div>
                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev my-swiper-button-prev"></div>
                <div class="swiper-button-next my-swiper-button-next"></div>
            </div>
        </section>
        <section id="products_block__mp" class="products_block__mp">
            <div data-wow-delay="0.5s" class="inner wow slideInBottomMy">
                <div class="top__products">
                    <h2 class="h2_title__site"><a href="#">Популярные товары</a></h2>
                    <a href="#" class="catalog_btn__top">
                        <div class="text__btn">В каталог</div>
                        <div class="img__btn">
                            <svg width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.04575 0V2.94902L12.7268 2.95948L0 15.6863L2.0915 17.7778L14.8183 5.05098L14.8288 16.732H17.7778V0H1.04575Z"/>
                            </svg>
                        </div>
                    </a>
                </div>
                <div class="catalog__products">
                    @foreach ($goods as $good)
                        <a href="#" class="item__catalog">
                            <div class="top__item">
                                @if ($good->svoe_proizvodstvo)
                                    <div class="labels__top">
                                        <!-- can be more then 1 -->
                                        <div class="item__label">Свое производство</div>
                                    </div>
                                @endif
                                @if ($good->discount)    
                                    <div class="sales__top">
                                        <!-- can be more then 1 -->
                                        <div class="item__label">{{ $good->discount }}%</div>
                                    </div>
                                @endif
                            </div>
                            <div class="img__item">
                                <img src="{{ asset('storage/'.$good->image) }}" alt="">
                            </div>
                            <div class="bot__item">
                                <h3 class="title__bot">{{ $good->title }}</h3>
                                <div class="prices__bot">
                                    <div class="wrap__prices">
                                        <div class="no_sale__prices">{{ $good->price }} ₽</div>
                                        @if ($good->discount)
                                            <div class="with_sale__prices">{{ $good->price*($good->discount/100) }} ₽</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
                <div class="more_btn__products">
                    <div class="text__btn">Показать еще</div>
                    <div class="img__btn">
                        <svg width="22" height="6" viewBox="0 0 22 6" xmlns="http://www.w3.org/2000/svg">
                            <path d="M16.3335 3.00004C16.3335 4.46671 17.5335 5.66671 19.0002 5.66671C20.4668 5.66671 21.6668 4.46671 21.6668 3.00004C21.6668 1.53337 20.4668 0.333375 19.0002 0.333375C17.5335 0.333375 16.3335 1.53337 16.3335 3.00004ZM13.6668 3.00004C13.6668 1.53337 12.4668 0.333374 11.0002 0.333374C9.5335 0.333374 8.3335 1.53337 8.3335 3.00004C8.3335 4.46671 9.5335 5.66671 11.0002 5.66671C12.4668 5.66671 13.6668 4.46671 13.6668 3.00004ZM5.66683 3.00004C5.66683 1.53337 4.46683 0.333374 3.00016 0.333374C1.5335 0.333374 0.333496 1.53337 0.333496 3.00004C0.333496 4.46671 1.5335 5.66671 3.00016 5.66671C4.46683 5.66671 5.66683 4.46671 5.66683 3.00004Z"/>
                        </svg>
                    </div>
                </div>
            </div>
        </section>
        <section data-wow-delay="0.5s" id="why_block__mp" class="why_block__mp wow slideInBottomMy">
            <div class="inner">
                <h2 class="h2_title__site"><a href="#">Почему купить стоит у нас?</a></h2>
                <div class="right__why">
                    <div class="catalog__right">
                        <div class="item__catalog">
                            <div class="img__item">
                                <svg width="26" height="23" viewBox="0 0 26 23" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.6667 11C13.6133 11 16 8.61337 16 5.66671C16 2.72004 13.6133 0.333374 10.6667 0.333374C7.72 0.333374 5.33333 2.72004 5.33333 5.66671C5.33333 8.61337 7.72 11 10.6667 11ZM10.6667 3.00004C12.1333 3.00004 13.3333 4.20004 13.3333 5.66671C13.3333 7.13337 12.1333 8.33337 10.6667 8.33337C9.2 8.33337 8 7.13337 8 5.66671C8 4.20004 9.2 3.00004 10.6667 3.00004ZM9.33333 19H2.66667C2.93333 18.16 6.06667 16.7734 9.24 16.4134H9.28L9.89333 15.8134L12 13.7467C11.48 13.6934 11.0933 13.6667 10.6667 13.6667C7.10667 13.6667 0 15.4534 0 19V21.6667H12L9.33333 19ZM23.4667 11.6667L16.6267 18.56L13.8667 15.7867L12 17.6667L16.6267 22.3334L25.3333 13.5467L23.4667 11.6667Z"/>
                                </svg>
                            </div>
                            <div class="content__item">
                                <h3 class="title__content">Закупаем напрямую у изготовителей</h3>
                                <div class="text__content">Заводы не продают небольшие партии физическим лицам, а мы — да. Ещё у нас есть дилерская скидка, поэтому купить у нас выгоднее.</div>
                            </div>
                        </div>
                        <div class="item__catalog">
                            <div class="img__item">
                                <svg width="28" height="22" viewBox="0 0 28 22" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11.3332 16.3334H16.6665V21.6667H27.3332V4.33337H23.3332V0.333374H4.6665V4.33337H0.666504V21.6667H11.3332V16.3334ZM8.6665 16.3334V19H3.33317V7.00004H7.33317V3.00004H20.6665V7.00004H24.6665V19H19.3332V13.6667H8.6665V16.3334Z"/>
                                </svg>
                            </div>
                            <div class="content__item">
                                <h3 class="title__content">Торгуем со склада</h3>
                                <div class="text__content">Можно не оформлять заказ заранее и не ждать его, а просто приехать к нам на склад в Санкт-Петербурге, Москве или Краснодаре: товар есть всегда.</div>
                            </div>
                        </div>
                        <div class="item__catalog">
                            <div class="img__item">
                                <svg width="28" height="24" viewBox="0 0 28 24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M27.3332 10.6667V0H17.9998V4H9.99984V0H0.666504V10.6667H9.99984V6.66667H12.6665V20H17.9998V24H27.3332V13.3333H17.9998V17.3333H15.3332V6.66667H17.9998V10.6667H27.3332ZM7.33317 8H3.33317V2.66667H7.33317V8ZM20.6665 16H24.6665V21.3333H20.6665V16ZM20.6665 2.66667H24.6665V8H20.6665V2.66667Z"/>
                                </svg>
                            </div>
                            <div class="content__item">
                                <h3 class="title__content">Продаём и оптом, и в розницу</h3>
                                <div class="text__content">Можем оформить заказ на коробку гвоздей, а можем — на тонну проволоки. И то и другое можно сразу забрать со склада.</div>
                            </div>
                        </div>
                        <div class="item__catalog">
                            <div class="img__item">
                                <svg width="30" height="20" viewBox="0 0 30 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M21.6668 0.666626H3.00016C1.5335 0.666626 0.333496 1.85329 0.333496 3.33329V15.3333H3.00016C3.00016 17.5466 4.78683 19.3333 7.00016 19.3333C9.2135 19.3333 11.0002 17.5466 11.0002 15.3333H19.0002C19.0002 17.5466 20.7868 19.3333 23.0002 19.3333C25.2135 19.3333 27.0002 17.5466 27.0002 15.3333H29.6668V8.66663L21.6668 0.666626ZM19.0002 3.33329H20.3335L24.3335 7.33329H19.0002V3.33329ZM11.0002 3.33329H16.3335V7.33329H11.0002V3.33329ZM3.00016 3.33329H8.3335V7.33329H3.00016V3.33329ZM7.00016 17C6.08016 17 5.3335 16.2533 5.3335 15.3333C5.3335 14.4133 6.08016 13.6666 7.00016 13.6666C7.92016 13.6666 8.66683 14.4133 8.66683 15.3333C8.66683 16.2533 7.92016 17 7.00016 17ZM23.0002 17C22.0802 17 21.3335 16.2533 21.3335 15.3333C21.3335 14.4133 22.0802 13.6666 23.0002 13.6666C23.9202 13.6666 24.6668 14.4133 24.6668 15.3333C24.6668 16.2533 23.9202 17 23.0002 17ZM27.0002 12.6666H25.9602C25.2268 11.8533 24.1735 11.3333 23.0002 11.3333C21.8268 11.3333 20.7735 11.8533 20.0402 12.6666H9.96016C9.22683 11.8533 8.18683 11.3333 7.00016 11.3333C5.8135 11.3333 4.7735 11.8533 4.04016 12.6666H3.00016V9.99996H27.0002V12.6666Z"/>
                                </svg>
                            </div>
                            <div class="content__item">
                                <h3 class="title__content">Доставляем куда и когда вам удобно</h3>
                                <div class="text__content">Привезём заказ на автомобилях или по железной дороге. Место и время можно выбрать любое, даже если это загородный дом в выходной день.</div>
                            </div>
                        </div>
                        <div class="item__catalog">
                            <div class="img__item">
                                <svg width="26" height="20" viewBox="0 0 26 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0 0.666626V19.3333H25.3333V0.666626H0ZM5.66667 16.6666H2.66667V14H5.66667V16.6666ZM5.66667 11.3333H2.66667V8.66663H5.66667V11.3333ZM5.66667 5.99996H2.66667V3.33329H5.66667V5.99996ZM11.3333 16.6666H8.33333V14H11.3333V16.6666ZM11.3333 11.3333H8.33333V8.66663H11.3333V11.3333ZM11.3333 5.99996H8.33333V3.33329H11.3333V5.99996ZM17 16.6666H14V14H17V16.6666ZM17 11.3333H14V8.66663H17V11.3333ZM17 5.99996H14V3.33329H17V5.99996ZM22.6667 16.6666H19.6667V14H22.6667V16.6666ZM22.6667 11.3333H19.6667V8.66663H22.6667V11.3333ZM22.6667 5.99996H19.6667V3.33329H22.6667V5.99996Z"/>
                                </svg>
                            </div>
                            <div class="content__item">
                                <h3 class="title__content">Производим сами</h3>
                                <div class="text__content">Это значит, что цены у нас ниже, чем в торговых сетях в среднем на 20–30%. А ещё мы можем изготовить товар по индивидуальному заказу.</div>
                            </div>
                        </div>
                    </div>
                    <!-- btn_more -->
                    <a href="#" class="catalog_btn__right">
                        <div class="text__btn">Узнать больше</div>
                        <div class="img__btn">
                            <svg width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.04575 0V2.94902L12.7268 2.95948L0 15.6863L2.0915 17.7778L14.8183 5.05098L14.8288 16.732H17.7778V0H1.04575Z"/>
                            </svg>
                        </div>
                    </a>
                </div>
            </div>
        </section>
    </main>

    <footer data-wow-delay="0.5s" data-wow-offset="0" id="footer" class="footer footer_with_callback wow slideInBottomMy">
        <div class="main__footer main__footer-js">
            <div class="inner">
                <div class="top__main">
                    <nav class="menu__top menu__top-js">
                        <!-- start_columns -->
                        <div class="column__menu">
                            <!-- start_items -->
                            <div class="item__column dekstop_item__column">
                                <div class="title__item title__item-js">
                                    <a class="link__title" href="#">Каталог</a>
                                </div>
                            </div>
                            <div class="item__column mobile_item__column">
                                <div class="title__item title__item-js not_click__title">
                                    <a class="link__title not_click_link__title" href="#">Категории</a>
                                    <div class="btn__title btn__title-js">
                                        <span class="line_minus__btn"></span>
                                        <span class="line_plus__btn"></span>
                                    </div>
                                </div>
                                <div class="list__item">
                                    <div class="position__list"><a href="#">Категория 1</a></div>
                                    <div class="position__list"><a href="#">Категория 2</a></div>
                                    <div class="position__list"><a href="#">Категория 3</a></div>
                                    <div class="position__list"><a href="#">Категория 4</a></div>
                                    <div class="position__list"><a href="#">Категория 5</a></div>
                                    <div class="position__list"><a href="#">Категория 6</a></div>
                                </div>
                            </div>
                            <div class="item__column">
                                <div class="title__item title__item-js">
                                    <a class="link__title" href="#">Спецпредложения</a>
                                </div>
                            </div>
                        </div>
                        <div class="column__menu">
                            <!-- start_items -->
                            <div class="item__column">
                                <div class="title__item title__item-js not_click__title">
                                    <a class="link__title not_click_link__title" href="#">Компания</a>
                                    <div class="btn__title btn__title-js">
                                        <span class="line_minus__btn"></span>
                                        <span class="line_plus__btn"></span>
                                    </div>
                                </div>
                                <div class="list__item">
                                    <div class="position__list"><a href="#">О нас и производстве</a></div>
                                    <div class="position__list"><a href="#">Контакты</a></div>
                                    <div class="position__list"><span class="modal_price-js">Тест модалки</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="column__menu">
                            <!-- start_items -->
                            <div class="item__column">
                                <div class="title__item title__item-js not_click__title">
                                    <a class="link__title not_click_link__title" href="#">Информация</a>
                                    <div class="btn__title btn__title-js">
                                        <span class="line_minus__btn"></span>
                                        <span class="line_plus__btn"></span>
                                    </div>
                                </div>
                                <div class="list__item">
                                    <div class="position__list"><a href="#">Доставка и оплата</a></div>
                                    <div class="position__list"><a href="#">Пользовательское соглашение</a></div>
                                    <div class="position__list"><a href="#">Политика конфиденциальности</a></div>
                                </div>
                            </div>
                        </div>
                    </nav>
                    <div class="contacts__main">
                        <div class="left__contacts">
                            <div class="item__left"><a href="tel:+78129999999">+7 (812) 999-99-99</a></div>
                            <div class="item__left"><a href="mailto:example@test.ru">example@test.ru</a></div>
                        </div>
                        <div class="right__contacts">
                            <div class="item__right">
                                <div class="title__item">Офис</div>
                                <div class="list__item">
                                    <div class="item__list">Пн-Чт: 9:00-17:30</div>
                                    <div class="item__list">Пт: 9:00-17:00</div>
                                </div>
                            </div>
                            <div class="item__right">
                                <div class="title__item">Склад</div>
                                <div class="list__item">
                                    <div class="item__list">Пн-Чт: 9:00-17:00</div>
                                    <div class="item__list">Пт: 9:00-16:30</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bot__main">
                    <div class="copy__bot">©2021.</div>
                    <div class="payment__bot">
                        <div class="item__payment">
                            <a href="#">
                                <img class="hover__item" src="images/icons/visa_ico.svg" alt="">
                                <img src="images/icons/visa_grey_ico.svg" alt="">
                            </a>
                        </div>
                        <div class="item__payment">
                            <a href="#">
                                <img class="hover__item" src="images/icons/visa_electron_ico.svg" alt="">
                                <img src="images/icons/visa_electron_grey_ico.svg" alt="">
                            </a>
                        </div>
                        <div class="item__payment">
                            <a href="#">
                                <img class="hover__item" src="images/icons/mastercard_ico.svg" alt="">
                                <img src="images/icons/mastercard_grey_ico.svg" alt="">
                            </a>
                        </div>
                        <div class="item__payment">
                            <a href="#">
                                <img class="hover__item" src="images/icons/maestro_ico.svg" alt="">
                                <img src="images/icons/maestro_grey_ico.svg" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="developer__bot">
                        <a class="wrap__developer" href="#">
                            <span class="text__developer">Сделано в Cedro</span>
                            <span class="img__developer">
                                <svg width="16" height="14" viewBox="0 0 16 14" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.02901 0.375H7.73199C7.77599 0.375 7.817 0.3911 7.847 0.41977C7.878 0.44844 7.895 0.48732 7.895 0.52786V13.4721C7.895 13.5127 7.878 13.5516 7.847 13.5802C7.817 13.6089 7.77599 13.625 7.73199 13.625H7.02901C6.10501 13.625 5.191 13.4536 4.338 13.1205C3.485 12.7875 2.71001 12.2993 2.05701 11.6839C1.40501 11.0686 0.886997 10.3381 0.533997 9.5341C0.180997 8.7302 0 7.8685 0 6.9985C0 5.2418 0.741006 3.55711 2.05901 2.31497C3.37701 1.07283 5.16401 0.375 7.02901 0.375Z"/>
                                    <path d="M15.42 0.376953H9.83101C9.74001 0.376953 9.66602 0.446763 9.66602 0.532873V6.0206C9.66602 6.1067 9.74001 6.1765 9.83101 6.1765H15.42C15.511 6.1765 15.585 6.1067 15.585 6.0206V0.532873C15.585 0.446763 15.511 0.376953 15.42 0.376953Z"/>
                                    <path d="M15.42 7.77637H9.83101C9.74001 7.77637 9.66602 7.84617 9.66602 7.93227V13.4643C9.66602 13.5504 9.74001 13.6202 9.83101 13.6202H15.42C15.511 13.6202 15.585 13.5504 15.585 13.4643V7.93227C15.585 7.84617 15.511 7.77637 15.42 7.77637Z"/>
                                </svg>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
  </div>

  <script src="{{ URL::asset('js/jquery-3.4.1.min.js') }}"></script>
  <!-- main_js -->
  <script src="{{ URL::asset('js/lib/jquery.fancybox.js') }}"></script>
  <script src="{{ URL::asset('js/lib/wow.js') }}"></script>
  <script src="{{ URL::asset('js/lib/jquery.arcticmodal.js') }}"></script>
  <script src="{{ URL::asset('js/lib/jquery.maskedinput.min.js') }}"></script>
  <script src="{{ URL::asset('js/lib/jquery.nice-select.js') }}"></script>
  <script src="{{ URL::asset('js/lib/swiper-bundle.js') }}"></script>
  <script src="{{ URL::asset('js/main.min.js') }}"></script>

</body>
</html>