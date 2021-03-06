@extends('layout.app')

@section('title-block')Об авторе@endsection

@section('content')
    <h2 class="h2Main">Обо мне</h2>
    <p>Привет, меня зовут Дмитрий и я хочу к Вам в команду разработчиков.</p>
    <p>Оцениваю уровень своих способностей, как «заряженный джун ++ уровеня», со светящимися глазами
        и желанием развиваться. Сегодня Джун, завтра Мидл, после завтра в Сеньор. Такова дорожная карта =).</p>

    <p>Мое резюме на <a href="https://kemerovo.hh.ru/resume/5a942c90ff0733e3e70039ed1f6c563549415a">hh.ru</a> PS: я много что могу xD</p>
    <p>А еще зацените мой проект <a href="https://pandaforecast.com/">pandaforecast.com</a></p>

    <p>С вами хочу получить правильный вектор развития, обрести наставника, новых коллег-друзей и только положительные эмоции от работы.</p>
    <p>Запилил тестовое задание. Хочу отметить, что <b>Laravel пришлось изучать прям налету </b> и сразу применять знания на практике в
        вашем тестовом задании.
        Получилось сделать почти все доп. задачки. </p>
    <p>Сделано все основное задание, а также:</p>
    <ul>
        <li>Реализована регистрация и вход</li>
        <li>Прикручена подсветка синтексиса для 3-х языков (JS, PHP и HTML), остальные по аналогии прикрутить можно.</li>
        <li>Поиск Public паст по их названию</li>
        <li>Валидация на добовление по обязательным полям. Выводятся ошибки, если валидация не пройдена</li>
        <li>Если войти в ЛК можно делать записи приватными или публичными</li>
        <li>На всех страницах авторизованный пользователь видит дополнительный блок с последними 10 своими пастами.</li>
        <li>У пользователя есть страничка со всеми своими пастами с пагинацией по 3 шт.</li>
        <li>Написал несколько тестов.</li>
        <li>Заюзал sticky и скроллбар зелененький для менюхи, чисто для красоты</li>
        <li>Использовал Bootstrap для усорение работы со стилями </li>
    </ul>

    <p>В целом я даже немного горд за себя и за проделанную работу, надеюсь вы оцените мои труды и скажете: «Welcome to the Team».</p>


@endsection
@section('aside')
    <img style="width: 100%; margin: auto; padding-top: 60px;" src="/pasta-carbonara.jpg">
    <BR>
    <BR>
    <p>Знаю, что пасты в данном случае от слова paste (вставлять), но чисто вот картиночка пасты, ом ном ном xD</p>
@endsection
