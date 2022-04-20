<?php

namespace App\Http\Controllers;

// use App\Models\Album;  <-- Next steps

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use App\Http\Controllers\AlbumController;

class DashController extends Controller
{
    /**
     * Look up the top 100 albums and redirect to Dashboard view.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        // TESTING =========================================
         // API CALL
        // $albumsJSON =  Http::retry(3, 100)->get('https://itunes.apple.com/us/rss/topalbums/limit=100/json')->throw(function ($response, $e) {
            //
        // })->json();
        // dd($albumsJSON['feed']['entry']);
        // TESTING =========================================
        

        $albumsJSON = AlbumController::index();
        $albums = $albumsJSON['feed']['entry'];

        return view('welcome', [
            'albums' => $albums
        ]);



        // Developer Notes - 
        // The Next step would be to persist to the DB and use DB results vs pinging the API

        // return view('welcome', [
        //     'albums' => Album::all()
        // ]);


    }
}
