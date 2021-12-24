@if (Auth::check())
    <?php
    $user = Auth::user();
    $your_pasts = DB::table('contacts')->where('autor', '=', $user['id'])->take(10)->get();

    echo '<h2 class="h2Main">10 последних ваших паст</h2>';

    if (count($your_pasts)) {
        foreach ($your_pasts as $your_one_past){

            echo '
                        <div class="alert alert-info">
                            <div class="pastsDate">
                                <h4>'.$your_one_past->title.'</h4>';

                                if($your_one_past->access == 'public'){
                                    $pablic_or_private = 'Доступна всем';
                                }else{
                                    $pablic_or_private = 'Приватная запись';
                                }
                                $t = $your_one_past->publ_data;
            echo'
                                <div>
                                    <div style="font-size: 12px;">'.$pablic_or_private.'</div>
                                    <div style="font-size: 12px;">от '.date("Y-m-d H:i:s", $t).'</div>
                                 </div>
                            </div>
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


                                    if($your_one_past->access == 'public'){
                                        $link_p_p = '/home/private/';
                                        $name_link = '/svg/private.svg';
                                        $text = 'Сделать приватной';
                                    }else{
                                        $link_p_p = '/home/public/';
                                        $name_link = '/svg/pablic.svg';
                                        $text = 'Сделать публичной';
                                    }
            echo '              </div>
                                <div id="btn-tooltip" title="'.$text.'">
                                    <a href="'.$link_p_p.''.$your_one_past->id.'">
                                        <img style="width: 30px;"src="'.$name_link.'">
                                     </a>

                                </div>
                            </div>
                        </div> ';
        }
    } else {
        echo '<div class="alert alert-info">У вас еще нет паст</div>';
    }
    ?>
@endif

<script>
    $('#btn-tooltip').tooltip();
</script>
