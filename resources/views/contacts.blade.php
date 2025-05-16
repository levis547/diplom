@extends('layout.main')
@section('main')
    <nav class="breadcrumbs" aria-label="Хлебные крошки">
        <a href="/" class="breadcrumb-link">Главная</a>
        <span class="breadcrumb-separator" aria-hidden="true"></span>
        <span class="breadcrumb-current">Контакты</span>
    </nav>
    <div class="page-header">
        <h1 class="baskerville"><span class="red-color">Контакты</span></h1>
    </div>
    <div class="contacts-container">
        <div class="contacts__map-container">
            <div class="contacts__map-content">
                <div class="map-content__item">
                    <div class="map-content__item-header">
                        <p>Адрес</p>
                    </div>
                    <p class="address-tab-1">
                        Улица Томина, 88, Курган,<br>
                        Курганская область, 640002
                    </p>
                    <p class="address-tab-2" style="display: none">
                        Улица Криволапова, 46, Курган,<br>
                        Курганская область, 640002
                    </p>
                </div>
                <div class="map-content__item">
                    <div class="map-content__item-header">
                        <p>Режим работы</p>
                    </div>
                    <div class="map-content__item-work-container">
                        <div class="map-content__item-work">
                            <p>Понедельник: </p>
                            <p>8:00 - 21:00</p>
                        </div>
                        <div class="map-content__item-work">
                            <p>Вторник:</p>
                            <p>8:00 - 21:00</p>
                        </div>
                        <div class="map-content__item-work">
                            <p>Среда:</p>
                            <p>8:00 - 21:00</p>
                        </div>
                        <div class="map-content__item-work">
                            <p>Четверг: </p>
                            <p>8:00 - 21:00</p>
                        </div>
                        <div class="map-content__item-work">
                            <p>Пятница: </p>
                            <p>8:00 - 21:00</p>
                        </div>
                        <div class="map-content__item-work">
                            <p>Суббота: </p>
                            <p>8:00 - 21:00</p>
                        </div>
                        <div class="map-content__item-work">
                            <p>Воскресенье: </p>
                            <p>8:00 - 21:00</p>
                        </div>
                    </div>
                </div>
                <div class="map-content__item">
                    <div class="map-content__item-header">
                        <p>Телефон</p>
                    </div>
                    <a href="tel:(3522) 43-26-96" class="tel-tab-1"><p>(3522) 43-26-96</p></a>
                    <a href="tel:(3522) 54-39-35" class="tel-tab-2" style="display: none"><p>(3522) 54-39-35</p></a>
                </div>
            </div>
            <div class="contacts__map">
                <div class="contacts__map-btns">
                    <div class="contacts__map-btn active" data-tab="1">
                        <p>Томина, 88</p>
                    </div>
                    <div class="contacts__map-btn" data-tab="2">
                        <p>Криволапова, 46</p>
                    </div>
                </div>
                <div id="map"></div>
            </div>
        </div>
        <div class="contacts__info-container inner-mg tab-1">
            <div class="contacts__info-img">
                <img src="assets/img/contacts_tab__one.png" alt="Томина, 88">
            </div>
            <div class="contacts-info_item">
                <div class="contacts-info_item-header">
                    <p>Остановки рядом</p>
                </div>
                <div class="contacts-info_item-text-container">
                    <div class="contacts-info_item-text">
                        <p>Кинотеатр Россия</p>
                        <p><span class="item-info__human-ico"></span>97 м / 1 мин</p>
                    </div>
                    <div class="contacts-info_item-text">
                        <p>Культурный центр Академия</p>
                        <p><span class="item-info__human-ico"></span>400 м / 5 мин</p>
                    </div>
                    <div class="contacts-info_item-text">
                        <p>Улица Рихарда Зорге</p>
                        <p><span class="item-info__human-ico"></span>690 м / 8 мин</p>
                    </div>
                    <div class="contacts-info_item-text">
                        <p>Магазин Детский мир</p>
                        <p><span class="item-info__human-ico"></span>710 м / 9 мин</p>
                    </div>
                    <div class="contacts-info_item-text">
                        <p>Гостиница Москва</p>
                        <p><span class="item-info__human-ico"></span>780 м / 9 мин</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="contacts__info-container inner-mg tab-2" style="display: none">
            <div class="contacts__info-img">
                <img src="assets/img/contacts_tab__two.png" alt="Криволапова, 46">
            </div>
            <div class="contacts-info_item">
                <div class="contacts-info_item-header">
                    <p>Остановки рядом</p>
                </div>
                <div class="contacts-info_item-text-container">
                    <div class="contacts-info_item-text">
                        <p>Областная юношеская библиотека</p>
                        <p><span class="item-info__human-ico"></span>57 м / 1 мин</p>
                    </div>
                    <div class="contacts-info_item-text">
                        <p>Парк Победы </p>
                        <p><span class="item-info__human-ico"></span>400 м / 5 мин</p>
                    </div>
                    <div class="contacts-info_item-text">
                        <p>Улица Рихарда Зорге</p>
                        <p><span class="item-info__human-ico"></span>690 м / 8 мин</p>
                    </div>
                    <div class="contacts-info_item-text">
                        <p>Магазин Детский мир</p>
                        <p><span class="item-info__human-ico"></span>710 м / 9 мин</p>
                    </div>
                    <div class="contacts-info_item-text">
                        <p>Гостиница Москва</p>
                        <p><span class="item-info__human-ico"></span>780 м / 9 мин</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            // Map initialization
            DG.then(function () {
                // Map markers data for both locations
                const mapMarkers = {
                    tab1: {
                        center: [55.438585, 65.336263],
                        markers: [
                            { coords: [55.438585, 65.336263], address: 'Салон красоты "Зарина", Томина, 88' }
                        ]
                    },
                    tab2: {
                        center: [55.428797, 65.320941], // Updated coordinates for Криволапова, 46
                        markers: [
                            { coords: [55.428797, 65.320941], address: 'Салон красоты "Зарина", Криволапова, 46' }
                        ]
                    }
                };

                // Create map instance
                let map = DG.map('map', {
                    center: mapMarkers.tab1.center,
                    zoom: 13,
                    fullscreenControl: false,
                    zoomControl: false,
                });

                // Custom marker icon
                const customIcon = DG.icon({
                    iconUrl: '/assets/svg/marker_map.png',
                    iconSize: [20, 30],
                    iconAnchor: [20, 50],
                    popupAnchor: [0, -50]
                });

                // Active markers group
                let markersGroup = DG.featureGroup().addTo(map);

                // Function to add markers to the map
                function addMarkers(markersData) {
                    // Clear existing markers
                    markersGroup.clearLayers();

                    // Add new markers
                    markersData.markers.forEach(function(marker) {
                        DG.marker(marker.coords, { icon: customIcon })
                            .addTo(markersGroup)
                            .bindPopup(marker.address);
                    });

                    // Center map on the new markers
                    map.setView(markersData.center, 13);
                }

                // Initialize with first tab markers
                addMarkers(mapMarkers.tab1);

                // Tab switching functionality
                const mapBtns = document.querySelectorAll('.contacts__map-btn');
                mapBtns.forEach(btn => {
                    btn.addEventListener('click', function() {
                        const tabNumber = this.getAttribute('data-tab');

                        // Update active tab button
                        mapBtns.forEach(btn => btn.classList.remove('active'));
                        this.classList.add('active');

                        // Hide all tab content
                        document.querySelectorAll('.address-tab-1, .address-tab-2').forEach(el => el.style.display = 'none');
                        document.querySelectorAll('.tel-tab-1, .tel-tab-2').forEach(el => el.style.display = 'none');
                        document.querySelectorAll('.contacts__info-container').forEach(el => el.style.display = 'none');

                        // Show selected tab content
                        document.querySelectorAll(`.address-tab-${tabNumber}`).forEach(el => el.style.display = 'block');
                        document.querySelectorAll(`.tel-tab-${tabNumber}`).forEach(el => el.style.display = 'block');
                        document.querySelector(`.contacts__info-container.tab-${tabNumber}`).style.display = 'flex';

                        // Update map markers
                        addMarkers(tabNumber === '1' ? mapMarkers.tab1 : mapMarkers.tab2);
                    });
                });
            });
        });
    </script>
@endsection
