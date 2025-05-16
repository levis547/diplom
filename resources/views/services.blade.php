@extends('layout.main')
@section('main')
    <style>
        .services-dropdown__table-container {
            display: none;
        }

        .services-dropdown__table-container.active {
            display: block;
        }

        .services-dropdown__table-container.active {
            display: block;
        }
        .services-content{
            display: flex;
        }
        .services-content.active {
            display: block;
        }

    </style>
    <nav class="breadcrumbs" aria-label="Хлебные крошки">
        <a href="/" class="breadcrumb-link">Главная</a>
        <span class="breadcrumb-separator" aria-hidden="true"></span>
        <span class="breadcrumb-current">Услуги</span>
    </nav>
    <div class="page-header">
        <h1 class="baskerville">Наши <span class="red-color">услуги</span></h1>
    </div>
    <div class="services-container">
        <div class="services-header">
            <div class="services-header__item active" data-tab="tab-one">
                <p>Парикмахерский услуги</p>
            </div>
            <div class="services-header__item" data-tab="tab-two">
                <p>Косметология</p>
            </div>
            <div class="services-header__item" data-tab="tab-three">
                <p>Ногтевой сервис</p>
            </div>
        </div>
        <div class="services-content inner-mg  tab-one active">
            <div class="services-dropdown">
                <div class="services-dropdown__header">
                    <h2 class="baskerville">Стрижки</h2>
                    <div class="services-dropdown__header-arrow"></div>
                </div>
                <div class="services-dropdown__content">
                    <div class="services-dropdown__content-img">
                        <img class="male-image" src="{{ asset('assets/img/services__twoooo.png') }}" alt="" style="display: none">
                        <img class="female-image" src="{{ asset('assets/img/services__one.png') }}" alt="">
                    </div>


                    <div class="services-dropdown__content-table">
                        <div class="services-dropdown__table-switcher">
                            <div class="table-switcher__item" onclick="switchTab(event, 1, 'haircuts')">
                                <p class="baskerville">Мужские</p>
                            </div>
                            <div class="table-switcher__item active" onclick="switchTab(event, 2, 'haircuts')">
                                <p class="baskerville">Женские</p>
                            </div>
                        </div>
                        <div class="services-dropdown__table-container tab-1">
                            <table>
                                <thead>
                                <tr>
                                    <td></td>
                                    <td>Томина, 88</td>
                                    <td>Криволапова, 47</td>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>модельная</td>
                                    <td>1.000 -1.200₽</td>
                                    <td>800₽</td>
                                </tr>
                                <tr>
                                    <td>машинкой «наголо»</td>
                                    <td>600₽</td>
                                    <td>400₽</td>
                                </tr>
                                <tr>
                                    <td>борода</td>
                                    <td>300₽</td>
                                    <td>200₽</td>
                                </tr>
                                <tr>
                                    <td>художественный рисунок</td>
                                    <td>100 - 200₽</td>
                                    <td>100 - 200₽</td>
                                </tr>
                                <tr>
                                    <td>стрижка (до 7 лет)</td>
                                    <td>700₽</td>
                                    <td>500₽</td>
                                </tr>
                                </tbody>
                            </table>

                        </div>
                        <div class="services-dropdown__table-container tab-2 active">
                            <table>
                                <thead>
                                <tr>
                                    <td></td>
                                    <td>Томина, 88</td>
                                    <td>Криволапова, 47</td>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>короткие</td>
                                    <td>1.600₽</td>
                                    <td>1.100₽</td>
                                </tr>
                                <tr>
                                    <td>средние (до плеч)</td>
                                    <td>1.800₽</td>
                                    <td>1.200₽</td>
                                </tr>
                                <tr>
                                    <td>длинные (до лопаток)</td>
                                    <td>2.200₽</td>
                                    <td>1.000₽</td>
                                </tr>
                                <tr>
                                    <td>очень длинные</td>
                                    <td>2.400₽</td>
                                    <td>от 1.400₽</td>
                                </tr>
                                <tr>
                                    <td>коррекция чёлки</td>
                                    <td>200-300₽</td>
                                    <td>200₽</td>
                                </tr>
                                <tr>
                                    <td>стрижка (до 7 лет)</td>
                                    <td>700₽</td>
                                    <td>400₽</td>
                                </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
            <div class="services-dropdown">
                <div class="services-dropdown__header">
                    <h2 class="baskerville">Укладки</h2>
                    <div class="services-dropdown__header-arrow"></div>
                </div>
                <div class="services-dropdown__content">
                    <div class="services-dropdown__content-img">
                        <img class="female-image" src="{{ asset('assets/img/ZKJHSDGFKZJSDHG.png') }}" alt="">
                    </div>


                    <div class="services-dropdown__content-table">
                        <div class="services-dropdown__table-container tab-2 active">
                            <table>
                                <thead>
                                <tr>
                                    <td></td>
                                    <td>Томина, 88</td>
                                    <td>Криволапова, 47</td>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>короткие</td>
                                    <td>1.100₽</td>
                                    <td>700₽</td>
                                </tr>
                                <tr>
                                    <td>средние (до плеч)</td>
                                    <td>1.600₽</td>
                                    <td>800₽</td>
                                </tr>
                                <tr>
                                    <td>бордлинные (до лопаток)</td>
                                    <td>1.900₽</td>
                                    <td>900₽</td>
                                </tr>
                                <tr>
                                    <td>очень длинные </td>
                                    <td>2.000₽</td>
                                    <td>от 1.000₽</td>
                                </tr>
                                <tr>
                                    <td>Локоны, кудри</td>
                                    <td>от 1.000₽</td>
                                    <td>от 700₽</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="services-dropdown">
                <div class="services-dropdown__header">
                    <h2 class="baskerville">Окрашивание</h2>
                    <div class="services-dropdown__header-arrow"></div>
                </div>
                <div class="services-dropdown__content">
                    <div class="services-dropdown__content-img">
                        <img class="male-image" src="{{ asset('assets/img/szkdjhgfskjdfhgjskad.png') }}" alt="" style="display: none">
                        <img class="female-image" src="{{ asset('assets/img/aoisdfgsjdhgfjksahdf.png') }}" alt="">
                    </div>


                    <div class="services-dropdown__content-table">
                        <div class="services-dropdown__table-switcher">
                            <div class="table-switcher__item" onclick="switchTab(event, 1)">
                                <p class="baskerville">Мужские</p>
                            </div>
                            <div class="table-switcher__item active" onclick="switchTab(event, 2)">
                                <p class="baskerville">Женские</p>
                            </div>
                        </div>
                        <div class="services-dropdown__table-container tab-1">
                            <table>
                                <thead>
                                <tr>
                                    <td></td>
                                    <td>Томина, 88</td>
                                    <td>Криволапова, 47</td>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>мужское тонирование волос <br>
                                        (камуфлирование седины)</td>
                                    <td>1.100₽</td>
                                    <td>700₽</td>
                                </tr>

                                </tbody>
                            </table>

                        </div>
                        <div class="services-dropdown__table-container tab-2 active">
                            <table>
                                <thead>
                                <tr>
                                    <td></td>
                                    <td>Томина, 88</td>
                                    <td>Криволапова, 47</td>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>окрашивание волос</td>
                                    <td>от 3.000₽</td>
                                    <td>от 2.000₽</td>
                                </tr>

                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="services-content inner-mg  tab-two" style="display: none">
            <div class="cosmetology-dropdown">
                <div class="services-dropdown__header">
                    <h2 class="baskerville">Уходные процедуры </h2>
                    <div class="services-dropdown__header-arrow"></div>
                </div>
                <div class="services-dropdown__content">
                    <div class="services-dropdown__content-img">
                        <img src="{{ asset('assets/img/sdfkljghsdfh.png') }}" alt="">
                    </div>
                    <div class="services-dropdown__content-table">

                        <div class="services-dropdown__table-container tab-1 active">
                            <table>
                                <thead>
                                <tr>
                                    <td></td>
                                    <td>Томина, 88</td>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>За кожей лица, шеи, <br> декольте</td>
                                    <td>1500-2000₽</td>
                                </tr>

                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
            <div class="cosmetology-dropdown">
                <div class="services-dropdown__header">
                    <h2 class="baskerville">Чистка</h2>
                    <div class="services-dropdown__header-arrow"></div>
                </div>
                <div class="services-dropdown__content">
                    <div class="services-dropdown__content-img">
                        <img src="{{ asset('assets/img/sdfkljghsdfh.png') }}" alt="">
                    </div>
                    <div class="services-dropdown__content-table">
                        <div class="services-dropdown__table-container tab-2 active">
                            <table>
                                <thead><tr><td></td><td>Томина, 88</td></tr></thead>
                                <tbody>
                                <tr>
                                    <td>Глубокая атравматичная чистка лица<br>(демакияж, пилинг, маска, массаж, дарсонваль)</td>
                                    <td>2000₽</td>
                                </tr>
                                <tr><td>УЗ-чистка лица</td><td>1500–2000₽</td></tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cosmetology-dropdown">
                <div class="services-dropdown__header">
                    <h2 class="baskerville">Пилинги</h2>
                    <div class="services-dropdown__header-arrow"></div>
                </div>
                <div class="services-dropdown__content">
                    <div class="services-dropdown__content-img">
                        <img src="{{ asset('assets/img/sdfkljghsdfh.png') }}" alt="">
                    </div>
                    <div class="services-dropdown__content-table">
                        <div class="services-dropdown__table-container tab-3 active">
                            <table>
                                <thead><tr><td></td><td>от 1000 до 3500₽</td></tr></thead>
                                <tbody>
                                <tr><td>УЗ-пилинг</td><td></td></tr>
                                <tr><td>Medic Peel (срединный пилинг)</td><td></td></tr>
                                <tr><td>Пилинг миндальный</td><td></td></tr>
                                <tr><td>Энзимный пилинг</td><td></td></tr>
                                <tr><td>Пировиноградный</td><td></td></tr>
                                <tr><td>Салициловый (для проблемной кожи)</td><td></td></tr>
                                <tr><td>Пилинг Джесснера (для проблемной кожи)</td><td></td></tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cosmetology-dropdown">
                <div class="services-dropdown__header">
                    <h2 class="baskerville">Дополнительные процедуры</h2>
                    <div class="services-dropdown__header-arrow"></div>
                </div>
                <div class="services-dropdown__content">
                    <div class="services-dropdown__content-img">
                        <img src="{{ asset('assets/img/sdfkljghsdfh.png') }}" alt="">
                    </div>
                    <div class="services-dropdown__content-table">
                        <div class="services-dropdown__table-container tab-4 active">
                            <table>
                                <thead><tr><td></td><td>Томина, 88</td></tr></thead>
                                <tbody>
                                <tr><td>Массажи лица</td><td>1000–2500₽</td></tr>
                                <tr><td>Окрашивание бровей (краска / хна)</td><td>200 / 400₽</td></tr>
                                <tr><td>Окрашивание ресниц</td><td>200₽</td></tr>
                                <tr><td>Коррекция бровей</td><td>200₽</td></tr>
                                <tr><td>Прокол ушей / серьги</td><td>600 / 200–300₽</td></tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cosmetology-dropdown">
                <div class="services-dropdown__header">
                    <h2 class="baskerville">Шугаринг (сахарная депиляция)</h2>
                    <div class="services-dropdown__header-arrow"></div>
                </div>
                <div class="services-dropdown__content">
                    <div class="services-dropdown__content-img">
                        <img src="{{ asset('assets/img/sdfkljghsdfh.png') }}" alt="">
                    </div>
                    <div class="services-dropdown__content-table">
                        <div class="services-dropdown__table-container tab-5 active">
                            <table>
                                <thead><tr><td></td><td>Томина, 88</td></tr></thead>
                                <tbody>
                                <tr><td>Верхней губы + подбородок</td><td>300₽</td></tr>
                                <tr><td>Подмышечные впадины</td><td>500₽</td></tr>
                                <tr><td>Бикини глубокое</td><td>1600₽</td></tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cosmetology-dropdown">
                <div class="services-dropdown__header">
                    <h2 class="baskerville">Депиляция воском</h2>
                    <div class="services-dropdown__header-arrow"></div>
                </div>
                <div class="services-dropdown__content">
                    <div class="services-dropdown__content-img">
                        <img src="{{ asset('assets/img/sdfkljghsdfh.png') }}" alt="">
                    </div>
                    <div class="services-dropdown__content-table">
                        <div class="services-dropdown__table-container tab-6 active">
                            <table>
                                <thead><tr><td></td><td>Томина, 88</td></tr></thead>
                                <tbody>
                                <tr><td>Голень</td><td>500₽</td></tr>
                                <tr><td>Бедро</td><td>500₽</td></tr>
                                <tr><td>Руки (до локтя)</td><td>500₽</td></tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="services-content inner-mg  tab-three" style="display: none">
            <!-- Маникюр -->
            <div class="nail__service-dropdown">
                <div class="services-dropdown__header">
                    <h2 class="baskerville">Маникюр</h2>
                    <div class="services-dropdown__header-arrow"></div>
                </div>
                <div class="services-dropdown__content">
                    <div class="services-dropdown__content-img">
                        <img src="{{ asset('assets/img/sdfkljghsdfh.png') }}" alt="">
                    </div>
                    <div class="services-dropdown__content-table">
                        <div class="services-dropdown__table-container tab-6 active">
                            <table>
                                <thead>
                                <tr>
                                    <td>Услуга</td>
                                    <td>Томина, 88</td>
                                    <td>Криволапова, 47</td>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Снятие / Маникюр / Покрытие гель-лаком</td>
                                    <td>1.800₽</td>
                                    <td>1.600₽</td>
                                </tr>
                                <tr>
                                    <td>Наращивание / коррекция</td>
                                    <td>от 2.500₽</td>
                                    <td>—</td>
                                </tr>
                                <tr>
                                    <td>Снятие нарощенных ногтей</td>
                                    <td>400₽</td>
                                    <td>400₽</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Педикюр -->
            <div class="nail__service-dropdown">
                <div class="services-dropdown__header">
                    <h2 class="baskerville">Педикюр</h2>
                    <div class="services-dropdown__header-arrow"></div>
                </div>
                <div class="services-dropdown__content">
                    <div class="services-dropdown__content-img">
                        <img src="{{ asset('assets/img/sdfkljghsdfh.png') }}" alt="">
                    </div>
                    <div class="services-dropdown__content-table">
                        <div class="services-dropdown__table-container tab-7 active">
                            <table>
                                <thead>
                                <tr>
                                    <td>Услуга</td>
                                    <td>Томина, 88</td>
                                    <td>Криволапова, 47</td>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Снятие / Педикюр / Покрытие гель-лаком</td>
                                    <td>2.500₽</td>
                                    <td>2.100₽</td>
                                </tr>
                                <tr>
                                    <td>Обработка пальцев ног</td>
                                    <td>1.000₽</td>
                                    <td>900₽</td>
                                </tr>
                                <tr>
                                    <td>Ремонт «натурального» ногтя</td>
                                    <td>100–200₽</td>
                                    <td>100–200₽</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Покрытие лаком -->
            <div class="nail__service-dropdown">
                <div class="services-dropdown__header">
                    <h2 class="baskerville">Покрытие лаком</h2>
                    <div class="services-dropdown__header-arrow"></div>
                </div>
                <div class="services-dropdown__content">
                    <div class="services-dropdown__content-img">
                        <img src="{{ asset('assets/img/sdfkljghsdfh.png') }}" alt="">
                    </div>
                    <div class="services-dropdown__content-table">
                        <div class="services-dropdown__table-container tab-8 active">
                            <table>
                                <thead>
                                <tr>
                                    <td>Услуга</td>
                                    <td>Томина, 88</td>
                                    <td>Криволапова, 47</td>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Долговременное гелевое покрытие</td>
                                    <td>750₽</td>
                                    <td>600₽</td>
                                </tr>
                                <tr>
                                    <td>Покрытие гель-лаком («френч»)</td>
                                    <td>850–950₽</td>
                                    <td>650–800₽</td>
                                </tr>
                                <tr>
                                    <td>Снятие гелевого покрытия</td>
                                    <td>150₽</td>
                                    <td>200₽</td>
                                </tr>
                                <tr>
                                    <td>Дизайн (1 ноготь)</td>
                                    <td>50–100₽</td>
                                    <td>50–100₽</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Дополнительные услуги -->
            <div class="nail__service-dropdown">
                <div class="services-dropdown__header">
                    <h2 class="baskerville">Дополнительные услуги</h2>
                    <div class="services-dropdown__header-arrow"></div>
                </div>
                <div class="services-dropdown__content">
                    <div class="services-dropdown__content-img">
                        <img src="{{ asset('assets/img/sdfkljghsdfh.png') }}" alt="">
                    </div>
                    <div class="services-dropdown__content-table">
                        <div class="services-dropdown__table-container tab-9 active">
                            <table>
                                <thead>
                                <tr>
                                    <td>Услуга</td>
                                    <td>Томина, 88</td>
                                    <td>Криволапова, 47</td>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Окрашивание ресниц/бровей краской</td>
                                    <td>200₽</td>
                                    <td>200₽</td>
                                </tr>
                                <tr>
                                    <td>Окрашивание ресниц/бровей хной</td>
                                    <td>400₽</td>
                                    <td>400₽</td>
                                </tr>
                                <tr>
                                    <td>Коррекция формы бровей</td>
                                    <td>200₽</td>
                                    <td>200₽</td>
                                </tr>
                                <tr>
                                    <td>Макияж</td>
                                    <td>от 1.500₽</td>
                                    <td>от 1.500₽</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const tabs = document.querySelectorAll('.services-header__item');
            const contents = document.querySelectorAll('.services-content');

            // Функция скрытия всех вкладок и контента
            function hideAllTabs() {
                tabs.forEach(tab => tab.classList.remove('active'));
                contents.forEach(content => {
                    content.classList.remove('active');
                    content.style.display = 'none';
                });

                // Скрываем все раскрытые списки для всех вкладок
                const allHeaders = document.querySelectorAll('.services-dropdown__header, .cosmetology-dropdown__header, .nail__service-dropdown__header');
                const allContents = document.querySelectorAll('.services-dropdown__content, .cosmetology-dropdown__content, .nail__service-dropdown__content');
                allHeaders.forEach(header => header.classList.remove('active'));
                allContents.forEach(content => content.classList.remove('active'));
            }

            // Функция для отображения выбранной вкладки
            function showTab(tabName) {
                hideAllTabs();
                const activeTab = document.querySelector(`.services-header__item[data-tab="${tabName}"]`);
                const activeContent = document.querySelector(`.services-content.${tabName}`);
                activeTab.classList.add('active');
                activeContent.classList.add('active');
                activeContent.style.display = 'flex';

                // Инициализация dropdown для активной вкладки
                initDropdown(tabName); // Инициализируем dropdown внутри активного таба
            }

            // Добавляем обработчик событий для каждой вкладки
            tabs.forEach(tab => {
                tab.addEventListener('click', function() {
                    const tabName = tab.getAttribute('data-tab');
                    showTab(tabName);
                });
            });

            // Инициализация по умолчанию для первой вкладки
            showTab('tab-one');

            // Инициализация dropdown для вкладки
            function initDropdown(tabName) {
                let dropdowns;

                // В зависимости от активной вкладки выбираем правильный элемент
                if (tabName === 'tab-one') {
                    dropdowns = document.querySelectorAll('.services-dropdown');
                } else if (tabName === 'tab-two') {
                    dropdowns = document.querySelectorAll('.cosmetology-dropdown');
                } else if (tabName === 'tab-three') {
                    dropdowns = document.querySelectorAll('.nail__service-dropdown');
                }

                dropdowns.forEach(dropdown => {
                    const switchers = dropdown.querySelectorAll('.table-switcher__item');
                    const womenTable = dropdown.querySelector('.services-dropdown__table-container.women');
                    const menTable = dropdown.querySelector('.services-dropdown__table-container.man');

                    switchers.forEach((switcher, index) => {
                        switcher.addEventListener('click', function () {
                            switchers.forEach(s => s.classList.remove('active'));
                            this.classList.add('active');

                            // Проверяем существование womenTable и menTable
                            const womenTable = dropdown.querySelector('.services-dropdown__table-container.women');
                            const menTable = dropdown.querySelector('.services-dropdown__table-container.man');

                            // Если оба элемента существуют, применяем изменения
                            if (womenTable && menTable) {
                                if (index === 0) {
                                    womenTable.classList.add('not-active');
                                    menTable.classList.remove('not-active');
                                } else {
                                    womenTable.classList.remove('not-active');
                                    menTable.classList.add('not-active');
                                }
                            }
                        });
                    });


                    // Переключение dropdown при клике на заголовок
                    const header = dropdown.querySelector(".services-dropdown__header");
                    if (header) {
                        header.addEventListener("click", function () {
                            const content = dropdown.querySelector(".services-dropdown__content");
                            if (content) {
                                header.classList.toggle("active");
                                content.classList.toggle("active");
                            }
                        });
                    }
                });
            }

            window.switchTab = function(event, tabNumber) {
            const parent = event.target.closest('.services-dropdown__content-table');
            if (!parent) return;

            const allTabs = parent.querySelectorAll('.services-dropdown__table-container');
            const allItems = parent.querySelectorAll('.table-switcher__item');

            allTabs.forEach(tab => tab.classList.remove('active'));
            allItems.forEach(item => item.classList.remove('active'));

            const activeTab = parent.querySelector('.tab-' + tabNumber);
            const activeItem = event.target.closest('.table-switcher__item');
            if (activeTab) activeTab.classList.add('active');
            if (activeItem) activeItem.classList.add('active');

            // ⬇ Найдём ближайший блок services-dropdown и переключим картинки локально
            const dropdown = parent.closest('.services-dropdown');
            if (dropdown) {
                const maleImg = dropdown.querySelector('.male-image');
                const femaleImg = dropdown.querySelector('.female-image');

                if (tabNumber === 1) {
                    if (maleImg) maleImg.style.display = 'block';
                    if (femaleImg) femaleImg.style.display = 'none';
                } else if (tabNumber === 2) {
                    if (maleImg) maleImg.style.display = 'none';
                    if (femaleImg) femaleImg.style.display = 'block';
                }
            }
        };


        });


    </script>
@endsection
