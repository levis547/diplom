<div class="hystmodal" id="myModal" aria-hidden="true">
    <div class="hystmodal__wrap">
        <div class="hystmodal__window" role="dialog" aria-modal="true" style="width: 750px;">
            <div class="hystmodal__appointmen-header hystmodal__appointment-container">
                <div class="hystmodal__appointment-header__title-header">
                    <div class="hystmodal__appointmen-header__title">
                        <p>
                            Онлайн <span>запись</span>
                        </p>
                    </div>
                    <div data-hystclose class="modal__close-btn"></div>
                </div>
                <div class="hystmodal__appointment-step">
                    <div class="hystmodal__appointment-step__one icon_step active_step">1</div>
                    <div class="hystmodal__appointment-step__two icon_step">2</div>
                    <div class="hystmodal__appointment-step__three icon_step">3</div>
                    <div class="hystmodal__appointment-step__four icon_step">4</div>
                    <div class="hystmodal__appointment-step__five icon_step">5</div>
                </div>
            </div>
            <div class="hystmodal__appointment-main">
                <div class="hystmodal__appointment-container">

                    <div class="step_zero" id="step_zero">
                        <p>Выберите салон</p>
                        <div id="salons-list" class="salons__list"></div>
                        <button id="next-step-btn-one" class="appointment__button">Далее</button>
                    </div>

                    <div class="step_one" id="step_one" style="display:none;">
                        <p>Выберите услуги</p>
                        <div id="tabs" class="tabs_services">
                            <div class="tab__services-header">
                                <ul>
                                    <li><a href="#tabs-1">Мужской зал</a></li>
                                    <li><a href="#tabs-2">Женский зал</a></li>
                                    <li><a href="#tabs-3">Ногтевая студия</a></li>
                                </ul>
                            </div>
                            <div class="tab__services-main">
                                <div id="tabs-1" class="tab-content"></div>
                                <div id="tabs-2" class="tab-content"></div>
                                <div id="tabs-3" class="tab-content"></div>
                            </div>
                        </div>
                        <div class="modal__button">
                            <button id="back-step-btn-step-one" class="appointment__button">Назад</button>
                            <button id="next-step-btn" class="appointment__button">Далее</button>
                        </div>
                    </div>

                    <div class="master-container__main" id="step_two" style="display:none;">
                        <p>Выберите мастера</p>
                        <div id="masters-list" class="masters-list" ></div>
                        <div class="modal__button">
                            <button id="back-step-btn-step-two" class="appointment__button">Назад</button>
                            <button id="next-step-btn-two" class="appointment__button">Далее</button>
                        </div>
                    </div>
                    <div class="data__and__time-container" id="step_three" style="display:none;">
                        <p>Выберите Дату и время</p>
                        <div class="data__container">
                            <input type="text" id="date-picker" placeholder="Дата">
                            <div class="data__container-icon__calendar"></div>
                        </div>
                        <div id="time-slots" class="time-slots"></div>
                        <div class="modal__button">
                            <button id="back-step-btn-step-three" class="appointment__button">Назад</button>
                            <button id="next-step-btn_three" class="appointment__button">Далее</button>
                        </div>
                    </div>
                    <div class="form__container" id="step_four" style="display:none;">
                        <p>Введите личные данные</p>
                        <form action="#" method="post" id="form_appointmen">
                            <div class="form__container-header">
                                <input type="text" id="name" name="name" required placeholder="Имя Фамилия*">
                                <input type="text" id="phone" name="phone" required placeholder="Телефон*">
                            </div>
                            <input type="email" id="email" name="email" placeholder="E-mail">
                            <textarea id="comment" name="comment" placeholder="Комментарий*"></textarea>
                            <div class="form__container-checkbox">
                                <input type="checkbox" id="privacy-policy" name="privacy-policy" required>
                                <label for="privacy-policy">Согласен с <a href="/privacy-policy">политикой конфиденциальности</a> и на обработку персональных данных</label>
                            </div>
                            <div class="form__container-checkbox">
                                <input type="checkbox" id="newsletter" name="newsletter">
                                <label for="newsletter">Согласен получать рассылку на почту</label>
                            </div>
                            <div class="modal__button">
                                <button id="back-step-btn-step-four" class="appointment__button">Назад</button>
                                <button type="submit" class="appointment__button">Подтвердить</button>
                            </div>
                        </form>
                    </div>


                </div>
            </div>

        </div>
    </div>
</div>
<div class="hystmodal" id="acceptModal" aria-hidden="true">
    <div class="hystmodal__wrap">
        <div class="hystmodal__window" role="dialog" aria-modal="true" style="width: 750px;">
            <div class="hystmodal__appointmen-header hystmodal__appointment-container">
                <div class="hystmodal__appointment-header__title-header">
                    <div class="hystmodal__appointmen-header__title">
                        <p>
                             Проверьте <span>данные</span>
                        </p>
                    </div>
                    <div data-hystclose class="modal__close-btn"></div>
                </div>
            </div>
            <div class="hystmodal__appointment-main">
                <div class="hystmodal__appointment-container">
                    <div id="acceptModal-content">

                    </div>
                    <div class="modal__button">
                        <button id="acceptModal-back" class="appointment__button">Назад</button>
                        <button id="acceptModal-accept" class="appointment__button">Записаться</button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<script>
    let phoneMask = new Inputmask("+7 (999) 999-99-99");
    phoneMask.mask(document.getElementById("phone"));
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
    $(document).ready(function() {

        $("#tabs").tabs();
        $('#tabs .tab__services-header ul li a').on('click', function(e) {
            e.preventDefault();

            // Убираем класс active с всех li элементов
            $('#tabs .tab__services-header ul li').removeClass('active');

            // Добавляем класс active к родительскому li
            $(this).parent().addClass('active');

            // Скрываем все табы
            $('.tab-content').hide();

            // Отображаем только нужный таб
            var targetTab = $(this).attr('href');
            $(targetTab).show();
        });

        // Устанавливаем первый таб активным при загрузке страницы
        $('#tabs .tab__services-header ul li:first').addClass('active');
        $('.tab-content:first').show();
        let selectedSalonId = null;
        let selectedServiceId = null;
        let selectedMasterId = null;
        let selectedDate = null;
        let selectedTime = null;
        let serviceDuration = 0;
        let selectedServices = [];
        let csrfToken = $('meta[name="csrf-token"]').attr('content');

        function loadSalons() {
            $.ajax({
                url: '/api/salons',
                success: function(response) {
                    let salonContent = '';
                    response.forEach(function(salon) {
                        salonContent += `
                    <div class="salon-container" data-id="${salon.id}">
                        <img src="/storage/${salon.image_path}" alt="${salon.name}" width="150" /> <!-- Выводим картинку -->
                        <div class="salon__info">
                            <span>${salon.address}</span>
                            <p>${salon.phone}</p>
                            <p>${salon.work_time}</p>
                        </div>
                    </div>
                `;
                    });
                    $('#salons-list').html(salonContent);

                    // Логика выбора салона
                    $('.salon-container').on('click', function() {
                        // Убираем класс active с других салонов
                        $('.salon-container').removeClass('salon__active');

                        // Добавляем класс active к выбранному салону
                        $(this).addClass('salon__active');
                        selectedSalonId = $(this).data('id');
                        // console.log("Выбранный салон ID:", selectedSalonId);

                        // Загружаем услуги для всех комнат только после выбора салона
                        loadServices('Мужской зал', '#tabs-1');
                        loadServices('Женский зал', '#tabs-2');
                        loadServices('Ногтевая студия', '#tabs-3');
                    });
                },
                error: function() {
                    $('#salons-list').html('<p>Ошибка загрузки салонов</p>');
                }
            });
        }

        function loadServices(room, tabId) {
            if (!selectedSalonId) {
                console.log("Пожалуйста, выберите салон.");
                return;
            }
            $.ajax({
                url: '/api/services',
                data: {
                    room: room,  // Передаем комнату
                    salon_id: selectedSalonId  // Передаем выбранный салон
                },
                success: function(response) {
                    let content = '';
                    response.forEach(function(service) {
                        // Преобразуем продолжительность в часы и минуты
                        let hours = Math.floor(service.duration / 60);
                        let minutes = service.duration % 60;
                        let durationString = '';

                        if (hours > 0) {
                            durationString += `${hours} час${hours > 1 ? 'а' : ''}`;
                        }
                        if (minutes > 0) {
                            if (hours > 0) {
                                durationString += ` `;
                            }
                            durationString += `${minutes} мин.`;
                        }
                        if (durationString === '') {
                            durationString = 'менее 1 минуты';
                        }

                        content +=
                            `<div class="service-container" data-id="${service.id}" data-duration="${service.duration}">
                        <div class="services__img">
                            <img src="/storage/${service.image_path}" alt="${service.name}"/>
                        </div>
                        <div class="services__info">
                            <p>${service.name}</p>
                            <div class="services__info-price">
                                 <span>${service.price} руб.</span>
                                 <div class="services__info-duration">
                                      <div class="services__info-duration__icon"></div>
                                      <p>${durationString}</p>
                                </div>
                            </div>
                        </div>
                    </div>`;
                    });
                    $(tabId).html(content);

                    $(tabId).find('.service-container').on('click', function() {
                        selectedServiceId = $(this).data('id');
                        serviceDuration = $(this).data('duration');

                    });
                },
                error: function() {
                    $(tabId).html('<p>Ошибка загрузки услуг.</p>');
                }
            });
        }


        loadSalons();

        function loadMasters(serviceId) {
            $.ajax({
                url: '/api/services/master',
                data: { services: serviceId },
                success: function(response) {
                    let mastersContent = '';
                    response.forEach(function(master) {
                        mastersContent += `
                    <div class="master-container" data-id="${master.id}">
                        <div class="master-container__person">
                            <div class="master-container__img"><img src="/storage/${master.image_path}" alt="${master.full_name}"></div>
                            <div class="master-container__info"><p>${master.full_name}</p></div>
                        </div>
                        <div class="master-container__specialization"><p>${master.specialization}</p></div>
                    </div>
                `;
                    });
                    $('#masters-list').html(mastersContent);
                    $('#step_two').show();

                    // Добавляем обработчик клика для мастера
                    $('.master-container').on('click', function() {
                        // Убираем класс active с других мастеров
                        $('.master-container').removeClass('active');

                        // Добавляем класс active к выбранному мастеру
                        $(this).addClass('active');
                    });
                },
                error: function() {
                    $('#step_two').html('<p>Ошибка загрузки мастеров.</p>');
                }
            });
        }

        $('#tabs-1, #tabs-2, #tabs-3').on('click', '.service-container', function() {
            let serviceId = $(this).data('id');
            let serviceName = $(this).find('.services__info p').text();
            // очистка имени, если вдруг
            serviceName = serviceName.replace(/(\d+\s*час[а-я]*|\d+\s*мин\.?)/g, '').trim();

            let servicePrice = $(this).find('.services__info-price span').text();
            let serviceDuration = $(this).data('duration');

            let isAlreadySelected = selectedServices.some(service => service.id === serviceId);

            if (isAlreadySelected) {
                $(this).removeClass('selected');
                selectedServices = selectedServices.filter(service => service.id !== serviceId);
            } else {
                selectedServices.push({
                    id: serviceId,
                    name: serviceName,
                    price: parseFloat(servicePrice.replace(' руб.', '')),
                    duration: serviceDuration
                });
                $(this).addClass('selected');
            }

            console.log('Выбранные услуги:', selectedServices);
            updateConfirmationServicesList();
        });




        function updateConfirmationServicesList() {
            let servicesList = '';
            let totalPrice = 0;

            selectedServices.forEach(function(service) {
                servicesList += `<li>${service.name}</li>`;
                totalPrice += service.price;
            });

            $('#confirmation-services-list').html(servicesList);

            // Рассчитываем примерную стоимость
            let priceRange = '';
            if (selectedServices.length === 1) {
                priceRange = `${totalPrice} руб.`;
            } else {
                let minPrice = Math.min(...selectedServices.map(service => service.price));
                let maxPrice = Math.max(...selectedServices.map(service => service.price));
                priceRange = `от ${minPrice} до ${maxPrice} руб.`;
            }
            $('#confirmation-price').text(priceRange);

            // Логируем финальную стоимость
            console.log(`Общая стоимость выбранных услуг: ${priceRange}`);
        }



        $("#next-step-btn-one").on("click", function() {
            if (selectedSalonId) {
                loadServices(selectedSalonId);
                $("#step_zero").hide();
                $("#step_one").show();
                $(".hystmodal__appointment-step__one").removeClass("active_step").addClass("passive_step");
                $(".hystmodal__appointment-step__two").removeClass("passive_step").addClass("active_step");
                notyf.success('Вы выбрали салон, теперь выберите услугу');
            } else {
                notyf.error('Пожалуйста, выберите салон');
            }
        });
        $("#next-step-btn").on("click", function() {
            if (selectedServiceId) {
                loadMasters(selectedServiceId);
                $("#step_one").hide();
                $("#step_two").show();
                $(".hystmodal__appointment-step__two").removeClass("active_step").addClass("passive_step");
                $(".hystmodal__appointment-step__three").removeClass("passive_step").addClass("active_step");
                notyf.success('Вы выбрали услугу, продолжайте выбор мастера');
            } else {
                notyf.error('Пожалуйста, выберите услугу');
            }
        });
        $("#next-step-btn_three").on("click", function() {
            if (selectedTime) {
                $("#step_three").hide();
                $("#step_four").show();
                $(".hystmodal__appointment-step__four").removeClass("active_step").addClass("passive_step");
                $(".hystmodal__appointment-step__five").removeClass("passive_step").addClass("active_step");
                notyf.success('Время выбрано, пожалуйста заполните личные данные');
            } else {
                notyf.error('Пожалуйста, выберите дату и время');
            }
        });

        // Обработчик для выбора мастера
        $('#step_two').on('click', '.master-container', function() {
            selectedMasterId = $(this).data('id');
            // console.log("Выбранный мастер ID:", selectedMasterId);
            $(this).siblings().removeClass('selected');
            $(this).addClass('selected');
        });

        // Обработчик для кнопки "Далее" на шаге 2
        $("#next-step-btn-two").on("click", function() {
            if (selectedMasterId) {
                $("#step_two").hide();
                $("#step_three").show();
                $(".hystmodal__appointment-step__three").removeClass("active_step").addClass("passive_step");
                $(".hystmodal__appointment-step__four").removeClass("passive_step").addClass("active_step");
                notyf.success('Мастер выбран, продолжайте выбор времени');
            } else {
                notyf.error('Пожалуйста, выберите мастера');
            }
        });


        function checkTimeAvailability(date, masterId) {
            console.info(date)

            $.ajax({
                url: `/api/get-available-times`,
                method: 'GET',
                data: { date: date, master_id: masterId },
                success: function(response) {
                    let bookedSlots = response.map(appt => appt.appointment_datetime);
                    // console.log('Заблокированные слоты:', bookedSlots);
                    // Передаем эти данные в функцию для блокировки
                    blockBookedTimeSlots(bookedSlots, serviceDuration);
                },
                error: function(xhr, status, error) {
                    console.error('Ошибка при проверке доступности времени:', error);
                }
            });
        }

        function blockBookedTimeSlots(bookedSlots, serviceDuration) {
            $(".time-slot").removeClass("disabled");  // Разблокируем все слоты перед новой проверкой


            bookedSlots.forEach(appointment => {
                let bookedTime = new Date(appointment);  // Преобразуем строку в объект Date
                let bookedHours = bookedTime.getHours();
                let bookedMinutes = bookedTime.getMinutes();
                let totalBookedMinutes = bookedHours * 60 + bookedMinutes;  // Время начала в минутах
                let endTotalMinutes = totalBookedMinutes + serviceDuration;  // Время окончания (начало + длительность услуги)

                $(".time-slot").each(function() {
                    let slotTime = $(this).data("time");  // Получаем время слота
                    let [slotHours, slotMinutes] = slotTime.split(":").map(Number);  // Разделяем на часы и минуты
                    let slotTotalMinutes = slotHours * 60 + slotMinutes;  // Время текущего слота в минутах

                    // Если слот находится в пределах забронированного времени
                    if (slotTotalMinutes >= totalBookedMinutes && slotTotalMinutes < endTotalMinutes) {
                        $(this).addClass("disabled");  // Блокируем этот слот
                    }
                });
            });
        }


        flatpickr("#date-picker", {
            minDate: "today",
            maxDate: new Date().fp_incr(31),
            dateFormat: "d.m.Y",
            locate: "ru",
            onChange: function(selectedDates) {
                // Преобразуем выбранную дату в строку "день.месяц.год"
                selectedDate = selectedDates[0].toLocaleDateString('ru-RU'); // Получаем дату в формате день.месяц.год
                // console.log("Выбранная дата:", selectedDate);
                loadTimeSlots(selectedDate);
                checkTimeAvailability(selectedDate, selectedMasterId);
            }
        });


        // Функция для генерации временных слотов с шагом 30 минут
        function loadTimeSlots(date) {
            let startTime = 8;
            let endTime = 20;
            let timeSlots = '';

            for (let hour = startTime; hour <= endTime; hour++) {
                for (let minute = 0; minute < 60; minute += 30) {
                    let time = `${hour}:${minute === 0 ? "00" : "30"}`;
                    timeSlots += `
                        <div id="time-slot" class="time-slot" data-time="${time}">
                            <button>${time}</button>
                        </div>
                    `;
                }
            }

            $('#time-slots').html(timeSlots);

            // Обработчик для выбора времени
            $('#time-slots').on('click', '.time-slot', function() {
                selectedTime = $(this).data('time');
                // console.log("Выбранное время:", selectedTime);
                $(this).siblings().removeClass('selected');
                $(this).addClass('selected');
            });
        }


        $("#form_appointmen").on("submit", function(event) {
            event.preventDefault(); // Отменяем стандартное поведение формы

            // Получаем значения из полей формы
            let name = $("#name").val();
            let phone = $("#phone").val();
            let email = $("#email").val();
            let comment = $("#comment").val();

            // Преобразуем выбранную дату в формат YYYY-MM-DD
            let formattedDate = moment(selectedDate, "DD.MM.YYYY").format("YYYY-MM-DD");

            // Формируем строку с датой и временем в формате YYYY-MM-DD HH:mm:ss
            let appointmentDatetime = formattedDate + ' ' + selectedTime;


            // Считаем общую стоимость выбранных услуг
            let totalCost = selectedServices.reduce((acc, s) => acc + s.price, 0);

            // Делаем GET-запрос для проверки количества предыдущих записей
            $.ajax({
                url: `/api/appointment/count`,
                method: 'GET',
                data: { tel: phone },
                success: function(response) {
                    let discountText = '';
                    let discountedCost = totalCost;

                    if (response.count % 5 === 0 && response.count > 0) {
                        // Применяем скидку 10%
                        discountedCost = Math.round(totalCost * 0.9);
                        discountText = `<p><strong>🎉 Вам предоставлена скидка 10% как постоянному клиенту! 🎉</strong></p>`;
                    }

                    let servicesHtml = selectedServices.map(service =>
                        `<li>${service.name}</li>`
                    ).join('');

                    let confirmationHtml = `
                ${discountText}
                <p><strong>Имя:</strong> ${name}</p>
                <p><strong>Телефон:</strong> ${phone}</p>
                <p><strong>Email:</strong> ${email}</p><br><br>
                <p><strong>Комментарий:</strong> ${comment || '—'}</p>
                <p><strong>Дата и время:</strong> ${selectedDate} в ${selectedTime}</p><br><br>
                <p><strong>Услуги:</strong></p>
                <ol class="acceptModal-list">${servicesHtml}</ol><br><br>
                  ${discountedCost !== totalCost
                                        ? `<p><strong>Стоимость со скидкой:</strong> ${discountedCost} руб.</p>`
                                        : `<p><strong>Примерная стоимость:</strong> ${totalCost} руб.</p>`}
                            `;

                    $('#acceptModal-content').html(confirmationHtml);
                    myModal.open('#acceptModal');
                },
                error: function(xhr, status, error) {
                    console.error("Ошибка при получении количества записей:", error);
                    notyf.error("Не удалось проверить скидку клиента");

                    // Даже при ошибке всё равно отображаем модалку без скидки
                    let servicesHtml = selectedServices.map(service =>
                        `<li>${service.name}</li>`
                    ).join('');

                    let confirmationHtml = `
                <p><strong>Имя:</strong> ${name}</p>
                <p><strong>Телефон:</strong> ${phone}</p>
                <p><strong>Email:</strong> ${email}</p>
                <p><strong>Комментарий:</strong> ${comment || '—'}</p>
                <p><strong>Дата и время:</strong> ${selectedDate} в ${selectedTime}</p>
                <p><strong>Услуги:</strong></p>
                <ol class="acceptModal-list">${servicesHtml}</ol>
                <p><strong>Общая стоимость:</strong> ${totalCost} руб.</p>
            `;

                    $('#acceptModal-content').html(confirmationHtml);
                    myModal.open('#acceptModal');
                }
            });
        });
        $("#acceptModal-back").on("click", function(event) {
            myModal.open('#myModal')
        });
        $("#acceptModal-accept").on("click", function(event) {

            // Получаем значения из полей формы
            let name = $("#name").val();
            let phone = $("#phone").val();
            let email = $("#email").val();
            let comment = $("#comment").val();

            // Преобразуем выбранную дату в формат YYYY-MM-DD
            let formattedDate = moment(selectedDate, "DD.MM.YYYY").format("YYYY-MM-DD");

            // Формируем строку с датой и временем в формате YYYY-MM-DD HH:mm:ss
            let appointmentDatetime = formattedDate + ' ' + selectedTime;
            let appointmentData = {
                salon_id: selectedSalonId,
                client_name: name,
                phone: phone,
                email: email,
                comment: comment,
                master_id: selectedMasterId,
                appointment_datetime: appointmentDatetime, // Форматированная дата и время
                services: selectedServices.map(service => service.id) // Массив с ID выбранных услуг
            };
            $.ajax({
                url: '/api/services/appointment', // Роут для обработки запроса на создание записи
                method: 'POST',
                contentType: 'application/json', // Указываем, что данные отправляются в формате JSON
                data: JSON.stringify(appointmentData), // Преобразуем данные в строку JSON
                headers: {
                    'X-CSRF-TOKEN': csrfToken // Добавляем CSRF токен в заголовки запроса
                },
                success: function(response) {
                    notyf.success('Запись успешно создана!');
                    // Можно добавить дополнительные действия, например:
                    // Переключение на другой экран, сброс формы или закрытие модала
                    $('#form_appointmen')[0].reset(); // Очищаем форму
                    myModal.close('myModal'); // Закрытие модального окна
                },
                error: function(xhr, status, error) {
                    notyf.error('Ошибка при создании записи');
                }
            });
        });





        $('#time-slots').on('click', '.time-slot', function() {
            selectedTime = $(this).data('time');
            // console.log("Выбранное время:", selectedTime);
            $(this).siblings().removeClass('selected');
            $(this).addClass('selected');
        });
        $("#back-step-btn-step-one").on("click", function() {
            $("#step_one").hide();
            $("#step_zero").show();
            $(".hystmodal__appointment-step__one").removeClass("passive_step").addClass("active_step");
            $(".hystmodal__appointment-step__two").removeClass("active_step").addClass("passive_step");
        });

        // Обработчик для кнопки "Назад" на шаге 3
        $("#back-step-btn-step-two").on("click", function() {
            $("#step_two").hide();
            $("#step_one").show();
            $(".hystmodal__appointment-step__two").removeClass("passive_step").addClass("active_step");
            $(".hystmodal__appointment-step__three").removeClass("active_step").addClass("passive_step");
        });

        // Обработчик для кнопки "Назад" на шаге 4
        $("#back-step-btn-step-three").on("click", function() {
            $("#step_three").hide();
            $("#step_two").show();
            $(".hystmodal__appointment-step__three").removeClass("passive_step").addClass("active_step");
            $(".hystmodal__appointment-step__four").removeClass("active_step").addClass("passive_step");
        });

        // Обработчик для кнопки "Назад" на шаге 5
        $("#back-step-btn-step-four").on("click", function() {
            $("#step_four").hide();
            $("#step_three").show();
            $(".hystmodal__appointment-step__four").removeClass("passive_step").addClass("active_step");
            $(".hystmodal__appointment-step__five").removeClass("active_step").addClass("passive_step");
        });
    });
</script>



