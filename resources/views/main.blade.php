@extends('layout.index')
@section('main')
    <div class="index-whyWe">
        <div class="index-whyWe__img">
            <img src="{{ asset('assets/img/whyWe.png') }}" alt="">
            <div class="index-whyWe__img-border"></div>
        </div>
        <div class="index-whyWe__content">
            <div class="index-whyWe__content-header">
                <h2 class="baskerville H1 b-color brown">Почему выбирают <span class="red-color">нас?</span></h2>
            </div>
            <div class="index-whyWe__content-list">
                <div class="index-whyWe__content-item">
                    <p class="baskerville H2">01</p>
                    <p class="pr">Мы работаем в сфере красоты с 1998 года. Мы - самые «старые» и опытные салоны нашего города, единственные - «перешагнувшие» четверть века!</p>
                </div>
                <div class="index-whyWe__content-item">
                    <p class="baskerville H2">02</p>
                    <p class="pr">Самые «оцениваемые» салоны красоты Кургана в <a href="https://yandex.ru/maps/org/zarina/1120256328/reviews/?ll=65.320942%2C55.428838&tab=reviews&utm_campaign=785379&utm_content=online_booking&utm_medium=email&utm_source=sender&utm_term=promo&z=16.44" style="color: var(--brown); text-decoration: underline;">ЯндексКартах</a> и <a href="https://2gis.ru/kurgan/firm/1407903164530727/tab/reviews?writeReview&m=65.32004%2C55.428687%2F16" style="color: var(--brown); text-decoration: underline;">2ГИС</a> (Криволапова, 12), а также на <a href="https://yandex.ru/maps/org/zarina/1009623922/reviews/?ll=65.336078%2C55.438772&tab=reviews&utm_campaign=785379&utm_content=online_booking&utm_medium=email&utm_source=sender&utm_term=promo&z=16.44" style="color: var(--brown); text-decoration: underline;">ЯндексКартах</a> и <a href="https://2gis.ru/kurgan/firm/1407903164540998/tab/reviews?writeReview&m=65.336327%2C55.438563%2F16" style="color: var(--brown); text-decoration: underline;">2ГИС</a> (Томина, 88).</p>
                </div>


                <div class="index-whyWe__content-item">
                    <p class="baskerville H2">03</p>
                    <p class="pr">Наша команда - это профессионалы высокого уровня. Все специалисты в обязательном порядке проходят ежегодные плановые повышения квалификации и внутренние аттестации. Мы - даём гарантию.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="index-services section-mg">
        <div class="index-services__header">
            <h2 class="H2 b-color baskerville brown">Наши <span class="red-color">услуги</span></h2>
            <a href="/services"><p class="H3 baskerville">Смотреть все</p></a>
        </div>
        <div class="index-services__top-section inner-mg">
            <div class="services-top-section__item">
                <a href="/services">
                    <img src="{{ asset('assets/img/s-1.jpg') }}" alt="">
                    <div class="services-blur">
                        <p class="H3">Стрижки
                            <img src="{{ 'assets/svg/services-more.svg' }}" alt="">
                        </p>
                    </div>
                </a>
            </div>
            <div class="services-top-section__item">
                <a href="/services">
                    <img src="{{ asset('assets/img/s-2.jpg') }}" alt="">
                    <div class="services-blur">
                        <p class="H3">Маникюр
                            <img src="{{ 'assets/svg/services-more.svg' }}" alt="">
                        </p>
                    </div>
                </a>
            </div>
        </div>
        <div class="index-services__bottom-section">
            <div class="services-bottom-section__item">
                <a href="/services">
                    <img src="{{ asset('assets/img/s-3.jpg') }}" alt="">
                    <div class="services-blur">
                        <p class="H3">Педикюр
                            <img src="{{ 'assets/svg/services-more.svg' }}" alt="">
                        </p>
                    </div>
                </a>
            </div>
            <div class="services-bottom-section__item">
                <a href="/services">
                    <img src="{{ asset('assets/img/s-4.jpg') }}" alt="">
                    <div class="services-blur">
                        <p class="H3">Комплексы
                            <img src="{{ 'assets/svg/services-more.svg' }}" alt="">
                        </p>
                    </div>
                </a>
            </div>
            <div class="services-bottom-section__item">
                <a href="/services">
                    <img src="{{ asset('assets/img/s-5.jpg') }}" alt="">
                    <div class="services-blur">
                        <p class="H3">Косметология
                            <img src="{{ 'assets/svg/services-more.svg' }}" alt="">
                        </p>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="index-review section-mg">
        <div class="index-services__header">
            <h2 class="H2 b-color baskerville brown">Что говорят <span class="red-color">о нас?</span></h2>
            <a href="/reviews"><p class="H3 baskerville brown">Смотреть все</p></a>
        </div>
        <div class="index-review__container inner-mg">
            <div class="review-slider__btn-prev"></div>
            <div class="swiper review-slider">
                <div class="swiper-wrapper">

                </div>
                <div class="review-slider__pagination"></div>
            </div>
            <div class="review-slider__btn-next"></div>
        </div>
    </div>
    <div class="index-contacts section-mg">
        <div class="index-contacts__map">
            <div id="map"></div>
        </div>
        <div class="index-contacts__container">
            <div class="index-contacts__container-header">
                <h2 class="H1 baskerville b-color brown">Контакты</h2>
            </div>
            <div class="index-contacts__container-text">
                <div class="index-contacts__text-item">
                    <div class="text-item__ico">
                        <img src="{{ asset('assets/svg/map.svg') }}" alt="">
                    </div>
                    <p>Улица Томина, 88, Курган,<br>
                        Курганская область, 640002</p>
                </div>
                <div class="index-contacts__text-item">
                    <div class="text-item__ico">
                        <img src="{{ asset('assets/svg/clock.svg') }}" alt="">
                    </div>
                    <p>ПН - ВС: 8:00 - 21:00</p>
                </div>
                <div class="index-contacts__text-item">
                    <div class="text-item__ico">
                        <img src="{{ asset('assets/svg/phone.svg') }}" alt="">
                    </div>
                    <a href="tel:(3522) 43-26-96"><p>(3522) 43-26-96</p></a>
                </div>
            </div>
            <div class="index-contacts__text-br"></div>
            <div class="index-contacts__container-text">
                <div class="index-contacts__text-item">
                    <div class="text-item__ico">
                        <img src="{{ asset('assets/svg/map.svg') }}" alt="">
                    </div>
                    <p>Улица Криволапова, 46, Курган, <br>
                        Курганская область, 640002</p>
                </div>
                <div class="index-contacts__text-item">
                    <div class="text-item__ico">
                        <img src="{{ asset('assets/svg/clock.svg') }}" alt="">
                    </div>
                    <p>ПН - ВС: 8:00 - 21:00</p>
                </div>
                <div class="index-contacts__text-item">
                    <div class="text-item__ico">
                        <img src="{{ asset('assets/svg/phone.svg') }}" alt="">
                    </div>
                    <a href="tel:(3522) 54-39-39"><p>(3522) 54-39-39</p></a>
                </div>
            </div>
            <div class="index-contacts__text-br"></div>
            <div class="index-contacts__container-text">
                <a href="https://vk.com/zarina45ru">
                    <div class="index-contacts__text-item">
                        <p>Группа в Вконтакте</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const swiper = new Swiper('.swiper', {

                spaceBetween: 25,
                slidesPerView: 1,

                // If we need pagination
                pagination: {
                    el: '.review-slider__pagination',
                    clickable: true,
                },

                // Navigation arrows
                navigation: {
                    nextEl: '.review-slider__btn-next',
                    prevEl: '.review-slider__btn-prev',
                },
                breakpoints: {
                    // Настройки для ширины экрана до 750px
                    900: {
                        slidesPerView: 2,
                    },
                },
            });

            DG.then(function () {
                var map = DG.map('map', {
                    center: [55.444, 65.317], // Координаты центра (Курган)
                    zoom: 13,
                    fullscreenControl: false,
                    zoomControl: false,
                });
                var customIcon = DG.icon({
                    iconUrl: '/assets/svg/marker_map.png',
                    iconSize: [20, 30], // Размер иконки (ширина, высота)
                    iconAnchor: [20, 50], // Точка привязки (центр иконки)
                    popupAnchor: [0, -50] // Сдвиг попапа вверх
                });
                // Добавляем маркеры
                var markers = [
                    { coords: [55.438585, 65.336263], address: 'Салон красоты "Зарина"' },
                    { coords: [55.428819, 65.320936], address: 'Салон красоты "Зарина"' }
                ];

                markers.forEach(function (marker) {
                    DG.marker(marker.coords, { icon: customIcon })
                        .addTo(map)
                        .bindPopup(marker.address);
                });
            });

        });
        document.addEventListener("DOMContentLoaded", function() {
            fetch('/api/main-reviews')
                .then(response => response.json())
                .then(data => {
                    const container = document.querySelector('.swiper-wrapper');
                    container.innerHTML = ''; // Очищаем контейнер перед загрузкой

                    if (data.length === 0) {
                        container.innerHTML = "<p>Отзывов пока нет.</p>";
                        return;
                    }

                    data.forEach(review => {
                        // Получаем инициалы
                        let initials = review.full_name.split(' ')
                            .map(n => n[0])
                            .join('')
                            .toUpperCase();

                        // Генерируем звёздочки
                        let stars = '';
                        for (let i = 1; i <= 5; i++) {
                            stars += `<div class="review-item__score-item ${i <= review.rating ? 'active' : ''}"></div>`;
                        }

                        // Создаём карточку отзыва
                        let reviewHTML = `
                    <div class="swiper-slide review-slider__item">
                        <div class="review-item__header">
                            <p>${initials}</p>
                        </div>
                        <div class="review-item__content">
                            <div class="review-item__content-header">
                                <p>${review.full_name}</p>
                            </div>
                            <div class="review-item__content-description baskerville">
                                <p>${review.comment}</p>
                            </div>
                            <div class="review-item__content-score">
                                ${stars}
                            </div>
                        </div>
                    </div>
                `;

                        container.innerHTML += reviewHTML;
                    });

                    // Если используешь Swiper.js, обнови слайдер
                    if (typeof swiper !== "undefined") {
                        swiper.update();
                    }
                })
                .catch(error => console.error("Ошибка загрузки отзывов:", error));
        });
    </script>

@endsection
