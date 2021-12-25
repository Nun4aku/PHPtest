<h2 class="h2Main">Последние public пасты пользователей</h2>
@foreach($data as $al)
    <div class="alert alert-success">
        <div class="pastsDate">
            <h4>{{ $al->title }}</h4>
            <div style="font-size: 12px;">
                <div>Автор:
                    @if(empty($al->autor_name))
                        гость
                    @else
                        {{ $al->autor_name }}
                    @endif
                </div>

                <div>{{ date("Y-m-d H:i:s", $al['publ_data']) }}</div>
            </div>
        </div>
        <div style="margin: 30px 0;">
            @if($al->syntax == '')
                {{ $al->pasta }}
            @else
                    <pre><code data-language="{{ $al->syntax }}">{{ $al->pasta }}</code></pre>
            @endif
        </div>
        <div class="pastsDate">
            <a href="{{ route('contact-data-one', $al->id) }}"><botton class="btn btn-outline-success">Посмотреть</botton></a>
        </div>


    </div>

@endforeach
