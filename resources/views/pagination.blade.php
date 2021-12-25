@if (Auth::check())
    @extends('layout.app')

    @section('title-block')Все пасты пользователя@endsection

    @section('content2')

            <h2 class="h2Main">Все ваши пасты</h2>
            <div style="margin-bottom: 35px;">
                На этой странице вы видите все свои пасты с пагинацией по 3 шт.
            </div>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Название пасты</th>
                    <th scope="col">Текст пасты</th>
                    <th scope="col">Доступность</th>
                    <th scope="col">Дата</th>
                </tr>
                </thead>

                <tbody>
                @foreach($all_your_data as $data)

                    <tr>
                        <th scope="row">{{ $data-> title}}</th>
                        <td>{{ $data-> pasta }}</td>
                        <td>{{ $data-> access }}</td>
                        <td>{{ date("Y-m-d H:i:s", $data-> publ_data)}}</td>
                    </tr>

                @endforeach
                </tbody>

            </table>
            <div style="text-align: center;margin: 35px 0;">
                {{ $all_your_data-> links() }}
            </div>


    @endsection

@else
    <?php header('Location: /'); exit(); ?>
@endif
