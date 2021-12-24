<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller {
    public function submit (ContactRequest $req) {

        $publ_data = time();
        $hash = md5($publ_data);

        $templ = $req->input('lifetime');

        if($templ === 'unlim') {
            $lifetime = 2147483647;
        }else{
            $lifetime = $req->input('lifetime') + $publ_data;
        }

        $contact = new Contact();
        $contact->title = $req->input('title');
        $contact->pasta = $req->input('pasta');
        $contact->publ_data = $publ_data;
        $contact->access = $req->input('access');
        $contact->hash = $hash;
        $contact->lifetime = $lifetime;
        $contact->syntax = $req->input('syntax');
        $contact->autor = $req->input('autor');
        $contact->autor_name = $req->input('autor_name');

        $contact->save();

        if($req->input('access') === 'public') {
            $mes = 'Паста была добавлена';
        }else{
            $url = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'];
            $link = $url.'/contact/one?hash='.$hash;
            //$mes = '<a href="'.$link.'">'.$link.'</a>' ;
            $mes = $link ;
        }


        return redirect()->route('contact-data')->with('success', $mes);
    }

    public function allData() {
        $contact = new Contact();
        $data_now = time();

        return view('messages', ['data' => $contact->where('access', '=', 'public')
                                                        ->where('lifetime', '>', time())
                                                        ->orderBY('publ_data', 'desc')
                                                        ->take(10)->get()]);
    }

    public function oneData() {
        $contact = new Contact();

        //return view('one', ['data2' => $contact->where('hash', '=', $_GET['hash'])->get()]);
         return view('one', ['data2' => $contact->where('hash', '=', $_GET['hash'])->get()],
            ['data' => $contact->where('access', '=', 'public')
            ->where('lifetime', '>', time())
            ->orderBY('publ_data', 'desc')
            ->get()]);
    }

    public function showOneMessage($id){
        $contact = new Contact();
        return view('one-message', ['data3' => $contact->find($id)],
            ['data' => $contact->where('access', '=', 'public')
                ->where('lifetime', '>', time())
                ->orderBY('publ_data', 'desc')
                ->get()]
        );
    }

    public function all_your_Data($autor) {
        $contact = new Contact();

        return view('user', ['your_data' => $contact->where('autor', '=', $autor)
            ->orderBY('publ_data', 'desc')
            ->take(10)->get()]);
    }

    public function privateSubmit($id) {
        DB::table('contacts')
            ->where('id', '=', $id)
            ->update(['access' => 'unlisted']);
        return redirect()->route('home')->with('success', 'Запись №'.$id.' сделана приватной');
    }

    public function publicSubmit($id) {
        DB::table('contacts')
            ->where('id', '=', $id)
            ->update(['access' => 'public']);
        return redirect()->route('home')->with('success', 'Запись №'.$id.' доступна всем');
    }

    public function pagination($autor) {
        $contact = new Contact();
        return view('pagination', ['all_your_data' => $contact->where('autor', '=', $autor)
            ->orderBY('publ_data', 'desc')
            ->SimplePaginate(3)]);
    }
}
