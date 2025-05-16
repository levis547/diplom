<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Салон красоты</title>
    <link rel="stylesheet" href="{{ asset('assets/css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/footer.css') }}">
    <link rel="stylesheet" href="{{asset('modal/dist/hystmodal.min.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.css">
    <script src="{{ asset('modal/dist/hystmodal.min.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="https://cdn.jsdelivr.net/npm/inputmask/dist/inputmask.min.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }} ">

    <style>
        .hystmodal__window{
            padding: 30px;
        }
    </style>
</head>
<body>
<header>
    <div class="container">
        <div class="header__logo">
            <img src="{{asset('assets/media/logo.png')}}" alt="logo">
        </div>
        <div class="header__menu">
            <p></p>
            <div class="header__menu-nav">
                <p>Услуги</p>
                <p>Команда</p>
                <p>Отзывы</p>
                <p>Контакты</p>
            </div>
            <div class="header__menu-left__container">
                <div class="header__menu-button">
                    <p>записаться</p>
                </div>
                <div class="header__menu-mobile"></div>
            </div>
        </div>
    </div>
    <div class="side-menu" id="sideMenu">
        <div class="side-menu__content">
            <div class="side-menu__container">
                <span class="side-menu__close" id="closeMenu"><i class="fa-solid fa-xmark"></i></span>
                <div class="side-menu__item">
                    <i class="fas fa-concierge-bell"></i>
                    <p>Услуги</p>
                </div>
                <div class="side-menu__item">
                    <i class="fas fa-users"></i>
                    <p>Команда</p>
                </div>
                <div class="side-menu__item">
                    <i class="fas fa-comment-dots"></i>
                    <p>Отзывы</p>
                </div>
                <div class="side-menu__item">
                    <i class="fas fa-envelope"></i>
                    <p>Контакты</p>
                </div>
            </div>
            <div class="side-menu__mobile-container">
                <div class="header__menu-button">
                    <p>записаться</p>
                </div>
            </div>
        </div>
    </div>
</header>
<main class="container my-5">
    <a href="#" data-hystmodal="#myModal">Записаться</a>
    <a href="#" data-hystmodal="#reviews">Оставить отзыв</a>
</main>
<footer>
    <div class="container">
        <div class="footer__menu-container">
            <div class="footer__logo">
                <img src="{{asset('assets/media/logo.png')}}" alt="logo">
            </div>
            <div class="footer__menu">
                <div class="footer__menu-nav">
                    <p>Услуги</p>
                    <p>Команда</p>
                    <p>Отзывы</p>
                    <p>Контакты</p>
                </div>
            </div>
            <div class="footer__menu-social">
                <img src="{{asset('assets/media/vk.svg')}}" alt="logo">
                <img src="{{asset('assets/media/instagram.svg')}}" alt="logo">
            </div>
        </div>
        <div class="footer__split"></div>
        <div class="footer__copyright">
            <p>© 2024. Все права защищены. Салон красоты Zarina.</p>
        </div>
    </div>
</footer>
<script>
    const myModal = new HystModal({
        linkAttributeName: "data-hystmodal",

    });

    document.addEventListener('DOMContentLoaded', function () {
        const menuButton = document.querySelector('.header__menu-mobile');
        const sideMenu = document.getElementById('sideMenu');
        const closeButton = document.getElementById('closeMenu');

        menuButton.addEventListener('click', function () {
            sideMenu.style.right = '0';
            document.body.classList.add('no-scroll'); // Отключаем скролл страницы
        });

        closeButton.addEventListener('click', function () {
            sideMenu.style.right = '-300px';
            document.body.classList.remove('no-scroll'); // Включаем скролл страницы
        });

        // Закрытие меню при клике вне области меню
        window.addEventListener('click', function (event) {
            if (event.target !== sideMenu && event.target !== menuButton && !sideMenu.contains(event.target)) {
                sideMenu.style.right = '-300px';
                document.body.classList.remove('no-scroll'); // Включаем скролл страницы
            }
        });
    });

</script>


@include('modal.modal')
@include('modal.reviews')
</body>
</html>


