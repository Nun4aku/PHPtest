@extends('layout.app')

@section('title-block')Личный кабинет@endsection

@section('content')
    @include('inc.allYourPasts')
@endsection

@section('aside')
    @if (Auth::check())
        <?php
        $user = Auth::user();
        $your_pasts = DB::table('contacts')->where('autor', '=', $user['id'])->where('access', '=', 'unlisted')->take(10)->get();

        echo '<h2 class="h2Main">Ваши приватные пасты</h2>';

        if (count($your_pasts)) {
            foreach ($your_pasts as $your_one_past){
                $url = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'];
                $link = $url.'/contact/one?hash='.$your_one_past->hash;
                $t = $your_one_past->publ_data;
                echo '
                        <div class="alert alert-success">
                            <div class="pastsDate">
                                <h4>'.$your_one_past->title.'</h4>
                                <div style="font-size: 12px;">'.date("Y-m-d H:i:s", $t).'</div>
                            </div>
                            <div style="margin: 30px 0;">';

                                $syntax =$your_one_past->syntax;
                                if($syntax =='') {
                                    echo $your_one_past->pasta;
                                }else{
                                    echo '<pre><code data-language="'.$your_one_past->syntax.'">'.$your_one_past->pasta.'</code></pre>';
                                }

                echo'        </div>
                             <div class="pastsDate">
                                 <div>
                                    <div>Паста доступна по ссылке</div>
                                    <div style="font-size: 12px;"><a style="color: #2e5041;" href="'.$link.'">'.$link.'</a></div>
                                </div>
                             </div>
                        </div>';
            }
        } else {
            echo '<div class="alert alert-info">У вас еще нет приватных паст</div>';
        }
        ?>

    @endif

@endsection


