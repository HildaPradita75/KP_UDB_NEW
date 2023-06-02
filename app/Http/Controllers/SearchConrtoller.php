<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchConrtoller extends Controller
{
    public function search(Request $request)
    {
        $keyword = $request->input(''); 
        
        $results = Post::where('title', 'LIKE', "%$keyword%")
                       ->orWhere('content', 'LIKE', "%$keyword%")
                       ->get();

        return view('search-results', ['results' => $results]);
    }
}
