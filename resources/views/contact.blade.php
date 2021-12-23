@extends('layout.app')

@section('title-block')Контакты@endsection

@section('content')

    <h2 class="h2Main">Добаить пасту</h2>
    <form style="width: 100%;" action="{{ route('contact-form') }}" method="post">
        <div class="form-group">
            @csrf
            <br><br>
            <textarea name="pasta" id="pasta" class="form-control" placeholder="Введите пасту" rows="3"></textarea>
            <br>
            <select name="access" id="acces" class="form-select" style="width: 100%;">
                <option value="public" selected>public</option>
                <option value="unlisted" >unlisted</option>
            </select>
            <br><br>
            <select name="lifetime" id="lifetime" class="form-select" style="width: 100%;">
                <option value="600" selected>10 мин</option>
                <option value="3600" >1 час</option>
                <option value="10800" >3 часа</option>
                <option value="86400" >1 день</option>
                <option value="2592000" >1 месяц</option>
                <option value="unlim" >без ограничения</option>
            </select>
            <br><br>

            <div style="display: flex;">
                <button class="btn btn-success" type="submit">Добавить</button>
            </div>
            <BR>
            <div class="all_active_subs_new"></div>

        </div>
    </form>


@endsection
