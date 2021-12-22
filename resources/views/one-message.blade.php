@extends('layout.app')

@section('title-block'){{ $data3->title }}@endsection

@section('aside')
    @include('inc.allPasts')
@endsection


@section('content')
    <h2 class="h2">Одна паста</h2>
    <div class="alert alert-info">
        <h4>{{ $data3->title }}</h4>
        <div style="margin: 30px 0;">
            <?php
                $syntax = $data3->syntax;
                if($syntax =='') {
                    echo $data3->pasta;
                }else{
                    echo '<pre><code data-language="'.$data3->syntax.'">'.$data3->pasta.'</code></pre>';
                }
            ?>
        </div>
        <div class="pastsDate">
            <div>
                <?php
                $t = $data3['publ_data'];
                echo date("Y-m-d H:i:s", $t);
                ?>
            </div>
            <!--<a href="{{ route('contact-data-one', $data3->id) }}"><botton class="btn btn-outline-success">Посмотреть</botton></a>-->
        </div>

    </div>
@endsection


