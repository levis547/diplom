<div class="hystmodal" id="reviews" aria-hidden="true">
    <div class="hystmodal__wrap">
        <div class="hystmodal__window" role="dialog" aria-modal="true" style="width: 750px;">
            <div class="hystmodal__review-header hystmodal__review-container">
                <div class="hystmodal__review-header__title">
                    <p>
                        Оставить <span>отзыв</span>
                    </p>
                </div>
                <div data-hystclose class="modal__close-btn"></div>
            </div>
            <div class="hystmodal__review-main">
                <div class="hystmodal__review-container">
                    <p>Ваше мнение важно для нас!</p>
                    <span>
                        Если у Вас есть какие-либо пожелания, предложения, замечания, касающиеся работы нашего салона красоты, веб-сайта — пишите нам, и мы с благодарностью примем Ваше мнение во внимание.
                    </span>
                    <div class="hystmodal__review-main__form">
                        <form id="reviewForm">
                            <div class="hystmodal__review-main__form-header">
                                <input type="text" name="full_name" placeholder="Введите ваше имя" required>
                                <div class="form-container__star-main">
                                    <div class="form-container__star">
                                        <input type="radio" name="rating" value="5" id="form-review__star-5">
                                        <label for="form-review__star-5"></label>

                                        <input type="radio" name="rating" value="4" id="form-review__star-4">
                                        <label for="form-review__star-4"></label>

                                        <input type="radio" name="rating" value="3" id="form-review__star-3">
                                        <label for="form-review__star-3"></label>

                                        <input type="radio" name="rating" value="2" id="form-review__star-2">
                                        <label for="form-review__star-2"></label>

                                        <input type="radio" name="rating" value="1" id="form-review__star-1">
                                        <label for="form-review__star-1"></label>
                                    </div>
                                    <div class="form-container__star-title">
                                        Оцените работу
                                    </div>
                                </div>
                            </div>
                            <div class="hystmodal__review-main__form-footer">
                                <textarea name="comment_reviews" cols="30" rows="10" placeholder="Текст отзыва"></textarea>
                            </div>
                            <div class="hystmodal__review-main__form-action">
                                <p>Спасибо, что выбираете нас!</p>
                                <button type="submit">Отправить</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById('reviewForm').addEventListener('submit', function (e) {
        e.preventDefault(); // Предотвращаем отправку формы

        // Получаем CSRF токен из мета-тега
        let csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
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
        const formData = new FormData(this);

        // Получаем значения полей формы
        const fullName = formData.get('full_name');
        const rating = formData.get('rating');
        const comment_reviews = formData.get('comment_reviews');

        // Валидация данных
        if (!fullName || !rating || !comment_reviews) {
            notyf.error('Пожалуйста, заполните все обязательные поля.');
            return;
        }

        // Преобразуем данные в объект для отправки
        const data = {
            full_name: fullName,
            rating: rating,
            comment: comment_reviews
        };

        // Логируем данные перед отправкой
        console.log('Data to be sent:', data);

        // Отправляем данные через API
        fetch('/api/reviews', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'Accept': 'application/json',
                'X-CSRF-TOKEN': csrfToken // Добавляем CSRF токен в заголовки
            },
            body: JSON.stringify(data) // Отправляем данные в формате JSON
        })
            .then(response => response.json())
            .then(data => {
                // Логируем ответ от сервера
                console.log('Response from server:', data);

                // Обработка ответа от сервера
                if (data.message) {
                    notyf.success(data.message);  // Показываем сообщение об успехе
                    myModal.close('myModal')
                } else {
                    notyf.error('Ошибка при отправке отзыва');
                }
            })
            .catch(error => {
                notyf.error('Произошла ошибка при отправке отзыва');
            });
    });

</script>
