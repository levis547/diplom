document.addEventListener("DOMContentLoaded", function () {
    const sidebar = document.getElementById("mobile-sitebar");
    const openBtn = document.getElementById("mobile-sitebar__open");
    const closeBtn = document.getElementById("mobile-sitebar__close");

    // Открытие меню
    openBtn.addEventListener("click", function () {
        sidebar.classList.add("active");
    });

    // Закрытие меню
    closeBtn.addEventListener("click", function () {
        sidebar.classList.remove("active");
    });

    // Закрытие по клику вне сайдбара
    document.addEventListener("click", function (event) {
        if (!sidebar.contains(event.target) && !openBtn.contains(event.target)) {
            sidebar.classList.remove("active");
        }
    });
});

document.addEventListener("DOMContentLoaded", function () {
    const dropdown = document.getElementById("mobile-sitebar__dropdown");
    const link = dropdown.querySelector("a");
    const arrow = dropdown.querySelector(".mobile-sitebar__dropdown-arrow");
    const items = dropdown.querySelector(".mobile-sitebar__dropdown-items");
    let firstClick = true;

    link.addEventListener("click", function (event) {
        if (firstClick) {
            event.preventDefault();
            arrow.classList.toggle("active");
            items.classList.toggle("active");
            firstClick = false;
        }
    });

    document.addEventListener("click", function (event) {
        if (!dropdown.contains(event.target)) {
            arrow.classList.remove("active");
            items.classList.remove("active");
            firstClick = true;
        }
    });
});
