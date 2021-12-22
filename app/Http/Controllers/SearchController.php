<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Requests\SearchRequest;
use App\Models\Search;

class SearchController extends Controller {

    public function search(SearchRequest $request){
        /*$contact = new Contact();
        return view('one-message', ['data3' => $contact->find($id)]);*/
        $search = $request->search;
        $search_word = '%'.$search.'%';

        $contact = new Contact();
        $data_now = time();

        return view('search', ['data2' => $contact->where('title', 'LIKE', $search_word)->where('access', '=', 'public')
            ->orderBY('publ_data', 'desc')
            ->take(10)->get()],
            ['data' => $contact->where('access', '=', 'public')
                ->where('lifetime', '>', time())
                ->orderBY('publ_data', 'desc')
                ->take(10)->get()]);

    }
}
