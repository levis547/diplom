<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }} ">
    <title>{{ $meta_title }}</title>
    <meta name="description" content="{{ $meta_description }}">
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}?v={{ filemtime(public_path('css/index.css')) }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}?v={{ filemtime(public_path('css/main.css')) }}">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}?v={{ filemtime(public_path('css/header.css')) }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}?v={{ filemtime(public_path('css/main.css')) }}">
    <link rel="stylesheet" href="{{ asset('css/team.css') }}?v={{ filemtime(public_path('css/team.css')) }}">
    <link rel="stylesheet" href="{{ asset('css/error.css') }}?v={{ filemtime(public_path('css/error.css')) }}">
    <link rel="stylesheet" href="{{ asset('css/appointment.css') }}?v={{ filemtime(public_path('css/appointment.css')) }}">
    <link rel="stylesheet" href="{{ asset('css/modal_review.css') }}?v={{ filemtime(public_path('css/modal_review.css')) }}">
    <link rel="stylesheet" href="{{ asset('css/about.css') }}?v={{ filemtime(public_path('css/about.css')) }}">
    <link rel="stylesheet" href="{{asset('modal/dist/hystmodal.min.css')}}?v={{ filemtime(public_path('modal/dist/hystmodal.min.css')) }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.css">
    <link rel="canonical" href="{{ url()->current() }}">


    <script src="{{ asset('modal/dist/hystmodal.min.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://maps.api.2gis.ru/2.0/loader.js?pkg=full"></script>
    <script src="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/inputmask/dist/inputmask.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
    <script src="{{ asset('js/sitebar.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/moment@2.29.1/moment.min.js"></script>
    <style>
        @font-face {
            font-family: "titilliumwebrusbydaymarius_bd";
            src: url('{{ asset('font/titilliumwebrusbydaymarius_bd.ttf') }}');
        }
        @font-face {
            font-family: "titilliumwebrusbydaymarius_ex";
            src: url('{{ asset('font/titilliumwebrusbydaymarius_ex.ttf') }}');
        }
        @font-face {
            font-family: "titilliumwebrusbydaymarius_light";
            src: url('{{ asset('font/titilliumwebrusbydaymarius_light.otf') }}');
        }
        @font-face {
            font-family: "titilliumwebrusbydaymarius_rg";
            src: url('{{ asset('font/titilliumwebrusbydaymarius_rg.ttf') }}');
        }
        @font-face {
            font-family: "titilliumwebrusbydaymarius_sm";
            src: url('{{ asset('font/titilliumwebrusbydaymarius_sm.ttf') }}');
        }
        @font-face {
            font-family: "ru_Baskerville";
            src: url('{{ asset('font/ru_Baskerville.ttf') }}');
        }

    </style>
</head>
<style>
    @font-face {
        font-family: "titillium";
    url('{{asset('font/titillium.ttf')}}');
    }
    @font-face {
        font-family: baskerville;
    url('{{asset('font/baskerville.otf')}}');
    }
</style>
<body>
<header class="index-banner">
    <div class="container">
        <div class="header-menu">
            <div class="header-menu__logo">
                <a href="/"><img src="{{ asset('assets/svg/logo.svg') }}" alt=""></a>
            </div>
            <div class="header-menu__container">
                <div class="header-menu__item">
                    <a href="/about"><p>О нас</p></a>
                </div>
                <div class="header-menu__item-dropdown">
                    <div class="header-menu__item-dropdown__element">
                        <a href="/services"><p>Услуги</p></a>
                    </div>
                    <div class="header-menu__item-dropdown__list">
                        <a href="/services"><p>Парикмахерские услуги</p></a>
                        <a href="/services"><p>Косметология</p></a>
                        <a href="/services"><p>Ногтевой сервис</p></a>
                    </div>
                </div>
                <div class="header-menu__item">
                    <a href="/team"><p>Команда</p></a>
                </div>
                <div class="header-menu__item">
                    <a href="/portfolio"><p>Портфолио</p></a>
                </div>
                <div class="header-menu__item">
                    <a href="/reviews"><p>Отзывы</p></a>
                </div>
                <div class="header-menu__item">
                    <a href="/contacts"><p>Контакты</p></a>
                </div>
            </div>
            <div class="header-menu__container">
                <a href="https://vk.com/zarina45ru">
                    <div class="header-banner__content-link__item">
                    </div>
                </a>
                <div class="header-menu__item-btn">
                    <a href="" data-hystmodal="#myModal"><p>Записаться</p></a>
                </div>
            </div>
            <div class="header-menu__container mobile" id="mobile-sitebar__open">
                <div class="header-menu__mobile-ico"></div>
            </div>
        </div>
        <div class="header-banner__content">
            <div class="header-banner__content-container">
                <div class="header-banner__content-text">
                    <p>Знаем секрет <span class="baskerville red-color">красоты!</span></p>
                    <p>Исполним <span class="baskerville red-color">Ваши </span>мечты!</p>
                    <p>Это не волшебство, а наших <span class="baskerville red-color dec-line">рук мастерство!</span></p>
                </div>
                <a href="#" class="baskerville">
                    <div class="header-banner__content-btn" data-hystmodal="#myModal">
                        <p>Записаться на услугу</p>
                        <div class="header-banner__content-btn__img">
                            <img src="{{ asset('assets/svg/arrow-appoinment.svg') }}" alt="">
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="mobile-sitebar" id="mobile-sitebar">
        <div class="mobile-sitebar__close" id="mobile-sitebar__close">
            <div class="mobile-sitebar__close-ico"></div>
        </div>
        <div class="mobile-sitebar__links">
            <div class="mobile-sitebar__link">
                <a href="/about"><p>О нас</p></a>
            </div>
            <div class="mobile-sitebar__link dropdown" id="mobile-sitebar__dropdown">
                <a href="/services"><p>Услуги <span class="mobile-sitebar__dropdown-arrow"></span></p></a>
                <div class="mobile-sitebar__dropdown-items">
                    <div class="mobile-sitebar__dropdown-item">
                        <a href="/services"><p>Парикмахерский услуги</p></a>
                    </div>
                    <div class="mobile-sitebar__dropdown-item">
                        <a href="/services"><p>Косметология</p></a>
                    </div>
                    <div class="mobile-sitebar__dropdown-item">
                        <a href="/services"><p>Ногтевой сервис</p></a>
                    </div>
                </div>
            </div>
            <div class="mobile-sitebar__link">
                <a href="/team"><p>Команда</p></a>
            </div>
            <div class="mobile-sitebar__link">
                <a href="/portfolio"><p>Портфолио</p></a>
            </div>
            <div class="mobile-sitebar__link">
                <a href="/reviews"><p>Отзывы</p></a>
            </div>
            <div class="mobile-sitebar__link">
                <a href="/contacts"><p>Контакты</p></a>
            </div>
        </div>
        <div class="mobile-sitebar__hotBtn">
            <a href="#">
                <div class="header-banner__content-link__item">
                </div>
            </a>
            <div class="header-menu__item-btn">
                <a href="" data-hystmodal="#myModal"><p>Записаться</p></a>
            </div>
        </div>
    </div>
</header>
<main>
    <div class="container">
        @yield('main')
    </div>
</main>
<footer>
    <div class="container">
        <div class="footer-container">
            <div class="footer-item">
                <div class="footer-item__header">
                    <a href="/services"><p>Услуги</p></a>
                </div>
                <div class="footer-item__list">
                    <a href="/services"><p>Парикмахерские</p></a>
                    <a href="/services"><p>Косметология</p></a>
                    <a href="/services"><p>Ногтевой сервис</p></a>
                </div>
            </div>
            <div class="footer-item">
                <a href="/about"><p>О нас</p></a>
                <a href="/team"><p>Команда</p></a>
                <a href="/reviews"><p>Портфолио</p></a>
                <a href="/reviews"><p>Отзывы</p></a>
            </div>
            <div class="footer-item">
                <div class="footer-item__header">
                    <a href="/contacts"><p>Контакты</p></a>
                </div>
                <div class="footer-item__list-address">
                    <div class="footer-item__list-address__item">
                        <p class="item-header">Томина, 88</p>
                        <a href="tel:(3522)43-26-96"><p>(3522) 43-26-96</p></a>
                        <p>ПН - ВС: 8:00 - 21:00</p>
                    </div>
                    <div class="footer-item__list-address__item">
                        <p class="item-header">Криволапова, 46</p>
                        <a href="tel:(3522)43-26-96"><p>(3522) 54-39-35</p></a>
                        <p>ПН - ВС: 8:00 - 21:00</p>
                    </div>
                </div>
            </div>
            <div class="footer-item">
                <div class="footer-item__links">
                    <a href="https://vk.com/zarina45ru">
                        <div class="header-banner__content-link__item">
                        </div>
                    </a>
                </div>
            </div>
            <div class="footer-item">
                <div class="footer-item__logo">
                    <img src="{{ asset('assets/svg/logo.svg') }}" alt="">
                </div>
            </div>
        </div>
        <div class="footer-container__bottom">
            <p>© {{ date('Y') }}, Все права защищены. Zarina</p>
            <a href="/privacy-policy"><p>Политика конфиденциальности</p></a>
        </div>
    </div>
</footer>



@include('modal.modal')
@include('modal.reviews')
<script>
    const myModal = new HystModal({
        linkAttributeName: "data-hystmodal",

    });
</script>
</body>
</html>
