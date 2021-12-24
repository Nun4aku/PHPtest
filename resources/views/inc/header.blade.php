<div style="position: sticky;top: 0;z-index: 999;background: #ffffff; margin-bottom: 50px">
    <div class="d-flex flex-column flex-md-row align-items-center pb-3 px-5 border-bottom">
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
                    <li><a class="dropdown-item" href="{{ route('pagination', $user['id']) }}">Все мои пасты</a></li>
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
    <div class="header" style="display: block">
        <div class="progress-container">
            <div class="progress-bar" id="myBar" style="background-color: rgb(24 135 84);"></div>
        </div>
    </div>
</div>




<script>
    $('.dropdown-toggle').dropdown()
</script>
