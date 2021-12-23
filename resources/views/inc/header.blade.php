<div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 px-5 border-bottom" style="position: sticky;top: 0;z-index: 999;background: #ffffff;">
    <nav class="d-inline-flex mt-5 mt-md-3 ms-md-auto">
        @if (Auth::check())
            <a class="me-3 py-2 text-dark text-decoration-none" href="{{ route('contact-data') }}">Главная</a>
            <a class="me-3 py-2 text-dark text-decoration-none" href="{{ route('about') }}">Обо мне</a>
            <?php $user = Auth::user(); ?>

            <button class="btn btn btn-outline-success dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <?=$user['name'];?>
            </button>
            <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href="{{ route('login') }}">Личный кабинет</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="{{ route('logout') }}">Выход</a></li>
            </ul>
        @else
            <a class="me-3 py-2 text-dark text-decoration-none" href="{{ route('contact-data') }}">Главная</a>
            <a class="me-3 py-2 text-dark text-decoration-none" href="{{ route('about') }}">Об авторе</a>
            <button class="btn btn btn-outline-success dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Войти
            </button>
            <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href="{{ route('login') }}">Вход</a></li>
                <li><a class="dropdown-item" href="{{ route('register') }}">Регистрация</a></li>
            </ul>
        @endif
    </nav>
</div>


<script>
    $('.dropdown-toggle').dropdown()
</script>
