@extends('layout.app')

@section('title-block')Все пасты@endsection

@section('content')
    <h2 class="h2Main">Добавить пасту</h2>
    <form style="width: 100%; margin-top: -47px;" action="{{ route('contact-form') }}" method="post">
        <div class="form-group">
            @csrf
            <br><br>
            <input name="title" id="title" class="form-control" placeholder="Введите название пасты" rows="3"></input>
            <br>
            <textarea name="pasta" id="pasta" class="form-control" placeholder="Введите пасту" rows="7"></textarea>
            <div style="color: #b4b8bb;">В пасте должно быть от 1 до 1000 символов</div>
            <label for="access" style="padding: 30px 0 5px;">Приватность</label>
            <select name="access" id="acces" class="form-select" style="width: 100%;">
                <option value="public" selected>Видна всем</option>
                <option value="unlisted" >Приватная</option>
            </select>
            <label for="lifetime" style="padding: 30px 0 5px;">Время жизни</label>
            <select name="lifetime" id="lifetime" class="form-select" style="width: 100%;">
                <option value="600" selected>10 мин</option>
                <option value="3600" >1 час</option>
                <option value="10800" >3 часа</option>
                <option value="86400" >1 день</option>
                <option value="2592000" >1 месяц</option>
                <option value="unlim" >без ограничения</option>
            </select>
            <label for="syntax" style="padding: 30px 0 5px;">Подсветка синтексиса</label>
            <select name="syntax" id="syntax" class="form-select" style="width: 100%;">
                <option disabled selected value>нет</option>
                <option value="html">HTML</option>
                <option value="php" >PHP</option>
                <option value="javascript" >JS</option>
            </select>
            <br><br>

            <div style="display: flex;">
                <button class="btn btn-success" type="submit">Добавить</button>
            </div>
            <BR>
            <div class="all_active_subs_new"></div>
            @if (Auth::check())
                <?php $user = Auth::user();?>
                <input type="hidden" name="autor" value="<?=$user['id'];?>">
            @else
                <input type="hidden" name="autor" value="">
            @endif
            @if (Auth::check())
                <?php $user = Auth::user();?>
                <input type="hidden" name="autor_name" value="<?=$user['name'];?>">
            @else
                <input type="hidden" name="autor_name" value="">
            @endif

            @include('inc.allYourPasts')

        </div>
    </form>



@endsection


@section('aside')
    @include('inc.allPasts')
@endsection


