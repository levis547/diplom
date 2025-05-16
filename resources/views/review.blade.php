@extends('layout.main')

@section('main')
    <nav class="breadcrumbs" aria-label="Хлебные крошки">
        <a href="/" class="breadcrumb-link">Главная</a>
        <span class="breadcrumb-separator" aria-hidden="true"></span>
        <span class="breadcrumb-current">Отзывы</span>
    </nav>
    <div class="page-header review">
        <h1 class="baskerville"><span class="red-color">Отзывы</span></h1>
        <a href="#" class="baskerville" data-hystmodal="#reviews">Оставить отзыв</a>
    </div>
    <div class="review-container">
        <div class="review-items" id="review-items">
        </div>
        <div class="btn-showMore" id="load-more">
            <p class="baskerville" >Показать ещё</p>
        </div>
    </div>
    <script>
        let page = 1;


        function loadReviews() {
            fetch(`/api/page-reviews?page=${page}&per_page=8`)
                .then(response => response.json())
                .then(data => {
                    const reviews = data.data;  // Данные о отзывах
                    const reviewItemsContainer = document.getElementById('review-items');

                    reviews.forEach(review => {
                        const reviewElement = document.createElement('div');
                        reviewElement.classList.add('review-item');
                        reviewElement.innerHTML = `
                            <div class="review-item__header">
                                <p>${review.full_name}</p>
                                <div class="review-item__header-stars">
                                    ${getStars(review.rating)}
                                </div>
                            </div>
                            <div class="review-item__content">
                                <p>${review.comment}</p>
                            </div>
                        `;
                        reviewItemsContainer.appendChild(reviewElement);
                    });

                    if (!data.next_page_url) {
                        document.getElementById('load-more').style.display = 'none';
                    }
                })
                .catch(error => console.error('Error loading reviews:', error));
        }

        function getStars(rating) {
            let stars = '';
            for (let i = 0; i < 5; i++) {
                stars += `<div class="review-item__stars-item ${i < rating ? 'active' : ''}"></div>`;
            }
            return stars;
        }

        document.getElementById('load-more').addEventListener('click', () => {
            page++;
            loadReviews();
        });

        loadReviews();
    </script>
@endsection




