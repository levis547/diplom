@extends('layout.main')
@section('main')
    <style>
        /* Скрываем все контенты по умолчанию */
        .about-container__smi-content {
            display: none;
        }

        /* Показываем только активный контент */
        .about-container__smi-content.active {
            display: flex;
        }
        .about-container__smi-tab-item > a > p{
            cursor: pointer;
        }
    </style>
    <nav class="breadcrumbs" aria-label="Хлебные крошки">
        <a href="/" class="breadcrumb-link">Главная</a>
        <span class="breadcrumb-separator" aria-hidden="true"></span>
        <span class="breadcrumb-current">О нас</span>
    </nav>
    <div class="page-header">
        <h1 class="baskerville"><span class="red-color">О нас</span></h1>
    </div>
    <div class="about-container">
        <div class="about-container__main">
            <div class="about-container__main-top">
                <div class="about-container__main-top-img">
                    <img src="{{ asset('assets/img/about_main.png') }}" alt="">
                </div>
                <div class="about-container__main-top-text">
                    <p>С 1998 года салон красоты «Зарина» помогает своим клиентам раскрывать и подчеркивать их индивидуальность. Мы гордимся своей богатой историей, постоянным развитием и стремлением к совершенству, чтобы предлагать вам услуги высочайшего качества.
                        <br><br>
                        Наша главная ценность — довольные клиенты, поэтому мы уделяем особое внимание индивидуальному подходу, качеству услуг и созданию уютной атмосферы, в которой вы сможете расслабиться и насладиться преображением.</p>
                    <div class="about-container__main-top-container">
                        <div class="about-container__main-top-item">
                            <p>более 25</p>
                            <p>лет успешной работы</p>
                        </div>
                        <div class="about-container__main-top-item">
                            <p>2</p>
                            <p>салона красоты</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="about-container__main-thumb">
                <div class="about-container__main-thumb-item">
                    <img src="{{ asset('assets/img/about1.png') }}" alt="">
                </div>
                <div class="about-container__main-thumb-item">
                    <img src="{{ asset('assets/img/about2.png') }}" alt="">
                </div>
                <div class="about-container__main-thumb-item">
                    <img src="{{ asset('assets/img/about3.png') }}" alt="">
                </div>
                <div class="about-container__main-thumb-item">
                    <img src="{{ asset('assets/img/about4.png') }}" alt="">
                </div>
                <div class="about-container__main-thumb-item">
                    <img src="{{ asset('assets/img/about5.png') }}" alt="">
                </div>
                <div class="about-container__main-thumb-item">
                    <img src="{{ asset('assets/img/about6.png') }}" alt="">
                </div>
            </div>
        </div>
        <div class="page-header">
            <h2 class="baskerville inner-mg">О нас <span class="red-color">в СМИ</span></h2>
        </div>
        <div class="about-container__smi">
            <div class="about-container__smi-tab">
                <div class="about-container__smi-tab-item active">
                    <a><p>Журнал «Очевидец»</p></a>
                </div>
                <div class="about-container__smi-tab-item">
                    <a><p>Журнал «Cher Ami»</p></a>
                </div>
                <div class="about-container__smi-tab-item">
                    <a><p>Журнал «Cher Ami» 2</p></a>
                </div>
            </div>
            <div class="about-container__smi-content inner-mg active" id="tab-1">
                <div class="about-container__smi-content-item">
                    <img src="{{ asset('assets/img/about_news.png') }}" alt="">
                </div>
                <div class="about-container__smi-content-item">
                    <img src="{{ asset('assets/img/about_news2.png') }}" alt="">
                </div>
            </div>
            <div class="about-container__smi-content inner-mg" id="tab-2">
                <div class="about-container__smi-content-item">
                    <img src="{{ asset('assets/img/about_tab_one_one.png') }}" alt="">
                </div>
                <div class="about-container__smi-content-item">
                    <img src="{{ asset('assets/img/about_tab_one_two.png') }}" alt="">
                </div>
            </div>
            <div class="about-container__smi-content inner-mg" id="tab-3">
                <div class="about-container__smi-content-item">
                    <img src="{{ asset('assets/img/about_tab_two_one.png') }}" alt="">
                </div>
                <div class="about-container__smi-content-item">
                    <img src="{{ asset('assets/img/about_tab_two_two.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
    <script>
        document.querySelectorAll('.about-container__smi-tab-item').forEach((tab, index) => {
            tab.addEventListener('click', function() {
                // Убираем класс active у всех вкладок
                document.querySelectorAll('.about-container__smi-tab-item').forEach(item => {
                    item.classList.remove('active');
                });

                // Добавляем класс active на текущую вкладку
                tab.classList.add('active');

                // Скрываем все контенты
                document.querySelectorAll('.about-container__smi-content').forEach(content => {
                    content.classList.remove('active');
                });

                // Показываем нужный контент, связанный с вкладкой
                const activeContent = document.getElementById('tab-' + (index + 1));
                activeContent.classList.add('active');  // Включаем класс active, чтобы контент стал видимым
            });
        });


    </script>
@endsection
