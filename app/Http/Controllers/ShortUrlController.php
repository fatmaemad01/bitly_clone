<?php

namespace App\Http\Controllers;

use App\Models\ShortUrl;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShortUrlController extends Controller
{
    public function index()
    {
        $urls = ShortUrl::all();

        return view('dashboard.index' , compact('urls'));
    }

    public function create () 
    {
        return view('dashboard.create');
    }


    public function store(Request $request)
    {
        // dd($request);
        $this->validate($request, [
            'basic_url' => 'required|url',
            'title'=> 'required|string|max:255|min:3'
        ]);

        $request['short_url']= Str::random(8);
        // $basicUrl = $request->input('basic_url');
        // $request['title'] = $request->input('title');
        // $shortUrl = Str::random(8);

        $url = ShortUrl::create($request->all());

        return redirect()->route('dashboard.index', 'url' );
    }


    public function redirect($shortUrl)
    {
        $url = ShortUrl::where('short_url','=', $shortUrl)->first();

        if ($url) {
            return redirect($url->basic_url );
            
        } else {
            abort(404);
        }

    }
    

    public function destroy($id)
    {
        ShortUrl::destroy($id);
        return redirect()->route('dashboard.index');

    }

}
