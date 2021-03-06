@extends('layout.app')

@section('title-block'){{ $data3->title }}@endsection

@section('aside')
    @include('inc.allPasts')
@endsection


@section('content')
    <h2 class="h2Main">Одна паста</h2>
    <div class="alert alert-info">
        <div class="pastsDate">
            <h4>{{ $data3->title }}</h4>
            <div style="font-size: 12px;">
                <div>Автор:
                    @if(empty($data3->autor_name))
                        гость
                    @else
                        {{ $data3->autor_name }}
                    @endif
                </div>
                <div>
                    <?php
                    $t = $data3['publ_data'];
                    echo 'от '.date("Y-m-d H:i:s", $t);
                    ?>
                </div>
            </div>
        </div>
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


    </div>
@endsection


