@extends('layout.main')

@section('main')
    <nav class="breadcrumbs" aria-label="Хлебные крошки">
        <a href="/" class="breadcrumb-link">Главная</a>
        <span class="breadcrumb-separator" aria-hidden="true"></span>
        <span class="breadcrumb-current">Команда</span>
    </nav>
    <div class="page-header">
        <h1 class="baskerville"><span class="red-color">Команда</span></h1>
    </div>
    <div class="team-container">
        <div class="team-container__main">
            <div class="team-container__main-card">
                <div class="team-container__card-img">
                    <img src="{{ asset('assets/img/dir_img.png') }}" alt="">
                </div>
                <div class="team-container__card-text">
                    <p>Сабурова Галина Федоровна</p>
                </div>
            </div>
            <div class="team-container__main-content">
                <h2>Директор</h2>
                <p>… когда привычка быть красивой превращается в нечто большее!
                    <br><br>
                    Мы работаем для тех, кто хочет сохранить молодость и красоту. Быть красивым и ухоженным – желание любого человека. Бережное отношение к себе, к своему здоровью, стремление к душевному равновесию и жизнерадостному восприятию мира – это и есть молодость!
                    <br><br>
                    Стоит только понять, что самая большая ценность в вашей жизни – это Вы сами, Ваша внешняя и внутренняя красота, сохранить которую Вам помогут специалисты салона «Зарина». Это возможность свидания лицом к лицу с теми, кто владеет всеми секретами красоты.</p>
            </div>
        </div>

        <!-- Контейнер для переключения табов -->
        <div class="team-container__content">
            <div class="team-container__content-header" id="salons-tabs">
                <!-- Табы будут добавляться динамически через JS -->
            </div>

            <!-- Общий контейнер для всех специализаций -->
            <div class="team-container_row-main" id="masters-container">
                <!-- Здесь будут добавляться контейнеры для каждой специализации -->
            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            // Загружаем данные о салонах с API
            fetch('/api/salons')
                .then(response => response.json())
                .then(salons => {
                    const salonsTabs = document.getElementById('salons-tabs');

                    // Создаем табы для каждого салона
                    salons.forEach((salon, index) => {
                        const tab = document.createElement('div');
                        tab.classList.add('team-container__header-btn');
                        if (index === 0) {
                            tab.classList.add('active');
                        }

                        // Убираем "г. Курган" или другие города из адреса
                        const streetAddress = salon.address.replace(/^г\.\s*[А-Яа-яЁё]+\s*,?\s*/g, '');

                        tab.setAttribute('data-salon-id', salon.id);
                        tab.innerHTML = `<p>${streetAddress}</p>`;
                        salonsTabs.appendChild(tab);
                    });

                    // Загрузить мастеров для первого салона
                    loadMasters(salons[0].id);

                    // Добавляем обработчик переключения табов
                    document.querySelectorAll('.team-container__header-btn').forEach(tab => {
                        tab.addEventListener('click', function () {
                            document.querySelector('.team-container__header-btn.active').classList.remove('active');
                            tab.classList.add('active');

                            const salonId = tab.getAttribute('data-salon-id');
                            loadMasters(salonId); // Загружаем мастеров для выбранного салона
                        });
                    });
                });

            // Функция для загрузки мастеров по специализациям
            function loadMasters(salonId) {
                fetch(`/api/masters/${salonId}`)
                    .then(response => response.json())
                    .then(data => {
                        const mastersContainer = document.getElementById('masters-container');
                        mastersContainer.innerHTML = ''; // Очистить контейнер перед добавлением новых мастеров

                        // Группируем мастеров по специализациям
                        const groupedMasters = data.reduce((acc, master) => {
                            if (!acc[master.specialization]) {
                                acc[master.specialization] = [];
                            }
                            acc[master.specialization].push(master);
                            return acc;
                        }, {});

                        // Общий контейнер для всех специализаций
                        for (const specialization in groupedMasters) {
                            // Создаем отдельный контейнер для каждой специализации
                            const specializationSection = document.createElement('div');
                            specializationSection.classList.add('team-container__row');

                            // Заголовок для специализации с правильным окончанием
                            const specializationHeader = document.createElement('div');
                            specializationHeader.classList.add('team-container__row-header');
                            specializationHeader.innerHTML = `
                                <p>${getSpecializationTitle(specialization)}</p>
                                <div class="team-container__row-mobile-arrow"></div>
                            `;
                            specializationSection.appendChild(specializationHeader);

                            // Контейнер для карточек мастеров этой специализации
                            const specializationCards = document.createElement('div');
                            specializationCards.classList.add('team-container__row-cards');

                            // Добавляем карточки мастеров для этой специализации
                            groupedMasters[specialization].forEach(master => {
                                const masterCard = document.createElement('div');
                                masterCard.classList.add('team-container__row-card');
                                masterCard.innerHTML = `
                                    <div class="team-container__row-card-img">
                                        <img src="${master.image_path ? `{{ asset('storage') }}/${master.image_path}` : '{{ asset('assets/img/dir_img.png') }}'}" alt="">
                                    </div>
                                    <div class="team-container__row-card-text">
                                        <p>${master.full_name}</p>
                                    </div>
                                `;
                                specializationCards.appendChild(masterCard);
                            });

                            specializationSection.appendChild(specializationCards);
                            mastersContainer.appendChild(specializationSection);
                        }

                        // Включаем мобильную функциональность для раскрывающихся списков
                        toggleAccordion();
                    })
                    .catch(error => {
                        console.error('Ошибка при загрузке данных мастеров:', error);
                    });
            }

            // Функция для генерации заголовка специализации с правильным окончанием
            function getSpecializationTitle(specialization) {
                const specializationTitleMap = {
                    "Администратор": "Администраторы",
                    "Косметолог": "Косметологи",
                    "Стилист": "Стилисты",
                    "Ногтевой сервис": "Ногтевой сервис"
                };

                // Если специализация есть в маппинге, используем ее. Иначе, возвращаем исходное название.
                return specializationTitleMap[specialization] || specialization;
            }

            // Функция для раскрывающихся списков (аккордеонов) на мобильных устройствах
            function toggleAccordion() {
                if (window.innerWidth <= 750) {
                    document.querySelectorAll(".team-container__row-header").forEach(header => {
                        header.addEventListener("click", function () {
                            const bodyCard = header.nextElementSibling; // находим следующий элемент (карточки)
                            const arrow = header.querySelector(".team-container__row-mobile-arrow"); // находим стрелочку

                            header.classList.toggle("active");
                            bodyCard.classList.toggle("active");

                            // Переключаем направление стрелки
                            if (header.classList.contains("active")) {
                                arrow.style.transform = "rotate(180deg)"; // Стрелка вниз
                            } else {
                                arrow.style.transform = "rotate(0deg)"; // Стрелка вверх
                            }
                        });
                    });
                }
            }

            // Вызов функции при загрузке страницы
            toggleAccordion();
            // Проверка при изменении размера окна
            window.addEventListener("resize", toggleAccordion);
        });
    </script>
@endsection
