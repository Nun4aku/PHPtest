@if (Auth::check())
    <?php
    $user = Auth::user();
    $your_pasts = DB::table('contacts')->where('autor', '=', $user['id'])->take(10)->get();

    echo '<h2 class="h2">10 последних ваших паст</h2>';

    if (count($your_pasts)) {
        foreach ($your_pasts as $your_one_past){

            echo '
                        <div class="alert alert-info">
                            <h4>'.$your_one_past->title.'</h4>
                            <div style="margin: 30px 0;">';

            $syntax =$your_one_past->syntax;
            if($syntax =='') {
                echo $your_one_past->pasta;
            }else{
                echo '<pre><code data-language="'.$your_one_past->syntax.'">'.$your_one_past->pasta.'</code></pre>';
            }


            echo '      </div>
                            <div class="pastsDate">
                                <div>';
            $t = $your_one_past->publ_data;
            echo date("Y-m-d H:i:s", $t);
            echo '
                                </div>
                            </div>
                        </div>';
        }
    } else {
        echo '<div class="alert alert-info">У вас еще нет паст</div>';
    }
    ?>
@endif
