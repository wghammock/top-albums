<?php

namespace App\Http\Controllers;

use App\Models\Album;
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
        //TODO add checks for status 400/404/500, failed calls etc.
        // return Http::retry(3, 100)->get('https://itunes.apple.com/us/rss/topalbums/limit=100/json')->throw(function ($response, $e) {
        //     //
        // })->json();


        return view('welcome', [
            'albums' => Album::all()
        ]);

        
    }
}
