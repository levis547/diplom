@extends('layout.main')
@section('main')
    <nav class="breadcrumbs" aria-label="Хлебные крошки">
        <a href="/" class="breadcrumb-link">Главная</a>
        <span class="breadcrumb-separator" aria-hidden="true"></span>
        <span class="breadcrumb-current">Портфолио</span>
    </nav>
    <div class="page-header">
        <h1 class="baskerville"><span class="red-color">Портфолио</span></h1>
    </div>
    <div class="portfolio-container">
        <div class="portfolio-items" id="portfolio-items"></div>
        <div class="btn-showMore" id="load-more-portfolio">
            <p class="baskerville">Показать ещё</p>
        </div>
        <div class="portfolio-form">
            <div class="portfolio-form__header">
                <h2 class="baskerville">Стать частью <span class="red-color">портфолио</span></h2>
            </div>
            <div class="portfolio-form__container">
                <div class="portfolio-form__left">
                    <input type="text" id="full_name" placeholder="Введите Имя Фамилию*">
                    <input type="email" id="email" placeholder="Введите email">
                    <textarea id="description" placeholder="Опишите какую услугу вы получили"></textarea>
                </div>
                <div class="portfolio-form__right">
                    <form action="/fake-url" class="dropzone" id="form-drop__img">
                        <div class="dz-message" style="text-align: center;">
                            <img src="{{ asset('assets/svg/upload-icon.svg') }}" alt="Upload Icon">
                            <p>Перетащите файл для загрузки</p>
                        </div>
                    </form>

                    <div class="portfolio-form__btn">
                        <p id="submitPortfolio">Отправить</p>
                    </div>
                </div>
            </div>

            <!-- Dropzone + Axios -->
            <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

            <script>
                const notyf = new Notyf({
                    duration: 5000,
                    types: [
                        {
                            type: 'success',
                            background: '#482712',
                            className: 'notyf-success',
                        },
                        {
                            type: 'error',
                            background: '#CD302E',
                            className: 'notyf-success',

                        }
                    ]
                });
                let portfolioPage = 1;

                function loadPortfolios() {
                    fetch(`/api/portfolios?page=${portfolioPage}&per_page=9`)
                        .then(response => response.json())
                        .then(data => {
                            const items = data.data;
                            const container = document.getElementById('portfolio-items');

                            items.forEach(item => {
                                const el = document.createElement('div');
                                el.classList.add('portfolio-item');
                                el.innerHTML = `
                        <img src="${item.image ? '/storage/' + item.image : '/assets/img/s-4.jpg'}" alt="">
                        <div class="portfolio-item__content">
                            <div class="portfolio-item__content-container">
                                <div class="portfolio-item__content-text">
                                    <p>${item.full_name}</p>
                                    <p>${item.description || 'Без описания'}</p>
                                </div>
                                <div class="portfolio-item__content-arrow"></div>
                            </div>
                        </div>
                    `;
                                container.appendChild(el);
                            });

                            if (!data.next_page_url) {
                                document.getElementById('load-more-portfolio').style.display = 'none';
                            }
                        })
                        .catch(error => console.error('Ошибка при загрузке портфолио:', error));
                }

                document.getElementById('load-more-portfolio').addEventListener('click', () => {
                    portfolioPage++;
                    loadPortfolios();
                });

                // Первая загрузка
                loadPortfolios();
            </script>
            <script>
                Dropzone.autoDiscover = false;

                // Удаляем старые инстансы Dropzone (если были)
                if (Dropzone.instances.length > 0) {
                    Dropzone.instances.forEach(dz => dz.destroy());
                }

                let uploadedFile = null;

                const myDropzone = new Dropzone("#form-drop__img", {
                    url: "/fake-url",
                    autoProcessQueue: false,
                    addRemoveLinks: true,
                    maxFiles: 1,
                    acceptedFiles: 'image/*',
                    init: function () {
                        this.on("addedfile", function (file) {
                            uploadedFile = file;
                        });
                        this.on("removedfile", function () {
                            uploadedFile = null;
                        });
                    }
                });

                document.getElementById('submitPortfolio').addEventListener('click', function () {
                    const formData = new FormData();
                    formData.append('full_name', document.getElementById('full_name').value);
                    formData.append('email', document.getElementById('email').value);
                    formData.append('description', document.getElementById('description').value);

                    if (uploadedFile) {
                        formData.append('image', uploadedFile);
                    }

                    axios.post('/api/portfolios', formData)
                        .then(response => {
                            notyf.success('Ваша заявка успешно принята, ожидайте ответа на почте!');
                            myDropzone.removeAllFiles();
                        })
                        .catch(error => {
                            notyf.error('Заполните все поля!');
                            console.error(error.response?.data || error);
                        });
                });
            </script>

        </div>
    </div>
@endsection
