@extends('layout.app')

@section('title-block')Все пасты@endsection

@section('content')
    <h2 class="h2Main">Результаты поиска</h2>
     @foreach($data2 as $al)
        <div class="alert alert-info">

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
                    <div>
                        <?php
                        $t = $al['publ_data'];
                        echo 'от '.date("Y-m-d H:i:s", $t);
                        ?>
                    </div>
                </div>
            </div>
            <div style="margin: 30px 0;">
                <?php
                    $syntax = $al->syntax;
                    if($syntax =='') {
                        echo $al->pasta;
                    }else{
                        echo '<pre><code data-language="'.$al->syntax.'">'.$al->pasta.'</code></pre>';
                    }
                ?>
            </div>
            <div class="pastsDate">
                <a href="{{ route('contact-data-one', $al->id) }}"><botton class="btn btn-outline-success">Посмотреть</botton></a>
            </div>
            <!-- <a href="#"><botton class="btn btn-success">Посмотреть</botton></a> -->

        </div>

    @endforeach
@endsection

@section('aside')
    @include('inc.allPasts')
@endsection



