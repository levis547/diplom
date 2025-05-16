@extends('layout.main')
@section('main')
    <div class="error-container">
        <div class="error-container__action">
            <h1>404</h1>
            <p>Ой что-то пошло не так, или страница
                не найдена... Пока что</p>
            <a href="/">Перейти на главную</a>
        </div>
        <div class="error-container__img">
            <img src="{{ asset('assets/img/error.png') }}" alt="">
        </div>
    </div>
@endsection
