@extends('layout.app')

@section('title-block')Все пасты@endsection

@section('content')
    <h2 class="h2">Паста которой поделились</h2>
    @foreach($data2 as $al)
        <div class="alert alert-info">
            <h4>{{ $al->title }}</h4>
            <?php
                $syntax = $al->syntax;
                if($syntax =='') {
                    echo $al->pasta;
                }else{
                    echo '<pre><code data-language="'.$al->syntax.'">'.$al->pasta.'</code></pre>';
                }
            ?>
            <BR>
            <?php
            $t = $al['publ_data'];
            echo date("Y-m-d H:i:s", $t);
            ?>
            <BR>
            <!-- <a href="#"><botton class="btn btn-success">Посмотреть</botton></a> -->

        </div>

    @endforeach


@endsection

@section('aside')
    @include('inc.allPasts')
@endsection



