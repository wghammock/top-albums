<?php

namespace App\Http\Controllers;


// TEST
// use App\Models\Album;
use Illuminate\Support\Facades\Http;


use Illuminate\Http\Request;

class DashController extends Controller
{
    /**
     * Look up the top 100 albums and redirect to Dashboard view.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // TEST TEST
        $albumsJSON =  Http::retry(3, 100)->get('https://itunes.apple.com/us/rss/topalbums/limit=100/json')->throw(function ($response, $e) {
            //
        })->json();


        // TESTING =========================================
        // dd($albumsJSON);
        // dd($albumsJSON['feed']['entry']);

        $albums = $albumsJSON['feed']['entry'];

        return view('welcome', [
             'albums' => $albums
        ]);

        // return view('welcome')->with('albums', $albums);


        // TESTING =========================================


        // return view('welcome', [
        //     'albums' => Album::all()
        // ]);

        
    }
}
