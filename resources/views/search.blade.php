@extends('layout.app')

@section('title-block')Все пасты@endsection

@section('content')
    <h2>Результаты поиска</h2>
    @foreach($data2 as $al)
        <div class="alert alert-info">

            <h4>{{ $al->title }}</h4>
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
                <div>
                    <?php
                    $t = $al['publ_data'];
                    echo date("Y-m-d H:i:s", $t);
                    ?>
                </div>
                <a href="{{ route('contact-data-one', $al->id) }}"><botton class="btn btn-outline-success">Посмотреть</botton></a>
            </div>
            <!-- <a href="#"><botton class="btn btn-success">Посмотреть</botton></a> -->

        </div>

    @endforeach

@endsection

@section('aside')
    @include('inc.allPasts')
@endsection



