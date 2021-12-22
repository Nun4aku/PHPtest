<div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 px-5 border-bottom">

    <nav class="d-inline-flex mt-5 mt-md-3 ms-md-auto">

        <a class="me-3 py-2 text-dark text-decoration-none" href="{{ route('contact-data') }}">Главная</a>
        @if (Auth::check())
            <a class="me-3 py-2 text-dark text-decoration-none" href="{{ route('login') }}">Личный кабинет</a>
        @endif
        @if (Auth::check())
            <a class="me-3 py-2 text-dark text-decoration-none" href="{{ route('logout') }}">Выход</a>
        @else
            <a class="me-3 py-2 text-dark text-decoration-none" href="{{ route('login') }}">Вход</a>
            <a class="me-3 py-2 text-dark text-decoration-none" href="{{ route('register') }}">Регистрация</a>
        @endif
        <a class="me-3 py-2 text-dark text-decoration-none" href="{{ route('about') }}">Обо мне</a>

    </nav>
</div>
